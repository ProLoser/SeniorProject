<?php
class LineItemsController extends AppController {

	var $name = 'LineItems';

	function index() {
		$this->LineItem->recursive = 0;
		$this->set('lineItems', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'line item'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('lineItem', $this->LineItem->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->LineItem->create();
			if ($this->LineItem->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'line item'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'line item'));
			}
		}
		$bookings = $this->LineItem->Booking->find('list');
		$prices = $this->LineItem->Price->find('list');
		$this->set(compact('bookings', 'prices'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'line item'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->LineItem->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'line item'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'line item'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LineItem->read(null, $id);
		}
		$bookings = $this->LineItem->Booking->find('list');
		$prices = $this->LineItem->Price->find('list');
		$this->set(compact('bookings', 'prices'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'line item'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->LineItem->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Line item'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Line item'));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->LineItem->recursive = 0;
		$this->set('lineItems', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'line item'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('lineItem', $this->LineItem->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->LineItem->create();
			if ($this->LineItem->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'line item'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'line item'));
			}
		}
		$bookings = $this->LineItem->Booking->find('list');
		$prices = $this->LineItem->Price->find('list');
		$this->set(compact('bookings', 'prices'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'line item'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->LineItem->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'line item'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'line item'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->LineItem->read(null, $id);
		}
		$bookings = $this->LineItem->Booking->find('list');
		$prices = $this->LineItem->Price->find('list');
		$this->set(compact('bookings', 'prices'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'line item'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->LineItem->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Line item'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Line item'));
		$this->redirect(array('action' => 'index'));
	}
}
?>