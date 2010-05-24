<?php
/* Offices Test cases generated on: 2010-05-24 16:05:57 : 1274744337*/
App::import('Controller', 'Offices');

class TestOfficesController extends OfficesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OfficesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.office', 'app.location', 'app.page', 'app.trip', 'app.destination', 'app.trip_page', 'app.volunteer_type', 'app.program_type', 'app.addon_combination', 'app.addon');

	function startTest() {
		$this->Offices =& new TestOfficesController();
		$this->Offices->constructClasses();
	}

	function endTest() {
		unset($this->Offices);
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