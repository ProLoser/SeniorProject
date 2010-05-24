<?php
class LocationsController extends AppController {

	var $name = 'Locations';

	function index() {
		$this->Location->recursive = 0;
		$this->set('locations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'location'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('location', $this->Location->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Location->create();
			if ($this->Location->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'location'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'location'));
			}
		}
		$offices = $this->Location->Office->find('list');
		$this->set(compact('offices'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'location'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Location->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'location'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'location'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Location->read(null, $id);
		}
		$offices = $this->Location->Office->find('list');
		$this->set(compact('offices'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'location'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Location->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Location'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Location'));
		$this->redirect(array('action' => 'index'));
	}
}
?>