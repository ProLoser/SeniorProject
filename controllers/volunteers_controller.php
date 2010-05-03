<?php
class VolunteersController extends AppController {

	var $name = 'Volunteers';

	function index() {
		$this->Volunteer->recursive = 0;
		$this->set('volunteers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'volunteer'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('volunteer', $this->Volunteer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Volunteer->create();
			if ($this->Volunteer->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'volunteer'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'volunteer'));
			}
		}
		$locations = $this->Volunteer->Location->find('list');
		$users = $this->Volunteer->User->find('list');
		$this->set(compact('locations', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'volunteer'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Volunteer->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'volunteer'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'volunteer'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Volunteer->read(null, $id);
		}
		$locations = $this->Volunteer->Location->find('list');
		$users = $this->Volunteer->User->find('list');
		$this->set(compact('locations', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'volunteer'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Volunteer->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Volunteer'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Volunteer'));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->Volunteer->recursive = 0;
		$this->set('volunteers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'volunteer'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('volunteer', $this->Volunteer->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Volunteer->create();
			if ($this->Volunteer->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'volunteer'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'volunteer'));
			}
		}
		$locations = $this->Volunteer->Location->find('list');
		$users = $this->Volunteer->User->find('list');
		$this->set(compact('locations', 'users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'volunteer'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Volunteer->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'volunteer'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'volunteer'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Volunteer->read(null, $id);
		}
		$locations = $this->Volunteer->Location->find('list');
		$users = $this->Volunteer->User->find('list');
		$this->set(compact('locations', 'users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'volunteer'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Volunteer->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Volunteer'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Volunteer'));
		$this->redirect(array('action' => 'index'));
	}
}
?>