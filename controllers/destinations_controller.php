<?php
class DestinationsController extends AppController {

	var $name = 'Destinations';

	function index() {
		$this->Destination->recursive = 0;
		$this->set('destinations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'destination'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('destination', $this->Destination->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Destination->create();
			if ($this->Destination->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'destination'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'destination'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'destination'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Destination->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'destination'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'destination'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Destination->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'destination'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Destination->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Destination'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Destination'));
		$this->redirect(array('action' => 'index'));
	}
}
?>