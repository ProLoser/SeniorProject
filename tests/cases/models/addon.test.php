<?php
/* Addon Test cases generated on: 2010-04-15 10:04:00 : 1271329140*/
App::import('Model', 'Addon');

class AddonTestCase extends CakeTestCase {
	var $fixtures = array('app.addon', 'app.addon_combination', 'app.base_combination');

	function startTest() {
		$this->Addon =& ClassRegistry::init('Addon');
	}

	function endTest() {
		unset($this->Addon);
		ClassRegistry::flush();
	}

}
?>