<?php
/* Page Test cases generated on: 2010-05-24 16:05:19 : 1274744239*/
App::import('Model', 'Page');

class PageTestCase extends CakeTestCase {
	var $fixtures = array('app.page', 'app.location', 'app.office', 'app.trip', 'app.trip_page');

	function startTest() {
		$this->Page =& ClassRegistry::init('Page');
	}

	function endTest() {
		unset($this->Page);
		ClassRegistry::flush();
	}

}
?>