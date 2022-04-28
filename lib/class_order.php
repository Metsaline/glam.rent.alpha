<?php
/** Order Class **/
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');

  class Order
  {
      /**
       * Order::__construct()
       * 
       * @return
       */
      function __construct()
      {
      }


/**
	   * Order::bronProduct()
	   * 
	   * @return
	   */
	  public function bronProduct() {
		global $db,$user,$core;
			
			$p = $db->first("SELECT * FROM product WHERE id = '".$_POST["product_id"]."'");
			$sum = $p["rentPrice"] * 3;

			$data = array(
				"user_id" => $user->uid,
				"product_id" => $_POST["product_id"],
				"start" => $_POST["start"],
				"end" => $_POST["end"],
				"price" => $sum,
				"hash" => $user->generateHash(),
				"created" => "NOW()"
			);
			$db->insert("cart",$data);
			
			$result["url"] = $core->site_url."cart.php";
			$result["success"] = "1";
		echo json_encode($result,true);
	  }

/**
	   * Order::GetCartData()
	   * 
	   * @return
	   */
	  public function GetCartData() {
		global $db,$user,$core;
			
		$proCart = $db->first("
			SELECT 
			a.id,a.start,a.end,a.price,
			b.id AS product_id,b.name,b.cover_dir,b.description
			FROM cart as a
			LEFT JOIN product as b ON b.id = a.product_id
			WHERE a.user_id = '".$user->uid."'
		");
		return $proCart;
	  }
	  /**
	   * Order::OrderPay()
	   * 
	   * @return
	   */
	  public function OrderPay()
	  {
		global $db,$core,$user;
			
		$c = $db->first("SELECT * FROM cart WHERE id = '".$_GET["cart_id"]."'");	
		$p = $db->first("SELECT * FROM product WHERE id = '".$c["product_id"]."'");	

		$data = array(
			"id" => $c["id"],
			"product" => $p["name"],
			"price" => $c["price"],
			"email" => $user->email,
			"hash" => $c["hash"]
		);
		require_once(location . "lib/class_montonio.php");
		$montonio = new Montonio();
		$result = $montonio->Pay($data);
		echo json_encode($result,true);
	  }
	  /**
	   * Order::CheckPayment()
	   * 
	   * @return
	   */
	  public function CheckPayment()
	  {
		global $db,$core;
			
		$check = $db->first("SELECT * FROM cart WHERE id = '".$_GET["id"]."' AND hash = '".$_GET["hash"]."' AND payment_token = '".$_GET["payment_token"]."'");
		
		
		if ($check) {
			$result["url"] = "thankyou.php?id=".$_GET["id"]."&hash=".$_SESSION["hash"];
		} else {
			$result["url"] = "404Payment.php?order_id=".$_GET["id"];				
		}

		echo json_encode($result,true);
	  }
	  }	
?>