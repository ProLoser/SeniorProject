<?php
/* Program Test cases generated on: 2010-04-15 10:04:23 : 1271329163*/
App::import('Model', 'Program');

class ProgramTestCase extends CakeTestCase {
	var $fixtures = array('app.program', 'app.base_combination', 'app.destination', 'app.addon_combination', 'app.addon');

	function startTest() {
		$this->Program =& ClassRegistry::init('Program');
	}

	function endTest() {
		unset($this->Program);
		ClassRegistry::flush();
	}

}
?>