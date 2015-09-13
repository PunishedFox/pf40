<?php
/**
  * @author Punished Foxx{{ punishedfoxx@gmail.com }}
  * @version 3.0.0
  * @license Open Source
  * @copyright 2015 PunishedFoxx
 */



require 'vendor/autoload.php';

include 'object.php';
include 'controller.php';
include 'sammy.php';
include 'router.php';

include 'Helpers/Helpers.php';
include 'Database/Database.php';
include 'Hash/Hash.php';
include 'Config/Config.php';

include BASE_PATH . 'config/routes.php';

$sammy->run();