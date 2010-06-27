<?php
/* People Test cases generated on: 2010-06-27 14:06:01 : 1277668381*/
App::import('Controller', 'People');

class TestPeopleController extends PeopleController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PeopleControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.person', 'app.role', 'app.match', 'app.sport', 'app.people_match', 'app.people_sport');

	function startTest() {
		$this->People =& new TestPeopleController();
		$this->People->constructClasses();
	}

	function endTest() {
		unset($this->People);
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