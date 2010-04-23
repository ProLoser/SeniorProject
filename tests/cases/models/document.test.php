<?php
/* Document Test cases generated on: 2010-04-23 23:04:40 : 1272066100*/
App::import('Model', 'Document');

class DocumentTestCase extends CakeTestCase {
	var $fixtures = array('app.document', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.role', 'app.page', 'app.menu', 'app.spanish_profile');

	function startTest() {
		$this->Document =& ClassRegistry::init('Document');
	}

	function endTest() {
		unset($this->Document);
		ClassRegistry::flush();
	}

}
?>