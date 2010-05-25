<?php
/* AddonCombinations Test cases generated on: 2010-05-24 16:05:57 : 1274744337*/
App::import('Controller', 'AddonCombinations');

class TestAddonCombinationsController extends AddonCombinationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class AddonCombinationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.addon_combination', 'app.trip', 'app.destination', 'app.trip_page', 'app.volunteer_type', 'app.program_type', 'app.page', 'app.location', 'app.office', 'app.addon');

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