<?php
/* Prices Test cases generated on: 2010-04-15 10:04:44 : 1271329184*/
App::import('Controller', 'Prices');

class TestPricesController extends PricesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PricesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.spanish_profile', 'app.document', 'app.role', 'app.page', 'app.menu');

	function startTest() {
		$this->Prices =& new TestPricesController();
		$this->Prices->constructClasses();
	}

	function endTest() {
		unset($this->Prices);
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