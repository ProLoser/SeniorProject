<?php
class TripsController extends AppController {

	var $name = 'Trips';

	function index() {
		$this->Trip->recursive = 0;
		$this->set('trips', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'trip'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('trip', $this->Trip->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Trip->create();
			if ($this->Trip->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'trip'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'trip'));
			}
		}
		$destinations = $this->Trip->Destination->find('list');
		$volunteerTypes = $this->Trip->VolunteerType->find('list');
		$programTypes = $this->Trip->ProgramType->find('list');
		$this->set(compact('destinations', 'volunteerTypes', 'programTypes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'trip'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Trip->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'trip'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'trip'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Trip->read(null, $id);
		}
		$destinations = $this->Trip->Destination->find('list');
		$volunteerTypes = $this->Trip->VolunteerType->find('list');
		$programTypes = $this->Trip->ProgramType->find('list');
		$this->set(compact('destinations', 'volunteerTypes', 'programTypes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'trip'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Trip->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Trip'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Trip'));
		$this->redirect(array('action' => 'index'));
	}
}
?>