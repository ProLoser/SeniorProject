<?php
class BookingsController extends AppController {

	var $name = 'Bookings';

	function index() {
		$this->Booking->recursive = 0;
		$this->set('bookings', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'booking'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('booking', $this->Booking->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Booking->create();
			if ($this->Booking->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'booking'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'booking'));
			}
		}
		$volunteers = $this->Booking->Volunteer->find('list');
		$this->set(compact('volunteers'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'booking'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Booking->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'booking'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'booking'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Booking->read(null, $id);
		}
		$volunteers = $this->Booking->Volunteer->find('list');
		$this->set(compact('volunteers'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'booking'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Booking->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Booking'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Booking'));
		$this->redirect(array('action' => 'index'));
	}
}
?>