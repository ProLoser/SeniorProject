<?php
/* ProgramType Test cases generated on: 2010-05-24 16:05:19 : 1274744239*/
App::import('Model', 'ProgramType');

class ProgramTypeTestCase extends CakeTestCase {
	var $fixtures = array('app.program_type', 'app.trip_page', 'app.trip');

	function startTest() {
		$this->ProgramType =& ClassRegistry::init('ProgramType');
	}

	function endTest() {
		unset($this->ProgramType);
		ClassRegistry::flush();
	}

}
?>