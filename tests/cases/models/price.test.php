<?php
/* Price Test cases generated on: 2010-04-23 23:04:04 : 1272066124*/
App::import('Model', 'Price');

class PriceTestCase extends CakeTestCase {
	var $fixtures = array('app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.spanish_profile', 'app.document', 'app.role', 'app.page', 'app.menu');

	function startTest() {
		$this->Price =& ClassRegistry::init('Price');
	}

	function endTest() {
		unset($this->Price);
		ClassRegistry::flush();
	}

}
?>