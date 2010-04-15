<?php
/* ContactForm Test cases generated on: 2010-04-15 10:04:04 : 1271329144*/
App::import('Model', 'ContactForm');

class ContactFormTestCase extends CakeTestCase {
	var $fixtures = array('app.contact_form');

	function startTest() {
		$this->ContactForm =& ClassRegistry::init('ContactForm');
	}

	function endTest() {
		unset($this->ContactForm);
		ClassRegistry::flush();
	}

}
?>