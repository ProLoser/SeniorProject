<?php
/* SpanishProfile Test cases generated on: 2010-04-23 23:04:20 : 1272066140*/
App::import('Model', 'SpanishProfile');

class SpanishProfileTestCase extends CakeTestCase {
	var $fixtures = array('app.spanish_profile', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.role', 'app.page', 'app.menu', 'app.document');

	function startTest() {
		$this->SpanishProfile =& ClassRegistry::init('SpanishProfile');
	}

	function endTest() {
		unset($this->SpanishProfile);
		ClassRegistry::flush();
	}

}
?>