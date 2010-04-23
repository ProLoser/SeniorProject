<?php
/* SpanishProfiles Test cases generated on: 2010-04-23 23:04:54 : 1272066174*/
App::import('Controller', 'SpanishProfiles');

class TestSpanishProfilesController extends SpanishProfilesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SpanishProfilesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.spanish_profile', 'app.volunteer', 'app.location', 'app.office', 'app.employee', 'app.user', 'app.role', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.page', 'app.price', 'app.line_item', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.menu', 'app.document');

	function startTest() {
		$this->SpanishProfiles =& new TestSpanishProfilesController();
		$this->SpanishProfiles->constructClasses();
	}

	function endTest() {
		unset($this->SpanishProfiles);
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