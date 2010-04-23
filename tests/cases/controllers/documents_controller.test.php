<?php
/* Documents Test cases generated on: 2010-04-23 23:04:48 : 1272066168*/
App::import('Controller', 'Documents');

class TestDocumentsController extends DocumentsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DocumentsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.document', 'app.volunteer', 'app.location', 'app.office', 'app.employee', 'app.user', 'app.role', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.spanish_profile', 'app.menu');

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