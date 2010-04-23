<?php
/* Page Test cases generated on: 2010-04-15 10:04:19 : 1271329159*/
App::import('Model', 'Page');

class PageTestCase extends CakeTestCase {
	var $fixtures = array('app.page', 'app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.role', 'app.signup', 'app.school', 'app.menu');

	function startTest() {
		$this->Page =& ClassRegistry::init('Page');
	}

	function endTest() {
		unset($this->Page);
		ClassRegistry::flush();
	}

}
?>