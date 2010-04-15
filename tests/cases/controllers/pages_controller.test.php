<?php
/* Pages Test cases generated on: 2010-04-15 10:04:43 : 1271329183*/
App::import('Controller', 'Pages');

class TestPagesController extends PagesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PagesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.page', 'app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.spanish_profile', 'app.document', 'app.role', 'app.menu');

	function startTest() {
		$this->Pages =& new TestPagesController();
		$this->Pages->constructClasses();
	}

	function endTest() {
		unset($this->Pages);
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