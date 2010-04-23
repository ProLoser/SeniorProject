<?php
/* Fee Test cases generated on: 2010-04-23 23:04:49 : 1272066109*/
App::import('Model', 'Fee');

class FeeTestCase extends CakeTestCase {
	var $fixtures = array('app.fee');

	function startTest() {
		$this->Fee =& ClassRegistry::init('Fee');
	}

	function endTest() {
		unset($this->Fee);
		ClassRegistry::flush();
	}

}
?>