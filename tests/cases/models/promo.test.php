<?php
/* Promo Test cases generated on: 2010-04-23 23:04:08 : 1272066128*/
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