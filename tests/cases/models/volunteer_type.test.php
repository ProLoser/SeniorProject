<?php
/* VolunteerType Test cases generated on: 2010-05-24 16:05:20 : 1274744240*/
App::import('Model', 'VolunteerType');

class VolunteerTypeTestCase extends CakeTestCase {
	var $fixtures = array('app.volunteer_type', 'app.trip_page', 'app.destination', 'app.trip', 'app.program_type', 'app.addon_combination', 'app.addon', 'app.page', 'app.location', 'app.office');

	function startTest() {
		$this->VolunteerType =& ClassRegistry::init('VolunteerType');
	}

	function endTest() {
		unset($this->VolunteerType);
		ClassRegistry::flush();
	}

}
?>