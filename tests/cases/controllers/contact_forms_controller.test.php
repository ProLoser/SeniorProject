<?php
/* ContactForms Test cases generated on: 2010-04-15 10:04:42 : 1271329182*/
App::import('Controller', 'ContactForms');

class TestContactFormsController extends ContactFormsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class ContactFormsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.contact_form');

	function startTest() {
		$this->ContactForms =& new TestContactFormsController();
		$this->ContactForms->constructClasses();
	}

	function endTest() {
		unset($this->ContactForms);
		ClassRegistry::flush();
	}

	function testIndex() {

	}

	function testView() {

	}

	function testAdd() {

	}

	function testEdit() {

	}

	function testDelete() {

	}

}
?>