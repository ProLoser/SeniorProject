<?php
/* Destination Test cases generated on: 2010-04-23 23:04:37 : 1272066097*/
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