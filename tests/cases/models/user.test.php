<?php
/* User Test cases generated on: 2010-04-23 23:04:23 : 1272066143*/
App::import('Model', 'User');

class UserTestCase extends CakeTestCase {
	var $fixtures = array('app.user', 'app.role', 'app.employee', 'app.office', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.volunteer', 'app.document', 'app.donation', 'app.ecuador_profile', 'app.signup', 'app.school', 'app.recruiter_meeting', 'app.spanish_profile', 'app.menu');

	function startTest() {
		$this->User =& ClassRegistry::init('User');
	}

	function endTest() {
		unset($this->User);
		ClassRegistry::flush();
	}

}
?>