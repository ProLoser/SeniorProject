<?php
/* RecruiterMeeting Test cases generated on: 2010-04-15 10:04:25 : 1271329165*/
App::import('Model', 'RecruiterMeeting');

class RecruiterMeetingTestCase extends CakeTestCase {
	var $fixtures = array('app.recruiter_meeting', 'app.school', 'app.employee', 'app.office', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.volunteer', 'app.donation', 'app.ecuador_profile', 'app.spanish_profile', 'app.menu', 'app.role', 'app.signup');

	function startTest() {
		$this->RecruiterMeeting =& ClassRegistry::init('RecruiterMeeting');
	}

	function endTest() {
		unset($this->RecruiterMeeting);
		ClassRegistry::flush();
	}

}
?>