<?php
/* Program Test cases generated on: 2010-04-23 23:04:06 : 1272066126*/
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