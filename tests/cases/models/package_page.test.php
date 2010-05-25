<?php
/* PackagePage Test cases generated on: 2010-05-24 16:05:02 : 1274744102*/
App::import('Model', 'PackagePage');

class PackagePageTestCase extends CakeTestCase {
	var $fixtures = array('app.package_page', 'app.destination', 'app.trip', 'app.volunteer_type', 'app.program_type', 'app.page');

	function startTest() {
		$this->PackagePage =& ClassRegistry::init('PackagePage');
	}

	function endTest() {
		unset($this->PackagePage);
		ClassRegistry::flush();
	}

}
?>