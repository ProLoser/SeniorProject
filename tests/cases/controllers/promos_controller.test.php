<?php
/* Promos Test cases generated on: 2010-04-15 10:04:44 : 1271329184*/
App::import('Controller', 'Promos');

class TestPromosController extends PromosController {
	var $autoRender = false;

	function redirect($url, $status = null, $exit = true) {
		$this->redirectUrl = $url;
	}
}

class PromosControllerTestCase extends CakeTestCase {
	var $fixtures = array('app.promo');

	function startTest() {
		$this->Promos =& new TestPromosController();
		$this->Promos->constructClasses();
	}

	function endTest() {
		unset($this->Promos);
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