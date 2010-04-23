<?php
class EmployeesController extends AppController {

	var $name = 'Employees';

	function index() {
		$this->Employee->recursive = 0;
		$this->set('employees', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'employee'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('employee', $this->Employee->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Employee->create();
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'employee'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'employee'));
			}
		}
		$offices = $this->Employee->Office->find('list');
		$users = $this->Employee->User->find('list');
		$this->set(compact('offices', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'employee'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Employee->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'employee'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'employee'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Employee->read(null, $id);
		}
		$offices = $this->Employee->Office->find('list');
		$users = $this->Employee->User->find('list');
		$this->set(compact('offices', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'employee'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Employee->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Employee'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Employee'));
		$this->redirect(array('action' => 'index'));
	}
}
?>