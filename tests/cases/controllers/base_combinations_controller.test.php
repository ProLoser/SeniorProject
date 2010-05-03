<?php
/* BaseCombinations Test cases generated on: 2010-05-03 00:05:40 : 1272846100*/
App::import('Controller', 'BaseCombinations');

class TestBaseCombinationsController extends BaseCombinationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BaseCombinationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.base_combination', 'app.destination', 'app.program', 'app.addon_combination', 'app.addon');

	function startTest() {
		$this->BaseCombinations =& new TestBaseCombinationsController();
		$this->BaseCombinations->constructClasses();
	}

	function endTest() {
		unset($this->BaseCombinations);
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