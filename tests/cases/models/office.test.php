<?php
/* Office Test cases generated on: 2010-04-15 10:04:18 : 1271329158*/
App::import('Model', 'Office');

class OfficeTestCase extends CakeTestCase {
	var $fixtures = array('app.office', 'app.employee', 'app.recruiter_meeting', 'app.role', 'app.signup', 'app.location', 'app.page', 'app.price', 'app.school');

	function startTest() {
		$this->Office =& ClassRegistry::init('Office');
	}

	function endTest() {
		unset($this->Office);
		ClassRegistry::flush();
	}

}
?>