<?php
/* Signup Test cases generated on: 2010-04-15 10:04:29 : 1271329169*/
App::import('Model', 'Signup');

class SignupTestCase extends CakeTestCase {
	var $fixtures = array('app.signup', 'app.volunteer', 'app.school', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.role', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.spanish_profile', 'app.menu');

	function startTest() {
		$this->Signup =& ClassRegistry::init('Signup');
	}

	function endTest() {
		unset($this->Signup);
		ClassRegistry::flush();
	}

}
?>