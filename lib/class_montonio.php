<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/** Montonio Class **/ 
    require __DIR__ . '/montonio/autoload.php';
	use \Firebase\JWT\JWT;
 
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');

  class Montonio
  {
//	private $access_key = '6add5c24-727b-4c69-8793-b08792f4a3b3';
//	private $secret_key = 'hwmL3D40FlOAFzMr1ALxsw13rgju3yE87LPtDLUCnNu4';
//	private $url = 'https://payments.montonio.com?payment_token=';


	private $access_key = '1d57823e-5d69-41d7-8c12-2a31e0a53105';
	private $secret_key = 'VFUhuW8vIvvSgU3NM5v8YebD/SrD0awG4sUh+QmjkoNx';
	private $url = 'https://sandbox-payments.montonio.com?payment_token=';
	
	
      /**
       * Montonio::__construct()
       * 
       * @return
       */
      function __construct()
      {

      }

	  
  	  /**
	   * Montonio::Pay()
	   * 
	   * @return
	   */
	  public function Pay($o) {
		global $db,$core,$user;
		
		$payment_data = array(
			'amount'                           => $o["price"],
			'currency'                         => 'EUR',
			'access_key'                       => $this->access_key,
			'merchant_name'					   => 'Tasumine toote rendi eest: '.$o["product"],
			'preselected_locale' 			   => 'EE',
			'merchant_reference'               => $o["id"],
			'merchant_return_url'              => $core->site_url.'return.php?id='.$o["id"].'&hash='.$o["hash"],
			'merchant_notification_url'        => $core->site_url.'webhook/montonio.php?id='.$o["id"],
			'payment_information_unstructured' => 'Tasumine tehingu eest: '.$o["product"],
			'preselected_locale'               => 'et',
			'checkout_email'                   => $o["email"],
			'exp'                              => time() + (60 * 10), 
		);
		$payment_token = \Firebase\JWT\JWT::encode($payment_data, $this->secret_key);
		$data = array(
			"payment_token" => $payment_token
		);
		$db->update("cart", $data, "id='" . $o["id"] . "'");

		$return["url"] = $this->url.$payment_token;
		return $return;
	  }  
	  


  	  /**
	   * Montonio::Validate()
	   * 
	   * @return
	   */
	  public function Validate($payment_token,$order_id) {
		global $db,$core,$user;

			$decoded = Firebase\JWT\JWT::decode(
				$payment_token, 
				$this->secret_key, 
				array('HS256')
			);
			if ($decoded->access_key === $this->access_key &&
				$decoded->merchant_reference === $order_id &&
				$decoded->status === 'finalized') {
				
				$cart = $db->first("SELECT * FROM cart WHERE id = '".$order_id."'");
				$data = array(
					"user_id" => "1",
					"product_id" => $cart["product_id"],
					"start" => $cart["start"],
					"end" => $cart["end"],
					"location_id" => "1",
					"price" => $decoded->amount,
					"status" => "1",
					"hash" => $cart["hash"],
					"payment_token" => $cart["payment_token"],
					"created" => "NOW()"
				);
				$db->insert("orders",$data);

				$result["success"] = "1";
				$result["msg"] = "Jee makstud! :)";
			} else {
				$data = array(
					"order_id" => $order_id,
					"sum" => $decoded->amount,
					"payment_token" => $payment_token,
					"status" => "0",
					"created" => "NOW()"
				);
				$db->insert("montonio_return",$data);
				$result["success"] = "0";
				$result["msg"] = "Makse ebaõnnestus! Proovi uuesti!";
			}
		return $result;
		}
	  }	
?>