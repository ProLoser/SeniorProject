<?php
/* Menus Test cases generated on: 2010-04-23 23:04:51 : 1272066171*/
App::import('Controller', 'Menus');

class TestMenusController extends MenusController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class MenusControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.menu', 'app.page', 'app.price', 'app.location', 'app.office', 'app.employee', 'app.user', 'app.role', 'app.volunteer', 'app.booking', 'app.donation', 'app.ecuador_profile', 'app.line_item', 'app.spanish_profile', 'app.document', 'app.signup', 'app.school', 'app.recruiter_meeting');

	function startTest() {
		$this->Menus =& new TestMenusController();
		$this->Menus->constructClasses();
	}

	function endTest() {
		unset($this->Menus);
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