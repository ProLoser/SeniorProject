<?php
/* Documents Test cases generated on: 2010-04-15 10:04:42 : 1271329182*/
App::import('Controller', 'Documents');

class TestDocumentsController extends DocumentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DocumentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.document', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.role', 'app.page', 'app.menu', 'app.spanish_profile');

	function startTest() {
		$this->Documents =& new TestDocumentsController();
		$this->Documents->constructClasses();
	}

	function endTest() {
		unset($this->Documents);
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