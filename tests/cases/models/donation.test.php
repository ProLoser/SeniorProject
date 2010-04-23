<?php
/* Donation Test cases generated on: 2010-04-23 23:04:42 : 1272066102*/
App::import('Model', 'Donation');

class DonationTestCase extends CakeTestCase {
	var $fixtures = array('app.donation', 'app.booking', 'app.volunteer', 'app.document', 'app.ecuador_profile', 'app.signup', 'app.school', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.role', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.menu', 'app.spanish_profile');

	function startTest() {
		$this->Donation =& ClassRegistry::init('Donation');
	}

	function endTest() {
		unset($this->Donation);
		ClassRegistry::flush();
	}

}
?>