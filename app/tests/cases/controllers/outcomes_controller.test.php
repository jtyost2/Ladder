<?php
/* Outcomes Test cases generated on: 2010-06-27 14:06:18 : 1277668278*/
App::import('Controller', 'Outcomes');

class TestOutcomesController extends OutcomesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OutcomesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.outcome', 'app.people_match');

	function startTest() {
		$this->Outcomes =& new TestOutcomesController();
		$this->Outcomes->constructClasses();
	}

	function endTest() {
		unset($this->Outcomes);
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