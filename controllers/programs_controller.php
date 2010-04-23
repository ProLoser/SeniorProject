<?php
class ProgramsController extends AppController {

	var $name = 'Programs';

	function index() {
		$this->Program->recursive = 0;
		$this->set('programs', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'program'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('program', $this->Program->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Program->create();
			if ($this->Program->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'program'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'program'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'program'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Program->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'program'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'program'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Program->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'program'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Program->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Program'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Program'));
		$this->redirect(array('action' => 'index'));
	}
}
?>