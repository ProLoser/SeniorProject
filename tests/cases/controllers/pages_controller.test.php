<?php
/* Pages Test cases generated on: 2010-05-24 16:05:57 : 1274744337*/
App::import('Controller', 'Pages');

class TestPagesController extends PagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.page', 'app.location', 'app.office', 'app.trip', 'app.destination', 'app.trip_page', 'app.volunteer_type', 'app.program_type', 'app.addon_combination', 'app.addon');

	function startTest() {
		$this->Pages =& new TestPagesController();
		$this->Pages->constructClasses();
	}

	function endTest() {
		unset($this->Pages);
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