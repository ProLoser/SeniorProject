<?php
/* Addon Test cases generated on: 2010-04-23 23:04:31 : 1272066091*/
App::import('Model', 'Addon');

class AddonTestCase extends CakeTestCase {
	var $fixtures = array('app.addon', 'app.addon_combination', 'app.base_combination', 'app.destination', 'app.program');

	function startTest() {
		$this->Addon =& ClassRegistry::init('Addon');
	}

	function endTest() {
		unset($this->Addon);
		ClassRegistry::flush();
	}

}
?>