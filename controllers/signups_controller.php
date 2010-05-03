<?php
class SignupsController extends AppController {

	var $name = 'Signups';

	function index() {
		$this->Signup->recursive = 0;
		$this->set('signups', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'signup'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('signup', $this->Signup->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Signup->create();
			if ($this->Signup->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'signup'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'signup'));
			}
		}
		$volunteers = $this->Signup->Volunteer->find('list');
		$schools = $this->Signup->School->find('list');
		$employees = $this->Signup->Employee->find('list');
		$this->set(compact('volunteers', 'schools', 'employees'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'signup'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Signup->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'signup'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'signup'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Signup->read(null, $id);
		}
		$volunteers = $this->Signup->Volunteer->find('list');
		$schools = $this->Signup->School->find('list');
		$employees = $this->Signup->Employee->find('list');
		$this->set(compact('volunteers', 'schools', 'employees'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'signup'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Signup->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Signup'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Signup'));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->Signup->recursive = 0;
		$this->set('signups', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'signup'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('signup', $this->Signup->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Signup->create();
			if ($this->Signup->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'signup'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'signup'));
			}
		}
		$volunteers = $this->Signup->Volunteer->find('list');
		$schools = $this->Signup->School->find('list');
		$employees = $this->Signup->Employee->find('list');
		$this->set(compact('volunteers', 'schools', 'employees'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'signup'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Signup->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'signup'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'signup'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Signup->read(null, $id);
		}
		$volunteers = $this->Signup->Volunteer->find('list');
		$schools = $this->Signup->School->find('list');
		$employees = $this->Signup->Employee->find('list');
		$this->set(compact('volunteers', 'schools', 'employees'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'signup'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Signup->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Signup'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Signup'));
		$this->redirect(array('action' => 'index'));
	}
}
?>