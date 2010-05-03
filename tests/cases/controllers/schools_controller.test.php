<?php
/* Schools Test cases generated on: 2010-05-03 00:05:58 : 1272846238*/
App::import('Controller', 'Schools');

class TestSchoolsController extends SchoolsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SchoolsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.school', 'app.office', 'app.employee', 'app.user', 'app.role', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.volunteer', 'app.document', 'app.donation', 'app.ecuador_profile', 'app.signup', 'app.spanish_profile', 'app.menu', 'app.recruiter_meeting');

	function startTest() {
		$this->Schools =& new TestSchoolsController();
		$this->Schools->constructClasses();
	}

	function endTest() {
		unset($this->Schools);
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