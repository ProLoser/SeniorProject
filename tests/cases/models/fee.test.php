<?php
/* Fee Test cases generated on: 2010-04-15 10:04:13 : 1271329153*/
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