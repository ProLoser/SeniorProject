<?php
class AddonCombinationsController extends AppController {

	var $name = 'AddonCombinations';

	function index() {
		$this->AddonCombination->recursive = 0;
		$this->set('addonCombinations', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'addon combination'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('addonCombination', $this->AddonCombination->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AddonCombination->create();
			if ($this->AddonCombination->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'addon combination'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'addon combination'));
			}
		}
		$baseCombinations = $this->AddonCombination->BaseCombination->find('list');
		$addons = $this->AddonCombination->Addon->find('list');
		$this->set(compact('baseCombinations', 'addons'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'addon combination'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AddonCombination->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'addon combination'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'addon combination'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AddonCombination->read(null, $id);
		}
		$baseCombinations = $this->AddonCombination->BaseCombination->find('list');
		$addons = $this->AddonCombination->Addon->find('list');
		$this->set(compact('baseCombinations', 'addons'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'addon combination'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AddonCombination->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Addon combination'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Addon combination'));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->AddonCombination->recursive = 0;
		$this->set('addonCombinations', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'addon combination'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('addonCombination', $this->AddonCombination->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->AddonCombination->create();
			if ($this->AddonCombination->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'addon combination'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'addon combination'));
			}
		}
		$baseCombinations = $this->AddonCombination->BaseCombination->find('list');
		$addons = $this->AddonCombination->Addon->find('list');
		$this->set(compact('baseCombinations', 'addons'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'addon combination'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AddonCombination->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'addon combination'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'addon combination'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AddonCombination->read(null, $id);
		}
		$baseCombinations = $this->AddonCombination->BaseCombination->find('list');
		$addons = $this->AddonCombination->Addon->find('list');
		$this->set(compact('baseCombinations', 'addons'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'addon combination'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AddonCombination->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Addon combination'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Addon combination'));
		$this->redirect(array('action' => 'index'));
	}
}
?>