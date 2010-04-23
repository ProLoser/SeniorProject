<?php
/* Donations Test cases generated on: 2010-04-15 10:04:42 : 1271329182*/
App::import('Controller', 'Donations');

class TestDonationsController extends DonationsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class DonationsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.donation', 'app.booking', 'app.volunteer', 'app.document', 'app.ecuador_profile', 'app.signup', 'app.school', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.role', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.menu', 'app.spanish_profile');

	function startTest() {
		$this->Donations =& new TestDonationsController();
		$this->Donations->constructClasses();
	}

	function endTest() {
		unset($this->Donations);
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