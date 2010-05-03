<?php
/* Signups Test cases generated on: 2010-05-03 00:05:05 : 1272846245*/
App::import('Controller', 'Signups');

class TestSignupsController extends SignupsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SignupsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.signup', 'app.volunteer', 'app.location', 'app.office', 'app.employee', 'app.user', 'app.role', 'app.recruiter_meeting', 'app.school', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.spanish_profile', 'app.menu', 'app.document');

	function startTest() {
		$this->Signups =& new TestSignupsController();
		$this->Signups->constructClasses();
	}

	function endTest() {
		unset($this->Signups);
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