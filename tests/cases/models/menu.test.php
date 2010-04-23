<?php
/* Menu Test cases generated on: 2010-04-15 10:04:17 : 1271329157*/
App::import('Model', 'Menu');

class MenuTestCase extends CakeTestCase {
	var $fixtures = array('app.menu', 'app.page');

	function startTest() {
		$this->Menu =& ClassRegistry::init('Menu');
	}

	function endTest() {
		unset($this->Menu);
		ClassRegistry::flush();
	}

}
?>