<?php
/* LineItem Test cases generated on: 2010-04-15 10:04:14 : 1271329154*/
App::import('Model', 'LineItem');

class LineItemTestCase extends CakeTestCase {
	var $fixtures = array('app.line_item', 'app.booking', 'app.volunteer', 'app.donation', 'app.ecuador_profile', 'app.spanish_profile', 'app.price');

	function startTest() {
		$this->LineItem =& ClassRegistry::init('LineItem');
	}

	function endTest() {
		unset($this->LineItem);
		ClassRegistry::flush();
	}

}
?>