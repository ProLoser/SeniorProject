<?php
/* Signup Test cases generated on: 2010-04-23 23:04:18 : 1272066138*/
App::import('Model', 'Signup');

class SignupTestCase extends CakeTestCase {
	var $fixtures = array('app.signup', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.role', 'app.page', 'app.menu', 'app.spanish_profile', 'app.document');

	function startTest() {
		$this->Signup =& ClassRegistry::init('Signup');
	}

	function endTest() {
		unset($this->Signup);
		ClassRegistry::flush();
	}

}
?>