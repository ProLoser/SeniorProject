<?php
/* Addons Test cases generated on: 2010-04-23 23:04:47 : 1272066167*/
App::import('Controller', 'Addons');

class TestAddonsController extends AddonsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AddonsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.addon', 'app.addon_combination', 'app.base_combination', 'app.destination', 'app.program');

	function startTest() {
		$this->Addons =& new TestAddonsController();
		$this->Addons->constructClasses();
	}

	function endTest() {
		unset($this->Addons);
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