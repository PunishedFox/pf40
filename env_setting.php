<?php
/**
  * @author Punished Foxx{{ punishedfoxx@gmail.com }}
  * @version 3.0.0
  * @license Open Source
  * @copyright 2015 PunishedFoxx
  *
  * APP ENVIRONMENT SETTING 
  *
  * This must be changed when server reaches the production server
  * FOR DEVELOPMENT (Local Based Development)
  *  change to " development "
  * FOR PRODUCTION (Live Apache Server)
  * change to " production "
  */

namespace Environment;

class Setting {

	public function string() {

		$callable = 'development';

		return $callable;

	}

}