<?php
/* Bookings Test cases generated on: 2010-04-15 10:04:41 : 1271329181*/
App::import('Controller', 'Bookings');

class TestBookingsController extends BookingsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class BookingsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.booking', 'app.volunteer', 'app.document', 'app.donation', 'app.ecuador_profile', 'app.signup', 'app.school', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.role', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.menu', 'app.spanish_profile');

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

}
?>