<?php
/* EcuadorProfile Test cases generated on: 2010-04-15 10:04:09 : 1271329149*/
App::import('Model', 'EcuadorProfile');

class EcuadorProfileTestCase extends CakeTestCase {
	var $fixtures = array('app.ecuador_profile', 'app.volunteer', 'app.booking', 'app.donation', 'app.line_item', 'app.spanish_profile');

	function startTest() {
		$this->EcuadorProfile =& ClassRegistry::init('EcuadorProfile');
	}

	function endTest() {
		unset($this->EcuadorProfile);
		ClassRegistry::flush();
	}

}
?>