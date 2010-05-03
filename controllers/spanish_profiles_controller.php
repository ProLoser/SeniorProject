<?php
class SpanishProfilesController extends AppController {

	var $name = 'SpanishProfiles';

	function index() {
		$this->SpanishProfile->recursive = 0;
		$this->set('spanishProfiles', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'spanish profile'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('spanishProfile', $this->SpanishProfile->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SpanishProfile->create();
			if ($this->SpanishProfile->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'spanish profile'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'spanish profile'));
			}
		}
		$volunteers = $this->SpanishProfile->Volunteer->find('list');
		$bookings = $this->SpanishProfile->Booking->find('list');
		$this->set(compact('volunteers', 'bookings'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'spanish profile'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SpanishProfile->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'spanish profile'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'spanish profile'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SpanishProfile->read(null, $id);
		}
		$volunteers = $this->SpanishProfile->Volunteer->find('list');
		$bookings = $this->SpanishProfile->Booking->find('list');
		$this->set(compact('volunteers', 'bookings'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'spanish profile'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SpanishProfile->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Spanish profile'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Spanish profile'));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->SpanishProfile->recursive = 0;
		$this->set('spanishProfiles', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'spanish profile'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('spanishProfile', $this->SpanishProfile->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->SpanishProfile->create();
			if ($this->SpanishProfile->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'spanish profile'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'spanish profile'));
			}
		}
		$volunteers = $this->SpanishProfile->Volunteer->find('list');
		$bookings = $this->SpanishProfile->Booking->find('list');
		$this->set(compact('volunteers', 'bookings'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'spanish profile'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SpanishProfile->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'spanish profile'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'spanish profile'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SpanishProfile->read(null, $id);
		}
		$volunteers = $this->SpanishProfile->Volunteer->find('list');
		$bookings = $this->SpanishProfile->Booking->find('list');
		$this->set(compact('volunteers', 'bookings'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'spanish profile'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SpanishProfile->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Spanish profile'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Spanish profile'));
		$this->redirect(array('action' => 'index'));
	}
}
?>