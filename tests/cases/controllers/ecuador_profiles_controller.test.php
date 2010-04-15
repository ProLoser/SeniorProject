<?php
/* EcuadorProfiles Test cases generated on: 2010-04-15 10:04:42 : 1271329182*/
App::import('Controller', 'EcuadorProfiles');

class TestEcuadorProfilesController extends EcuadorProfilesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class EcuadorProfilesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.ecuador_profile', 'app.volunteer', 'app.booking', 'app.donation', 'app.line_item', 'app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.role', 'app.page', 'app.menu', 'app.spanish_profile', 'app.document');

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