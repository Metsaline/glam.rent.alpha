<?php
  define("_VALID_PHP", true);
  require_once("init.php");
?> 
<?php 
if (isset($_GET["payment_token"])) {
	$payment_token = $_GET["payment_token"];
	$order_id = $_GET["id"];
	require_once(location . "lib/class_montonio.php");
	$montonio = new Montonio();
	$res = $montonio->Validate($payment_token,$order_id);
	if ($res["success"] == "1") {
		echo "Tehing õnnestus";
		// require "files/success.php";
	} else {
			echo "Tehing feilis!!!!";

//		require "files/fail.php";	
	}	
} 

?>