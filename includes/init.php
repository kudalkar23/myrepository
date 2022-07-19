
<?php 


defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

//define('SITE_ROOT', DS . 'Applications' . DS . 'XAMPP' . DS . 'xamppfiles' . DS . 'htdocs' . DS . 'gallery' );
define("SITE_ROOT", dirname(dirname(__FILE__)));

defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH', SITE_ROOT.DS.'includes');
defined('CORE_PATH') ? null : define('CORE_PATH', SITE_ROOT.DS.'core');


require_once(INCLUDES_PATH.DS."config.php");


 ?>