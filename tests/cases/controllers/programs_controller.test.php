<?php
/* Programs Test cases generated on: 2010-04-23 23:04:52 : 1272066172*/
App::import('Controller', 'Programs');

class TestProgramsController extends ProgramsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ProgramsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.program', 'app.base_combination', 'app.destination', 'app.addon_combination', 'app.addon');

	function startTest() {
		$this->Programs =& new TestProgramsController();
		$this->Programs->constructClasses();
	}

	function endTest() {
		unset($this->Programs);
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