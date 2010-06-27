<?php
/* Person Test cases generated on: 2010-06-27 14:06:24 : 1277668284*/
App::import('Model', 'Person');

class PersonTestCase extends CakeTestCase {
	var $fixtures = array('app.person', 'app.role', 'app.match', 'app.sport', 'app.people_match', 'app.people_sport');

	function startTest() {
		$this->Person =& ClassRegistry::init('Person');
	}

	function endTest() {
		unset($this->Person);
		ClassRegistry::flush();
	}

}
?>