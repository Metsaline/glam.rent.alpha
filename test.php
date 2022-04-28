<?php
  define("_VALID_PHP", true);
  require_once("init.php");
?>
<?php
$data = array(
	"fname" => "tere",
	"lname" => "terejah",
	"email" => "tere@tere.ee",
	"password" => sha1("teretere"),
	"is_admin" => "1",
);
$id = $db->insert("user",$data);
print_r($id);

$data = "1";
if ($data == "1") {
	echo "tore";
} else {
	echo "pole tore";
}

?>
