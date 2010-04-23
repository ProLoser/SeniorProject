<?php
/* AddonCombinations Test cases generated on: 2010-04-23 23:04:47 : 1272066167*/
App::import('Controller', 'AddonCombinations');

class TestAddonCombinationsController extends AddonCombinationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AddonCombinationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.addon_combination', 'app.base_combination', 'app.destination', 'app.program', 'app.addon');

	function startTest() {
		$this->AddonCombinations =& new TestAddonCombinationsController();
		$this->AddonCombinations->constructClasses();
	}

	function endTest() {
		unset($this->AddonCombinations);
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