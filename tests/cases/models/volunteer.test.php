<?php
/* Volunteer Test cases generated on: 2010-04-15 10:04:32 : 1271329172*/
App::import('Model', 'Volunteer');

class VolunteerTestCase extends CakeTestCase {
	var $fixtures = array('app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.role', 'app.page', 'app.menu', 'app.spanish_profile', 'app.document');

	function startTest() {
		$this->Volunteer =& ClassRegistry::init('Volunteer');
	}

	function endTest() {
		unset($this->Volunteer);
		ClassRegistry::flush();
	}

}
?>