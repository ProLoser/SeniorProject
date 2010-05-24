<?php
/* Trips Test cases generated on: 2010-05-24 16:05:58 : 1274744338*/
App::import('Controller', 'Trips');

class TestTripsController extends TripsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TripsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.trip', 'app.destination', 'app.trip_page', 'app.volunteer_type', 'app.program_type', 'app.page', 'app.location', 'app.office', 'app.addon_combination', 'app.addon');

	function startTest() {
		$this->Trips =& new TestTripsController();
		$this->Trips->constructClasses();
	}

	function endTest() {
		unset($this->Trips);
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