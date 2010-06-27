<?php
/* PeopleSports Test cases generated on: 2010-06-27 14:06:17 : 1277668397*/
App::import('Controller', 'PeopleSports');

class TestPeopleSportsController extends PeopleSportsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PeopleSportsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.people_sport', 'app.people', 'app.sports');

	function startTest() {
		$this->PeopleSports =& new TestPeopleSportsController();
		$this->PeopleSports->constructClasses();
	}

	function endTest() {
		unset($this->PeopleSports);
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