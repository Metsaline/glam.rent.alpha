<?php
/**	User **/
  define("_VALID_PHP", true);
  require_once("../init.php");
?>
<?php
  /* BrandRegister */
  if (isset($_POST['BrandRegister']))
      : if (intval($_POST['BrandRegister']) == 0 || empty($_POST['BrandRegister']))
      : redirect_to("../index.php");
  endif;
  $user->BrandRegister();
  endif;
?>
