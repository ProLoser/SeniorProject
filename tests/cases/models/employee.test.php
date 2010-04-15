<?php
/* Employee Test cases generated on: 2010-04-15 10:04:11 : 1271329151*/
App::import('Model', 'Employee');

class EmployeeTestCase extends CakeTestCase {
	var $fixtures = array('app.employee', 'app.office', 'app.recruiter_meeting', 'app.role', 'app.signup');

	function startTest() {
		$this->Employee =& ClassRegistry::init('Employee');
	}

	function endTest() {
		unset($this->Employee);
		ClassRegistry::flush();
	}

}
?>