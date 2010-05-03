<?php
/* Programs Test cases generated on: 2010-05-03 00:05:22 : 1272846202*/
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

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>