<?php
/* RecruiterMeeting Test cases generated on: 2010-04-23 23:04:11 : 1272066131*/
App::import('Model', 'RecruiterMeeting');

class RecruiterMeetingTestCase extends CakeTestCase {
	var $fixtures = array('app.recruiter_meeting', 'app.school', 'app.office', 'app.employee', 'app.role', 'app.signup', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.page', 'app.menu', 'app.spanish_profile', 'app.document');

	function startTest() {
		$this->RecruiterMeeting =& ClassRegistry::init('RecruiterMeeting');
	}

	function endTest() {
		unset($this->RecruiterMeeting);
		ClassRegistry::flush();
	}

}
?>