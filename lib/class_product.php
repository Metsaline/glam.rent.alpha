<?php
/** Product Class **/
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');

  class Product
  {
      /**
       * Product::__construct()
       * 
       * @return
       */
      function __construct()
      {
      }


/**
	   * Product::LoadCategory()
	   * 
	   * @return
	   */
	  public function LoadCategory() {
		global $db,$user;
			
			$cats = $db->fetch_all("SELECT * FROM category");
			if ($cats) {
			$result["data"] = $cats;
			$result["success"] = "1";
			} else {
			$result["success"] = "0";
			$result["msg"] = "Kategooriaid ei leitud.";
				
			}
			return $result;
	  }

	/**
	   * Product::LoadAllProducts()
	   * 
	   * @return
	   */
	  public function LoadAllProducts() {
		global $db,$user;
			
			$prod = $db->fetch_all("
				SELECT 
				a.id, a.name, a.description,a.rentPrice,a.sellPrice,a.cover_dir as cover,
				b.name as brand,b.slug
				FROM product AS a
				LEFT JOIN brand AS b ON b.user_id = a.user_id
				");
			if ($prod) {
			$result["data"] = $prod;
			$result["success"] = "1";
			} else {
			$result["success"] = "0";
			$result["msg"] = "Tooteid ei leitud.";
				
			}
			return $result;
	  }

	/**
	   * Product::GetProductPictures()
	   * 
	   * @return
	   */
	  public function GetProductPictures($product_id) {
		global $db,$user;
			
			$prod = $db->fetch_all("SELECT * FROM product_picture WHERE product_id = '".$product_id."'");

			if ($prod) {
			$result["data"] = $prod;
			$result["success"] = "1";
			} else {
			$result["success"] = "0";
			$result["msg"] = "Tooteid ei leitud.";
				
			}
			return $result;
	  }

	/**
	   * Product::LoadSuggestedProducts()
	   * 
	   * @return
	   */
	  public function LoadSuggestedProducts() {
		global $db,$user;
			
			$prod = $db->fetch_all("
				SELECT 
				a.id, a.name, a.description,a.rentPrice,a.cover_dir as cover,
				b.fname,b.lname
				FROM product AS a
				LEFT JOIN user AS b ON b.id = a.user_id
				WHERE a.suggested = 1
				");
			if ($prod) {
			$result["data"] = $prod;
			$result["success"] = "1";
			} else {
			$result["success"] = "0";
			$result["msg"] = "Tooteid ei leitud.";
				
			}
			return $result;
	  }



	  }	
?>