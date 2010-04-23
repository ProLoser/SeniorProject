<?php
/* School Test cases generated on: 2010-04-15 10:04:28 : 1271329168*/
App::import('Model', 'School');

class SchoolTestCase extends CakeTestCase {
	var $fixtures = array('app.school', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.role', 'app.signup', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.volunteer', 'app.donation', 'app.ecuador_profile', 'app.spanish_profile', 'app.menu');

	function startTest() {
		$this->School =& ClassRegistry::init('School');
	}

	function endTest() {
		unset($this->School);
		ClassRegistry::flush();
	}

}
?>