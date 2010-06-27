<?php
/* PeopleSport Test cases generated on: 2010-06-27 14:06:16 : 1277668396*/
App::import('Model', 'PeopleSport');

class PeopleSportTestCase extends CakeTestCase {
	var $fixtures = array('app.people_sport', 'app.people', 'app.sports');

	function startTest() {
		$this->PeopleSport =& ClassRegistry::init('PeopleSport');
	}

	function endTest() {
		unset($this->PeopleSport);
		ClassRegistry::flush();
	}

}
?>