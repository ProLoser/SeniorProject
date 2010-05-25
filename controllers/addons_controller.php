<?php
class AddonsController extends AppController {

	var $name = 'Addons';

	function index() {
		$this->Addon->recursive = 0;
		$this->set('addons', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'addon'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('addon', $this->Addon->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Addon->create();
			if ($this->Addon->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'addon'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'addon'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'addon'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Addon->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'addon'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'addon'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Addon->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'addon'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Addon->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Addon'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Addon'));
		$this->redirect(array('action' => 'index'));
	}
}
?>