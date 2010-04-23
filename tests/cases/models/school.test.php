<?php
/* School Test cases generated on: 2010-04-23 23:04:15 : 1272066135*/
App::import('Model', 'School');

class SchoolTestCase extends CakeTestCase {
	var $fixtures = array('app.school', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.role', 'app.signup', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.page', 'app.menu', 'app.spanish_profile', 'app.document');

	function startTest() {
		$this->School =& ClassRegistry::init('School');
	}

	function endTest() {
		unset($this->School);
		ClassRegistry::flush();
	}

}
?>