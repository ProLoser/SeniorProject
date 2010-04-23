<?php
/* Price Test cases generated on: 2010-04-15 10:04:21 : 1271329161*/
App::import('Model', 'Price');

class PriceTestCase extends CakeTestCase {
	var $fixtures = array('app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.role', 'app.signup', 'app.school', 'app.page', 'app.menu', 'app.line_item', 'app.booking', 'app.volunteer', 'app.donation', 'app.ecuador_profile', 'app.spanish_profile');

	function startTest() {
		$this->Price =& ClassRegistry::init('Price');
	}

	function endTest() {
		unset($this->Price);
		ClassRegistry::flush();
	}

}
?>