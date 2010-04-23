<?php
/* RecruiterMeetings Test cases generated on: 2010-04-15 10:04:44 : 1271329184*/
App::import('Controller', 'RecruiterMeetings');

class TestRecruiterMeetingsController extends RecruiterMeetingsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class RecruiterMeetingsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.recruiter_meeting', 'app.school', 'app.office', 'app.employee', 'app.role', 'app.signup', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.page', 'app.menu', 'app.spanish_profile', 'app.document');

	function startTest() {
		$this->RecruiterMeetings =& new TestRecruiterMeetingsController();
		$this->RecruiterMeetings->constructClasses();
	}

	function endTest() {
		unset($this->RecruiterMeetings);
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