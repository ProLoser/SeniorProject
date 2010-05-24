<?php
/* Destinations Test cases generated on: 2010-05-24 16:05:57 : 1274744337*/
App::import('Controller', 'Destinations');

class TestDestinationsController extends DestinationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DestinationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.destination', 'app.trip_page', 'app.volunteer_type', 'app.trip', 'app.program_type', 'app.addon_combination', 'app.addon', 'app.page', 'app.location', 'app.office');

	function startTest() {
		$this->Destinations =& new TestDestinationsController();
		$this->Destinations->constructClasses();
	}

	function endTest() {
		unset($this->Destinations);
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