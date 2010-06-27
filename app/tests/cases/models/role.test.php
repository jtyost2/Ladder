<?php
/* Role Test cases generated on: 2010-06-27 14:06:23 : 1277668403*/
App::import('Model', 'Role');

class RoleTestCase extends CakeTestCase {
	var $fixtures = array('app.role', 'app.person', 'app.match', 'app.sport', 'app.people_match', 'app.people_sport');

	function startTest() {
		$this->Role =& ClassRegistry::init('Role');
	}

	function endTest() {
		unset($this->Role);
		ClassRegistry::flush();
	}

}
?>