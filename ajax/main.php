<?php  define("_VALID_PHP", true);  require_once("../init.php");?><?php  /* CheckBrandUrl */  if (isset($_GET['CheckBrandUrl']))      : if (intval($_GET['CheckBrandUrl']) == 0 || empty($_GET['CheckBrandUrl']))      : redirect_to("../index.php");  endif;  $main->CheckBrandUrl();  endif;?><?php  /* CheckUniqueEmail */  if (isset($_GET['CheckUniqueEmail']))      : if (intval($_GET['CheckUniqueEmail']) == 0 || empty($_GET['CheckUniqueEmail']))      : redirect_to("../index.php");  endif;  $main->CheckUniqueEmail();  endif;?><?php  /* AddProductForm */  if (isset($_POST['AddProductForm']))      : if (intval($_POST['AddProductForm']) == 0 || empty($_POST['AddProductForm']))      : redirect_to("../index.php");  endif;  $main->AddProductForm();  endif;?><?php  /* LoadBrandProducts */  if (isset($_GET['LoadBrandProducts']))      : if (intval($_GET['LoadBrandProducts']) == 0 || empty($_GET['LoadBrandProducts']))      : redirect_to("../index.php");  endif;  $main->LoadBrandProducts();  endif;?>