<?php
/* Sport Test cases generated on: 2010-06-27 14:06:30 : 1277668410*/
App::import('Model', 'Sport');

class SportTestCase extends CakeTestCase {
	var $fixtures = array('app.sport', 'app.match', 'app.person', 'app.role', 'app.people_match', 'app.people_sport');

	function startTest() {
		$this->Sport =& ClassRegistry::init('Sport');
	}

	function endTest() {
		unset($this->Sport);
		ClassRegistry::flush();
	}

}
?>