<?php
/* Office Test cases generated on: 2010-04-23 23:04:59 : 1272066119*/
App::import('Model', 'Office');

class OfficeTestCase extends CakeTestCase {
	var $fixtures = array('app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.page', 'app.menu', 'app.spanish_profile', 'app.document', 'app.role');

	function startTest() {
		$this->Office =& ClassRegistry::init('Office');
	}

	function endTest() {
		unset($this->Office);
		ClassRegistry::flush();
	}

}
?>