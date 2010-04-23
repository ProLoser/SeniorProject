<?php
/* AddonCombination Test cases generated on: 2010-04-15 10:04:59 : 1271329139*/
App::import('Model', 'AddonCombination');

class AddonCombinationTestCase extends CakeTestCase {
	var $fixtures = array('app.addon_combination', 'app.base_combination', 'app.addon');

	function startTest() {
		$this->AddonCombination =& ClassRegistry::init('AddonCombination');
	}

	function endTest() {
		unset($this->AddonCombination);
		ClassRegistry::flush();
	}

}
?>