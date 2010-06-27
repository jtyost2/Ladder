<?php
/* Sports Test cases generated on: 2010-06-27 14:06:31 : 1277668411*/
App::import('Controller', 'Sports');

class TestSportsController extends SportsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SportsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.sport', 'app.match', 'app.person', 'app.role', 'app.people_match', 'app.people_sport');

	function startTest() {
		$this->Sports =& new TestSportsController();
		$this->Sports->constructClasses();
	}

	function endTest() {
		unset($this->Sports);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>