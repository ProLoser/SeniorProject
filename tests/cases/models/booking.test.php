<?php
/* Booking Test cases generated on: 2010-04-23 23:04:35 : 1272066095*/
App::import('Model', 'Booking');

class BookingTestCase extends CakeTestCase {
	var $fixtures = array('app.booking', 'app.volunteer', 'app.document', 'app.donation', 'app.ecuador_profile', 'app.signup', 'app.school', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.role', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.menu', 'app.spanish_profile');

	function startTest() {
		$this->Booking =& ClassRegistry::init('Booking');
	}

	function endTest() {
		unset($this->Booking);
		ClassRegistry::flush();
	}

}
?>