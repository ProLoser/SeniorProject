<?php
class PicturesController extends AppController {

	var $name = 'Pictures';

	function index() {
		$this->Picture->recursive = 0;
		$this->set('pictures', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'picture'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('picture', $this->Picture->read(null, $id));
	}

	function add($id = null) {
		if (!empty($this->data)) {
			$this->Picture->create();
			if ($this->Picture->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'picture'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'picture'));
			}
		}
		if (isset($id)) {
			$this->data['Picture']['page_id'] = $id;
		}
		$pages = $this->Picture->Page->find('list');
		$this->set(compact('pages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'picture'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Picture->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'picture'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'picture'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Picture->read(null, $id);
		}
		$pages = $this->Picture->Page->find('list');
		$this->set(compact('pages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'picture'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Picture->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Picture'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Picture'));
		$this->redirect(array('action' => 'index'));
	}
}
?>