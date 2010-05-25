<?php
class PagesController extends AppController {

	var $name = 'Pages';
	var $components = array('Email');

	function index() {
		$this->Page->recursive = 0;
		$this->set('pages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'page'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('page', $this->Page->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Page->create();
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'page'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'page'));
			}
		}
		$locations = $this->Page->Location->find('list');
		$this->set(compact('locations'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'page'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Page->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'page'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'page'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Page->read(null, $id);
		}
		$locations = $this->Page->Location->find('list');
		$this->set(compact('locations'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'page'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Page->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Page'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Page'));
		$this->redirect(array('action' => 'index'));
	}

	/**
	 * Displays a view
	 *
	 * @param mixed What page to display
	 * @access public
	 */
		function display() {
			$path = func_get_args();

			$count = count($path);
			if (!$count) {
				$this->redirect('/');
			}
			$page = $subpage = $title = null;

			if (!empty($path[0])) {
				$page = $path[0];
			}
			if (!empty($path[1])) {
				$subpage = $path[1];
			}
			if (!empty($path[$count - 1])) {
				$title = Inflector::humanize($path[$count - 1]);
			}
			$this->set(compact('page', 'subpage', 'title'));
			$this->render(implode('/', $path));
		}

		function contact() {
			if (!empty($this->data)) {
				$this->loadModel('Emailer');
				$this->Emailer->create($this->data);
				if ($this->Emailer->validates()) {
					$this->Email->to = Configure::read('CONTACT_EMAIL');
					$this->Email->replyTo = $this->data['Emailer']['email'];
					$this->Email->from = $this->data['Emailer']['name'].' <'.$this->data['Emailer']['email'].'>';
					$this->Email->subject = 'Emailer Form: '.$this->data['Emailer']['subject'];
					//$this->Email->delivery = 'debug';
					if ($this->Email->send($this->data['Emailer']['message'])) {
						$this->Session->setFlash('Thank you for contacting us');
						//$this->redirect('/');
					} else {
						$this->Session->setFlash(__('There was an error sending your email. Please try again in a few minutes.', true));
					}
				} else {
					$this->Session->setFlash(__('Please correct the following errors', true));
				}
			}
		}
}
?>