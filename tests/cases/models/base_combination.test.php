<?php
/* BaseCombination Test cases generated on: 2010-04-15 10:04:02 : 1271329142*/
App::import('Model', 'BaseCombination');

class BaseCombinationTestCase extends CakeTestCase {
	var $fixtures = array('app.base_combination', 'app.destination', 'app.program', 'app.addon_combination', 'app.addon');

	function startTest() {
		$this->BaseCombination =& ClassRegistry::init('BaseCombination');
	}

	function endTest() {
		unset($this->BaseCombination);
		ClassRegistry::flush();
	}

}
?>