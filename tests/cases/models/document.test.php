<?php
/* Document Test cases generated on: 2010-04-15 10:04:07 : 1271329147*/
App::import('Model', 'Document');

class DocumentTestCase extends CakeTestCase {
	var $fixtures = array('app.document', 'app.volunteer');

	function startTest() {
		$this->Document =& ClassRegistry::init('Document');
	}

	function endTest() {
		unset($this->Document);
		ClassRegistry::flush();
	}

}
?>