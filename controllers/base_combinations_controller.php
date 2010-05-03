<?php
class BaseCombinationsController extends AppController {

	var $name = 'BaseCombinations';

	function index() {
		$this->BaseCombination->recursive = 0;
		$this->set('baseCombinations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'base combination'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('baseCombination', $this->BaseCombination->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BaseCombination->create();
			if ($this->BaseCombination->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'base combination'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'base combination'));
			}
		}
		$destinations = $this->BaseCombination->Destination->find('list');
		$programs = $this->BaseCombination->Program->find('list');
		$this->set(compact('destinations', 'programs'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'base combination'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BaseCombination->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'base combination'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'base combination'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BaseCombination->read(null, $id);
		}
		$destinations = $this->BaseCombination->Destination->find('list');
		$programs = $this->BaseCombination->Program->find('list');
		$this->set(compact('destinations', 'programs'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'base combination'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BaseCombination->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Base combination'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Base combination'));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->BaseCombination->recursive = 0;
		$this->set('baseCombinations', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'base combination'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('baseCombination', $this->BaseCombination->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->BaseCombination->create();
			if ($this->BaseCombination->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'base combination'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'base combination'));
			}
		}
		$destinations = $this->BaseCombination->Destination->find('list');
		$programs = $this->BaseCombination->Program->find('list');
		$this->set(compact('destinations', 'programs'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'base combination'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BaseCombination->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'base combination'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'base combination'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BaseCombination->read(null, $id);
		}
		$destinations = $this->BaseCombination->Destination->find('list');
		$programs = $this->BaseCombination->Program->find('list');
		$this->set(compact('destinations', 'programs'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'base combination'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BaseCombination->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Base combination'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Base combination'));
		$this->redirect(array('action' => 'index'));
	}
}
?>