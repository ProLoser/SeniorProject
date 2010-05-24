<?php
/* Trip Test cases generated on: 2010-05-24 16:05:20 : 1274744240*/
App::import('Model', 'Trip');

class TripTestCase extends CakeTestCase {
	var $fixtures = array('app.trip', 'app.destination', 'app.trip_page', 'app.volunteer_type', 'app.program_type', 'app.page', 'app.location', 'app.office', 'app.addon_combination', 'app.addon');

	function startTest() {
		$this->Trip =& ClassRegistry::init('Trip');
	}

	function endTest() {
		unset($this->Trip);
		ClassRegistry::flush();
	}

}
?>