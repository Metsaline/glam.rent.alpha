<?php
  define("_VALID_PHP", true);
  require_once("init.php");
?>
<?php 
	if (isset($_GET["id"])) {
		$pro = $db->first("
		SELECT 
		a.id,a.user_id,a.brand_id,a.category_id,a.name,a.description,a.rentPrice,a.sellPrice,a.cover,a.cover_dir,a.stock,a.active,
		b.name as brandName,b.slug
		FROM product AS a
		LEFT JOIN brand AS b ON b.id = a.brand_id
		WHERE a.id = '".$_GET["id"]."'
		");
		if ($pro) {
			require "files/product.php"; 
		} else {
			require "files/error404.php"; 
		}
	} else {
		require "files/error404.php"; 		
	}
?>