<?php
/** Core Class **/
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
  
  class Core {
	  private $sTable = "settings";
	  public $fee = 2.5;
	  
      /**
       * Core::__construct()
       * 
       * @return
       */
      public function __construct() {
          $this->getSettings();
      }
      
      /**
       * Core::getSettings()
       *
       * @return
       */
      private function getSettings()
      {
          global $db;
          $sql = "SELECT * FROM " . $this->sTable;
          $row = $db->first($sql);
		  $this->site_url = "https://glam.rent/testing/";
		  $this->site_logo = $row["site_logo"];
		  }

      /**
       * Core::PreLoader()
       *
       * @return
       */
      public function PreLoader()
      {
          global $db,$user;
		  
			$pre = '<div id="preloader" class="smooth-loader-wrapper">';
			$pre .= '<div class="preloader_container">';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '<div class="block"></div>';
			$pre .= '</div>';
			$pre .= '</div>';
		echo $pre;
	  }
  }
?>