<?php
/**
  * @author Punished Foxx{{ punishedfoxx@gmail.com }}
  * @version 3.0.0
  * @license Open Source
  * @copyright 2015 PunishedFoxx
 */

# UNDERSTAND :: This is the database TABLE FILE ????????

namespace WesMurray\User;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent {

	// table name
	protected $table = 'users';

	// fillable ( which fields are inertable and updateable )
	protected $fillable = [
		'name',
	];

}