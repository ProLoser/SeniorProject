<?php
/* LineItems Test cases generated on: 2010-04-15 10:04:43 : 1271329183*/
App::import('Controller', 'LineItems');

class TestLineItemsController extends LineItemsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class LineItemsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.line_item', 'app.booking', 'app.volunteer', 'app.document', 'app.donation', 'app.ecuador_profile', 'app.signup', 'app.school', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.role', 'app.location', 'app.page', 'app.price', 'app.menu', 'app.spanish_profile');

	function startTest() {
		$this->LineItems =& new TestLineItemsController();
		$this->LineItems->constructClasses();
	}

	function endTest() {
		unset($this->LineItems);
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