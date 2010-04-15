<?php
/* Offices Test cases generated on: 2010-04-15 10:04:43 : 1271329183*/
App::import('Controller', 'Offices');

class TestOfficesController extends OfficesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class OfficesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.page', 'app.menu', 'app.spanish_profile', 'app.document', 'app.role');

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