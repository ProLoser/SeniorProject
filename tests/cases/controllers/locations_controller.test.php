<?php
/* Locations Test cases generated on: 2010-04-15 10:04:43 : 1271329183*/
App::import('Controller', 'Locations');

class TestLocationsController extends LocationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LocationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.page', 'app.menu', 'app.spanish_profile', 'app.document', 'app.role');

	function startTest() {
		$this->Locations =& new TestLocationsController();
		$this->Locations->constructClasses();
	}

	function endTest() {
		unset($this->Locations);
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