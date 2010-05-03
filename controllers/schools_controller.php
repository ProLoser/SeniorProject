<?php
class SchoolsController extends AppController {

	var $name = 'Schools';

	function index() {
		$this->School->recursive = 0;
		$this->set('schools', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'school'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('school', $this->School->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->School->create();
			if ($this->School->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'school'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'school'));
			}
		}
		$offices = $this->School->Office->find('list');
		$this->set(compact('offices'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'school'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->School->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'school'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'school'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->School->read(null, $id);
		}
		$offices = $this->School->Office->find('list');
		$this->set(compact('offices'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'school'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->School->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'School'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'School'));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->School->recursive = 0;
		$this->set('schools', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'school'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('school', $this->School->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->School->create();
			if ($this->School->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'school'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'school'));
			}
		}
		$offices = $this->School->Office->find('list');
		$this->set(compact('offices'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'school'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->School->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'school'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'school'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->School->read(null, $id);
		}
		$offices = $this->School->Office->find('list');
		$this->set(compact('offices'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'school'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->School->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'School'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'School'));
		$this->redirect(array('action' => 'index'));
	}
}
?>