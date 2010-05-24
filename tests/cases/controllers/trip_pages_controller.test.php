<?php
/* TripPages Test cases generated on: 2010-05-24 16:05:58 : 1274744338*/
App::import('Controller', 'TripPages');

class TestTripPagesController extends TripPagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class TripPagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.trip_page', 'app.destination', 'app.trip', 'app.volunteer_type', 'app.program_type', 'app.addon_combination', 'app.addon', 'app.page', 'app.location', 'app.office');

	function startTest() {
		$this->TripPages =& new TestTripPagesController();
		$this->TripPages->constructClasses();
	}

	function endTest() {
		unset($this->TripPages);
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