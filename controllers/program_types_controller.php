<?php
class ProgramTypesController extends AppController {

	var $name = 'ProgramTypes';

	function index() {
		$this->ProgramType->recursive = 0;
		$this->set('programTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'program type'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('programType', $this->ProgramType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ProgramType->create();
			if ($this->ProgramType->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'program type'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'program type'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'program type'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ProgramType->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'program type'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'program type'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ProgramType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'program type'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ProgramType->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Program type'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Program type'));
		$this->redirect(array('action' => 'index'));
	}
}
?>