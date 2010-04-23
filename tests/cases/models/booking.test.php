<?php
/* Booking Test cases generated on: 2010-04-15 10:04:03 : 1271329143*/
App::import('Model', 'Booking');

class BookingTestCase extends CakeTestCase {
	var $fixtures = array('app.booking', 'app.volunteer', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.spanish_profile');

	function startTest() {
		$this->Booking =& ClassRegistry::init('Booking');
	}

	function endTest() {
		unset($this->Booking);
		ClassRegistry::flush();
	}

}
?>