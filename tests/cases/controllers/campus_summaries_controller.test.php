<?php
/* CampusSummaries Test cases generated on: 2010-04-28 00:04:35 : 1272413675*/
App::import('Controller', 'CampusSummaries');

class TestCampusSummariesController extends CampusSummariesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CampusSummariesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.campus_summary');

	function startTest() {
		$this->CampusSummaries =& new TestCampusSummariesController();
		$this->CampusSummaries->constructClasses();
	}

	function endTest() {
		unset($this->CampusSummaries);
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