<?php
class FeesController extends AppController {

	var $name = 'Fees';

	function index() {
		$this->Fee->recursive = 0;
		$this->set('fees', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'fee'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('fee', $this->Fee->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Fee->create();
			if ($this->Fee->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'fee'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'fee'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'fee'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Fee->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'fee'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'fee'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Fee->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'fee'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Fee->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Fee'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Fee'));
		$this->redirect(array('action' => 'index'));
	}
}
?>