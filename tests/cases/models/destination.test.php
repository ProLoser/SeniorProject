<?php
/* Destination Test cases generated on: 2010-04-15 10:04:05 : 1271329145*/
App::import('Model', 'Destination');

class DestinationTestCase extends CakeTestCase {
	var $fixtures = array('app.destination', 'app.base_combination', 'app.program', 'app.addon_combination', 'app.addon');

	function startTest() {
		$this->Destination =& ClassRegistry::init('Destination');
	}

	function endTest() {
		unset($this->Destination);
		ClassRegistry::flush();
	}

}
?>