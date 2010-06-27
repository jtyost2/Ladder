<?php
/* Outcome Test cases generated on: 2010-06-27 14:06:16 : 1277668276*/
App::import('Model', 'Outcome');

class OutcomeTestCase extends CakeTestCase {
	var $fixtures = array('app.outcome', 'app.people_match');

	function startTest() {
		$this->Outcome =& ClassRegistry::init('Outcome');
	}

	function endTest() {
		unset($this->Outcome);
		ClassRegistry::flush();
	}

}
?>