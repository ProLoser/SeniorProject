<?php
class PromosController extends AppController {

	var $name = 'Promos';

	function index() {
		$this->Promo->recursive = 0;
		$this->set('promos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'promo'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('promo', $this->Promo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Promo->create();
			if ($this->Promo->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'promo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'promo'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'promo'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Promo->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'promo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'promo'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Promo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'promo'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Promo->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Promo'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Promo'));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->Promo->recursive = 0;
		$this->set('promos', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'promo'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('promo', $this->Promo->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Promo->create();
			if ($this->Promo->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'promo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'promo'));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'promo'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Promo->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'promo'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'promo'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Promo->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'promo'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Promo->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Promo'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Promo'));
		$this->redirect(array('action' => 'index'));
	}
}
?>