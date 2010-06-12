<?php
/* Picture Test cases generated on: 2010-06-12 05:06:27 : 1276321887*/
App::import('Model', 'Picture');

class PictureTestCase extends CakeTestCase {
	var $fixtures = array('app.picture', 'app.page', 'app.location', 'app.office');

	function startTest() {
		$this->Picture =& ClassRegistry::init('Picture');
	}

	function endTest() {
		unset($this->Picture);
		ClassRegistry::flush();
	}

}
?>