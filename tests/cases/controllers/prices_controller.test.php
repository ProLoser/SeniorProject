<?php
/* Prices Test cases generated on: 2010-05-03 00:05:13 : 1272846193*/
App::import('Controller', 'Prices');

class TestPricesController extends PricesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PricesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.price', 'app.location', 'app.office', 'app.employee', 'app.user', 'app.role', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.spanish_profile', 'app.document', 'app.signup', 'app.school', 'app.recruiter_meeting', 'app.page', 'app.menu');

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

	function testAdminIndex() {

	}

	function testAdminView() {

	}

	function testAdminAdd() {

	}

	function testAdminEdit() {

	}

	function testAdminDelete() {

	}

}
?>