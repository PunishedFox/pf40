<?php
/**
  * @author Punished Foxx{{ punishedfoxx@gmail.com }}
  * @version 3.0.0
  * @license Open Source
  * @copyright 2015 PunishedFoxx
 */

namespace Flash;

class Flash {

	public function message($message_text) {
		return
		'
		<div class="flash">'.$message_text.'</div>
		';

	}

}