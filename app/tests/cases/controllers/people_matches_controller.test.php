<?php
/* PeopleMatches Test cases generated on: 2010-06-27 14:06:08 : 1277668388*/
App::import('Controller', 'PeopleMatches');

class TestPeopleMatchesController extends PeopleMatchesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PeopleMatchesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.people_match', 'app.people', 'app.match', 'app.sport', 'app.person', 'app.role', 'app.people_sport', 'app.outcome');

	function startTest() {
		$this->PeopleMatches =& new TestPeopleMatchesController();
		$this->PeopleMatches->constructClasses();
	}

	function endTest() {
		unset($this->PeopleMatches);
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