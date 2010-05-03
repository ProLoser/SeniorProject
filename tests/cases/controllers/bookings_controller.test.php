<?php
/* Bookings Test cases generated on: 2010-05-03 00:05:48 : 1272846108*/
App::import('Controller', 'Bookings');

class TestBookingsController extends BookingsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BookingsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.booking', 'app.volunteer', 'app.location', 'app.office', 'app.employee', 'app.user', 'app.role', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.page', 'app.price', 'app.line_item', 'app.menu', 'app.document', 'app.donation', 'app.ecuador_profile', 'app.spanish_profile');

	function startTest() {
		$this->Bookings =& new TestBookingsController();
		$this->Bookings->constructClasses();
	}

	function endTest() {
		unset($this->Bookings);
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