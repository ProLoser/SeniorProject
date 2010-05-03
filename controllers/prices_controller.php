<?php
class PricesController extends AppController {

	var $name = 'Prices';

	function index() {
		$this->Price->recursive = 0;
		$this->set('prices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'price'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('price', $this->Price->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Price->create();
			if ($this->Price->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'price'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'price'));
			}
		}
		$locations = $this->Price->Location->find('list');
		$this->set(compact('locations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'price'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Price->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'price'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'price'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Price->read(null, $id);
		}
		$locations = $this->Price->Location->find('list');
		$this->set(compact('locations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'price'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Price->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Price'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Price'));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->Price->recursive = 0;
		$this->set('prices', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'price'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('price', $this->Price->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Price->create();
			if ($this->Price->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'price'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'price'));
			}
		}
		$locations = $this->Price->Location->find('list');
		$this->set(compact('locations'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'price'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Price->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'price'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'price'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Price->read(null, $id);
		}
		$locations = $this->Price->Location->find('list');
		$this->set(compact('locations'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'price'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Price->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Price'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Price'));
		$this->redirect(array('action' => 'index'));
	}
}
?>