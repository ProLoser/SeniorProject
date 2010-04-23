<?php
/* Menu Test cases generated on: 2010-04-23 23:04:56 : 1272066116*/
App::import('Model', 'Menu');

class MenuTestCase extends CakeTestCase {
	var $fixtures = array('app.menu', 'app.page', 'app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.spanish_profile', 'app.document', 'app.role');

	function startTest() {
		$this->Menu =& ClassRegistry::init('Menu');
	}

	function endTest() {
		unset($this->Menu);
		ClassRegistry::flush();
	}

}
?>