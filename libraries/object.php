<?php
/**
  * @author Punished Foxx{{ punishedfoxx@gmail.com }}
  * @version 3.0.0
  * @license Open Source
  * @copyright 2015 PunishedFoxx
 */

use Helpers\Helpers;
use Hash\Hash;
use Config\Config;
use Flash\Flash;

use WesMurray\User\User;

class Object {

	public static $user_vars = array();

	public function __construct() {
		$this->helpers 	= new Helpers;
		$this->hash 	= new Hash;
		$this->config   = new Config;
		$this->user     = new User;
		$this->flash 	= new Flash;
	}

}
