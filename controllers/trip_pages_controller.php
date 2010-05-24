<?php
class TripPagesController extends AppController {

	var $name = 'TripPages';

	function index() {
		$this->TripPage->recursive = 0;
		$this->set('tripPages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'trip page'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tripPage', $this->TripPage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TripPage->create();
			if ($this->TripPage->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'trip page'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'trip page'));
			}
		}
		$destinations = $this->TripPage->Destination->find('list');
		$volunteerTypes = $this->TripPage->VolunteerType->find('list');
		$programTypes = $this->TripPage->ProgramType->find('list');
		$pages = $this->TripPage->Page->find('list');
		$this->set(compact('destinations', 'volunteerTypes', 'programTypes', 'pages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'trip page'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TripPage->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'trip page'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'trip page'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TripPage->read(null, $id);
		}
		$destinations = $this->TripPage->Destination->find('list');
		$volunteerTypes = $this->TripPage->VolunteerType->find('list');
		$programTypes = $this->TripPage->ProgramType->find('list');
		$pages = $this->TripPage->Page->find('list');
		$this->set(compact('destinations', 'volunteerTypes', 'programTypes', 'pages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'trip page'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TripPage->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Trip page'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Trip page'));
		$this->redirect(array('action' => 'index'));
	}
}
?>