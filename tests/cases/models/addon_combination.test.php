<?php
/* AddonCombination Test cases generated on: 2010-04-23 23:04:28 : 1272066088*/
App::import('Model', 'AddonCombination');

class AddonCombinationTestCase extends CakeTestCase {
	var $fixtures = array('app.addon_combination', 'app.base_combination', 'app.destination', 'app.program', 'app.addon');

	function startTest() {
		$this->AddonCombination =& ClassRegistry::init('AddonCombination');
	}

	function endTest() {
		unset($this->AddonCombination);
		ClassRegistry::flush();
	}

}
?>