<?php
/* Destinations Test cases generated on: 2010-04-15 10:04:42 : 1271329182*/
App::import('Controller', 'Destinations');

class TestDestinationsController extends DestinationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DestinationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.destination', 'app.base_combination', 'app.program', 'app.addon_combination', 'app.addon');

	function startTest() {
		$this->Destinations =& new TestDestinationsController();
		$this->Destinations->constructClasses();
	}

	function endTest() {
		unset($this->Destinations);
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