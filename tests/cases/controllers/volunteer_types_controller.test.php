<?php
/* VolunteerTypes Test cases generated on: 2010-05-24 16:05:58 : 1274744338*/
App::import('Controller', 'VolunteerTypes');

class TestVolunteerTypesController extends VolunteerTypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VolunteerTypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.volunteer_type', 'app.trip_page', 'app.destination', 'app.trip', 'app.program_type', 'app.addon_combination', 'app.addon', 'app.page', 'app.location', 'app.office');

	function startTest() {
		$this->VolunteerTypes =& new TestVolunteerTypesController();
		$this->VolunteerTypes->constructClasses();
	}

	function endTest() {
		unset($this->VolunteerTypes);
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