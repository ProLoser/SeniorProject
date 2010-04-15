<?php
/* SpanishProfiles Test cases generated on: 2010-04-15 10:04:45 : 1271329185*/
App::import('Controller', 'SpanishProfiles');

class TestSpanishProfilesController extends SpanishProfilesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class SpanishProfilesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.spanish_profile', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.price', 'app.location', 'app.office', 'app.employee', 'app.recruiter_meeting', 'app.school', 'app.signup', 'app.role', 'app.page', 'app.menu', 'app.document');

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