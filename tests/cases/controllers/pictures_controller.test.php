<?php
/* Pictures Test cases generated on: 2010-06-12 05:06:30 : 1276321890*/
App::import('Controller', 'Pictures');

class TestPicturesController extends PicturesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PicturesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.picture', 'app.page', 'app.location', 'app.office');

	function startTest() {
		$this->Pictures =& new TestPicturesController();
		$this->Pictures->constructClasses();
	}

	function endTest() {
		unset($this->Pictures);
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