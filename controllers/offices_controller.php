<?php
class OfficesController extends AppController {

	var $name = 'Offices';

	function index() {
		$this->Office->recursive = 0;
		$this->set('offices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'office'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('office', $this->Office->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Office->create();
			if ($this->Office->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'office'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'office'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'office'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Office->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'office'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'office'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Office->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'office'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Office->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Office'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Office'));
		$this->redirect(array('action' => 'index'));
	}
}
?>