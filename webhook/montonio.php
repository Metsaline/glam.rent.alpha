<?php
  define("_VALID_PHP", true);
  require_once("../init.php");
?> 
<?php
$json_string = json_encode($_POST);

$file_handle = fopen('my_filename.json', 'w');
fwrite($file_handle, $json_string);
fclose($file_handle);

if (isset($_GET["payment_token"])) {
	$payment_token = $_GET["payment_token"];
	$order_id = $_GET["id"];
	require_once(location . "lib/class_montonio.php");
	$montonio = new Montonio();
	$montonio->Validate($payment_token,$order_id);
} 
?>