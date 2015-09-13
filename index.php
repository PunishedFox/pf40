<?php
/**
  * @author Punished Foxx{{ punishedfoxx@gmail.com }}
  * @version 3.0.0
  * @license Open Source
  * @copyright 2015 PunishedFoxx
 */

session_start();

include 'env_setting.php';

use Environment\Setting;

#-------------------------------------
# TEST IF PDO IS ENABLED
#-------------------------------------
if(!defined('PDO::ATTR_DRIVER_NAME')) {
	echo '<hr />';
	echo '<h2>Application Error</h2>';
	echo '<hr />';
	echo '<p><strong>File:</strong> app/index.php</p>';
	echo '<p><strong>Line:</strong> 16 - 23</p>';
	echo '<p><strong>Error:</strong> PHP PDO</p>';
}

#-------------------------------------
# ERROR REPORTING
#-------------------------------------
$environment = new Setting;
$setting = $environment->string();

switch($setting) {
	case "development":

		ini_set('display_errors','On');
		ini_set('display_errors', 1);
		error_reporting(E_ALL);

	break;
	case "production":
	
		ini_set('display_errors', 0);
		ini_set('display_errors', 'Off');
		error_reporting(0);

	break;
	default: die('No environment set!');
}

#-------------------------------------
# DEFINING PATHS
#-------------------------------------
define('BASE_PATH', dirname(realpath(__FILE__)) . '/');
define('APP_PATH', BASE_PATH . 'app/');

#-------------------------------------
# TIMEZONE SETTINGS
#-------------------------------------
date_default_timezone_set('Africa/Johannesburg');


include BASE_PATH . 'libraries/core.php';