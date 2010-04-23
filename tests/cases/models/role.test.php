<?php
/* Role Test cases generated on: 2010-04-15 10:04:27 : 1271329167*/
App::import('Model', 'Role');

class RoleTestCase extends CakeTestCase {
	var $fixtures = array('app.role', 'app.employee', 'app.office', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.volunteer', 'app.donation', 'app.ecuador_profile', 'app.spanish_profile', 'app.menu', 'app.school', 'app.recruiter_meeting', 'app.signup');

	function startTest() {
		$this->Role =& ClassRegistry::init('Role');
	}

	function endTest() {
		unset($this->Role);
		ClassRegistry::flush();
	}

}
?>