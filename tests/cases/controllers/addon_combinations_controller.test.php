<?php
/* AddonCombinations Test cases generated on: 2010-05-03 00:05:21 : 1272846081*/
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