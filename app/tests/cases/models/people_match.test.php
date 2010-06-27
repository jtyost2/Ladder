<?php
/* PeopleMatch Test cases generated on: 2010-06-27 14:06:06 : 1277668386*/
App::import('Model', 'PeopleMatch');

class PeopleMatchTestCase extends CakeTestCase {
	var $fixtures = array('app.people_match', 'app.people', 'app.match', 'app.sport', 'app.person', 'app.role', 'app.people_sport', 'app.outcome');

	function startTest() {
		$this->PeopleMatch =& ClassRegistry::init('PeopleMatch');
	}

	function endTest() {
		unset($this->PeopleMatch);
		ClassRegistry::flush();
	}

}
?>