<?php
class EcuadorProfilesController extends AppController {

	var $name = 'EcuadorProfiles';

	function index() {
		$this->EcuadorProfile->recursive = 0;
		$this->set('ecuadorProfiles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'ecuador profile'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ecuadorProfile', $this->EcuadorProfile->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EcuadorProfile->create();
			if ($this->EcuadorProfile->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'ecuador profile'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'ecuador profile'));
			}
		}
		$volunteers = $this->EcuadorProfile->Volunteer->find('list');
		$bookings = $this->EcuadorProfile->Booking->find('list');
		$this->set(compact('volunteers', 'bookings'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'ecuador profile'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EcuadorProfile->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'ecuador profile'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'ecuador profile'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EcuadorProfile->read(null, $id);
		}
		$volunteers = $this->EcuadorProfile->Volunteer->find('list');
		$bookings = $this->EcuadorProfile->Booking->find('list');
		$this->set(compact('volunteers', 'bookings'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'ecuador profile'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EcuadorProfile->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Ecuador profile'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Ecuador profile'));
		$this->redirect(array('action' => 'index'));
	}
}
?>