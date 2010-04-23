<?php
/* LineItem Test cases generated on: 2010-04-23 23:04:51 : 1272066111*/
App::import('Model', 'LineItem');

class LineItemTestCase extends CakeTestCase {
	var $fixtures = array('app.line_item', 'app.booking', 'app.volunteer', 'app.document', 'app.donation', 'app.ecuador_profile', 'app.signup', 'app.school', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.role', 'app.location', 'app.page', 'app.price', 'app.menu', 'app.spanish_profile');

	function startTest() {
		$this->LineItem =& ClassRegistry::init('LineItem');
	}

	function endTest() {
		unset($this->LineItem);
		ClassRegistry::flush();
	}

}
?>