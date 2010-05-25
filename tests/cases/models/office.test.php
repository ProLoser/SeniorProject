<?php
/* Office Test cases generated on: 2010-05-24 16:05:19 : 1274744239*/
App::import('Model', 'Office');

class OfficeTestCase extends CakeTestCase {
	var $fixtures = array('app.office', 'app.location', 'app.page');

	function startTest() {
		$this->Office =& ClassRegistry::init('Office');
	}

	function endTest() {
		unset($this->Office);
		ClassRegistry::flush();
	}

}
?>