<?php
/* TripPage Test cases generated on: 2010-05-24 16:05:20 : 1274744240*/
App::import('Model', 'TripPage');

class TripPageTestCase extends CakeTestCase {
	var $fixtures = array('app.trip_page', 'app.destination', 'app.trip', 'app.volunteer_type', 'app.program_type', 'app.page', 'app.location', 'app.office');

	function startTest() {
		$this->TripPage =& ClassRegistry::init('TripPage');
	}

	function endTest() {
		unset($this->TripPage);
		ClassRegistry::flush();
	}

}
?>