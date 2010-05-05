<?php
/* CampusSummaries Test cases generated on: 2010-05-05 01:05:06 : 1273021206*/
App::import('Controller', 'CampusSummaries');

class TestCampusSummariesController extends CampusSummariesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class CampusSummariesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.campus_summary', 'app.employee', 'app.office', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.volunteer', 'app.user', 'app.role', 'app.document', 'app.donation', 'app.ecuador_profile', 'app.signup', 'app.school', 'app.recruiter_meeting', 'app.spanish_profile', 'app.menu');

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