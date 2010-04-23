<?php
/* Offices Test cases generated on: 2010-04-23 23:04:51 : 1272066171*/
App::import('Controller', 'Offices');

class TestOfficesController extends OfficesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OfficesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.office', 'app.employee', 'app.user', 'app.role', 'app.location', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.volunteer', 'app.document', 'app.donation', 'app.ecuador_profile', 'app.signup', 'app.school', 'app.recruiter_meeting', 'app.spanish_profile', 'app.menu');

	function startTest() {
		$this->Offices =& new TestOfficesController();
		$this->Offices->constructClasses();
	}

	function endTest() {
		unset($this->Offices);
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