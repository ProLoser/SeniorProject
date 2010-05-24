<?php
/* AddonCombination Test cases generated on: 2010-05-24 16:05:18 : 1274744238*/
App::import('Model', 'AddonCombination');

class AddonCombinationTestCase extends CakeTestCase {
	var $fixtures = array('app.addon_combination', 'app.trip', 'app.addon');

	function startTest() {
		$this->AddonCombination =& ClassRegistry::init('AddonCombination');
	}

	function endTest() {
		unset($this->AddonCombination);
		ClassRegistry::flush();
	}

}
?>