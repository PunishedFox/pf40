<?php
/**
  * @author Punished Foxx{{ punishedfoxx@gmail.com }}
  * @version 3.0.0
  * @license Open Source
  * @copyright 2015 PunishedFoxx
 */

# USING DATABASE VENDOR: ILLUMINATE \ DATABASE

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
	'driver' 	=> 'mysql',
	'database' 	=> 'Swift',
	'host' 		=> '127.0.0.1',
	'username' 	=> 'root',
	'password' 	=> 'P@ssw0rd',
	'charset' 	=> 'utf8',
	'collation' => 'utf8_unicode_ci',
	'prefix' 	=> '',
]);

$capsule->bootEloquent();