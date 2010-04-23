<?php
/* Schools Test cases generated on: 2010-04-15 10:04:44 : 1271329184*/
App::import('Controller', 'Schools');

class TestSchoolsController extends SchoolsController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SchoolsControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.school', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.role', 'app.signup', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.page', 'app.menu', 'app.spanish_profile', 'app.document');

	function startTest() {
		$this->Schools =& new TestSchoolsController();
		$this->Schools->constructClasses();
	}

	function endTest() {
		unset($this->Schools);
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