<?php
/* Volunteers Test cases generated on: 2010-04-15 10:04:45 : 1271329185*/
App::import('Controller', 'Volunteers');

class TestVolunteersController extends VolunteersController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class VolunteersControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.role', 'app.page', 'app.menu', 'app.spanish_profile', 'app.document');

	function startTest() {
		$this->Volunteers =& new TestVolunteersController();
		$this->Volunteers->constructClasses();
	}

	function endTest() {
		unset($this->Volunteers);
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