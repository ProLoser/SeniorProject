<?php
/* CampusSummary Test cases generated on: 2010-05-05 00:05:29 : 1273021169*/
App::import('Model', 'CampusSummary');

class CampusSummaryTestCase extends CakeTestCase {
	var $fixtures = array('app.campus_summary', 'app.employee', 'app.office', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.volunteer', 'app.user', 'app.role', 'app.document', 'app.donation', 'app.ecuador_profile', 'app.signup', 'app.school', 'app.recruiter_meeting', 'app.spanish_profile', 'app.menu');

	function startTest() {
		$this->CampusSummary =& ClassRegistry::init('CampusSummary');
	}

	function endTest() {
		unset($this->CampusSummary);
		ClassRegistry::flush();
	}

}
?>