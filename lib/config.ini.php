<?php 
/** Configuration ***/

	if (!defined("_VALID_PHP"))
		die('Direct access to this location is not allowed.');
		  
	/**  
	Database Constants - these constants refer to
	the database configuration settings.
	**/
		define('DB_SERVER', 'localhost'); 
		define('DB_USER', 'scancovi_glam');  
		define('DB_PASS', 'testing@@@');  
		define('DB_DATABASE', 'scancovi_glam'); 

	/** 
	Show MySql Errors.
	Not recomended for live site. true/false
	**/
		$DEBUG = true;
?>
