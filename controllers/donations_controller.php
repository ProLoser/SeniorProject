<?php
class DonationsController extends AppController {

	var $name = 'Donations';

	function index() {
		$this->Donation->recursive = 0;
		$this->set('donations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'donation'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('donation', $this->Donation->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Donation->create();
			if ($this->Donation->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'donation'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'donation'));
			}
		}
		$bookings = $this->Donation->Booking->find('list');
		$volunteers = $this->Donation->Volunteer->find('list');
		$this->set(compact('bookings', 'volunteers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'donation'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Donation->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'donation'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'donation'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Donation->read(null, $id);
		}
		$bookings = $this->Donation->Booking->find('list');
		$volunteers = $this->Donation->Volunteer->find('list');
		$this->set(compact('bookings', 'volunteers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'donation'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Donation->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Donation'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Donation'));
		$this->redirect(array('action' => 'index'));
	}
}
?>