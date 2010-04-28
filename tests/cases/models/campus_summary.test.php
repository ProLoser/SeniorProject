<?php
/* CampusSummary Test cases generated on: 2010-04-28 00:04:31 : 1272413671*/
App::import('Model', 'CampusSummary');

class CampusSummaryTestCase extends CakeTestCase {
	var $fixtures = array('app.campus_summary');

	function startTest() {
		$this->CampusSummary =& ClassRegistry::init('CampusSummary');
	}

	function endTest() {
		unset($this->CampusSummary);
		ClassRegistry::flush();
	}

}
?>