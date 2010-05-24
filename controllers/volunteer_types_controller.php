<?php
class VolunteerTypesController extends AppController {

	var $name = 'VolunteerTypes';

	function index() {
		$this->VolunteerType->recursive = 0;
		$this->set('volunteerTypes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'volunteer type'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('volunteerType', $this->VolunteerType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->VolunteerType->create();
			if ($this->VolunteerType->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'volunteer type'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'volunteer type'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'volunteer type'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->VolunteerType->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'volunteer type'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'volunteer type'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->VolunteerType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'volunteer type'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->VolunteerType->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Volunteer type'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Volunteer type'));
		$this->redirect(array('action' => 'index'));
	}
}
?>