<?php
/* ProgramTypes Test cases generated on: 2010-05-24 16:05:57 : 1274744337*/
App::import('Controller', 'ProgramTypes');

class TestProgramTypesController extends ProgramTypesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProgramTypesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.program_type', 'app.trip_page', 'app.destination', 'app.trip', 'app.volunteer_type', 'app.addon_combination', 'app.addon', 'app.page', 'app.location', 'app.office');

	function startTest() {
		$this->ProgramTypes =& new TestProgramTypesController();
		$this->ProgramTypes->constructClasses();
	}

	function endTest() {
		unset($this->ProgramTypes);
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