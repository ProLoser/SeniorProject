<?php
/* Fees Test cases generated on: 2010-04-15 10:04:42 : 1271329182*/
App::import('Controller', 'Fees');

class TestFeesController extends FeesController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class FeesControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.fee');

	function startTest() {
		$this->Fees =& new TestFeesController();
		$this->Fees->constructClasses();
	}

	function endTest() {
		unset($this->Fees);
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