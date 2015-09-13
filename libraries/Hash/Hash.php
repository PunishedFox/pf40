<?php
/**
  * @author Punished Foxx{{ punishedfoxx@gmail.com }}
  * @version 3.0.0
  * @license Open Source
  * @copyright 2015 PunishedFoxx
 */

namespace Hash;

class Hash {

	public function password($password, $salt) {

		$salt = $salt;
		$hash = hash('sha512', $password, $salt);

		return $hash;

	}

}