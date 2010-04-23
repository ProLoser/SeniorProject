<?php
/* Donation Test cases generated on: 2010-04-15 10:04:08 : 1271329148*/
App::import('Model', 'Donation');

class DonationTestCase extends CakeTestCase {
	var $fixtures = array('app.donation', 'app.booking', 'app.volunteer', 'app.ecuador_profile', 'app.line_item', 'app.spanish_profile');

	function startTest() {
		$this->Donation =& ClassRegistry::init('Donation');
	}

	function endTest() {
		unset($this->Donation);
		ClassRegistry::flush();
	}

}
?>