<?php
/* Promo Test cases generated on: 2010-04-15 10:04:24 : 1271329164*/
App::import('Model', 'Promo');

class PromoTestCase extends CakeTestCase {
	var $fixtures = array('app.promo');

	function startTest() {
		$this->Promo =& ClassRegistry::init('Promo');
	}

	function endTest() {
		unset($this->Promo);
		ClassRegistry::flush();
	}

}
?>