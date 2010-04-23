<?php
class ContactFormsController extends AppController {

	var $name = 'ContactForms';

	function index() {
		$this->ContactForm->recursive = 0;
		$this->set('contactForms', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'contact form'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('contactForm', $this->ContactForm->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ContactForm->create();
			if ($this->ContactForm->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'contact form'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'contact form'));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'contact form'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ContactForm->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'contact form'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'contact form'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ContactForm->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'contact form'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ContactForm->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Contact form'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Contact form'));
		$this->redirect(array('action' => 'index'));
	}
}
?>