<?php
/* SpanishProfile Test cases generated on: 2010-04-15 10:04:31 : 1271329171*/
App::import('Model', 'SpanishProfile');

class SpanishProfileTestCase extends CakeTestCase {
	var $fixtures = array('app.spanish_profile', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.role', 'app.page', 'app.menu');

	function startTest() {
		$this->SpanishProfile =& ClassRegistry::init('SpanishProfile');
	}

	function endTest() {
		unset($this->SpanishProfile);
		ClassRegistry::flush();
	}

}
?>