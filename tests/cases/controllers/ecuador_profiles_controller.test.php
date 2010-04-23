<?php
/* EcuadorProfiles Test cases generated on: 2010-04-23 23:04:49 : 1272066169*/
App::import('Controller', 'EcuadorProfiles');

class TestEcuadorProfilesController extends EcuadorProfilesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EcuadorProfilesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ecuador_profile', 'app.volunteer', 'app.location', 'app.office', 'app.employee', 'app.user', 'app.role', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.donation', 'app.spanish_profile', 'app.menu', 'app.document');

	function startTest() {
		$this->EcuadorProfiles =& new TestEcuadorProfilesController();
		$this->EcuadorProfiles->constructClasses();
	}

	function endTest() {
		unset($this->EcuadorProfiles);
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