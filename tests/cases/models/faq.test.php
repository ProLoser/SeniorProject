<?php
/* Faq Test cases generated on: 2010-04-15 10:04:12 : 1271329152*/
App::import('Model', 'Faq');

class FaqTestCase extends CakeTestCase {
	var $fixtures = array('app.faq');

	function startTest() {
		$this->Faq =& ClassRegistry::init('Faq');
	}

	function endTest() {
		unset($this->Faq);
		ClassRegistry::flush();
	}

}
?>