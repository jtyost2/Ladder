<?php
/* Match Test cases generated on: 2010-06-27 14:06:37 : 1277668237*/
App::import('Model', 'Match');

class MatchTestCase extends CakeTestCase {
	var $fixtures = array('app.match', 'app.sport', 'app.person', 'app.people_match');

	function startTest() {
		$this->Match =& ClassRegistry::init('Match');
	}

	function endTest() {
		unset($this->Match);
		ClassRegistry::flush();
	}

}
?>