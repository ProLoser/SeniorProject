<?php
/* Destination Test cases generated on: 2010-05-24 16:05:18 : 1274744238*/
App::import('Model', 'Destination');

class DestinationTestCase extends CakeTestCase {
	var $fixtures = array('app.destination', 'app.trip_page', 'app.trip');

	function startTest() {
		$this->Destination =& ClassRegistry::init('Destination');
	}

	function endTest() {
		unset($this->Destination);
		ClassRegistry::flush();
	}

}
?>