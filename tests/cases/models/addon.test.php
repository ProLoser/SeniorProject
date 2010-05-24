<?php
/* Addon Test cases generated on: 2010-05-24 16:05:18 : 1274744238*/
App::import('Model', 'Addon');

class AddonTestCase extends CakeTestCase {
	var $fixtures = array('app.addon', 'app.addon_combination', 'app.trip');

	function startTest() {
		$this->Addon =& ClassRegistry::init('Addon');
	}

	function endTest() {
		unset($this->Addon);
		ClassRegistry::flush();
	}

}
?>