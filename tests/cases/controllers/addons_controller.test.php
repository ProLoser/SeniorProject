<?php
/* Addons Test cases generated on: 2010-05-24 16:05:57 : 1274744337*/
App::import('Controller', 'Addons');

class TestAddonsController extends AddonsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AddonsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.addon', 'app.addon_combination', 'app.trip', 'app.destination', 'app.trip_page', 'app.volunteer_type', 'app.program_type', 'app.page', 'app.location', 'app.office');

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