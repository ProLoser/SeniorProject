<?php
class RecruiterMeetingsController extends AppController {

	var $name = 'RecruiterMeetings';

	function index() {
		$this->RecruiterMeeting->recursive = 0;
		$this->set('recruiterMeetings', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'recruiter meeting'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('recruiterMeeting', $this->RecruiterMeeting->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->RecruiterMeeting->create();
			if ($this->RecruiterMeeting->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'recruiter meeting'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'recruiter meeting'));
			}
		}
		$schools = $this->RecruiterMeeting->School->find('list');
		$employees = $this->RecruiterMeeting->Employee->find('list');
		$this->set(compact('schools', 'employees'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'recruiter meeting'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->RecruiterMeeting->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'recruiter meeting'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'recruiter meeting'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RecruiterMeeting->read(null, $id);
		}
		$schools = $this->RecruiterMeeting->School->find('list');
		$employees = $this->RecruiterMeeting->Employee->find('list');
		$this->set(compact('schools', 'employees'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'recruiter meeting'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RecruiterMeeting->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Recruiter meeting'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Recruiter meeting'));
		$this->redirect(array('action' => 'index'));
	}

	function admin_index() {
		$this->RecruiterMeeting->recursive = 0;
		$this->set('recruiterMeetings', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'recruiter meeting'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('recruiterMeeting', $this->RecruiterMeeting->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->RecruiterMeeting->create();
			if ($this->RecruiterMeeting->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'recruiter meeting'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'recruiter meeting'));
			}
		}
		$schools = $this->RecruiterMeeting->School->find('list');
		$employees = $this->RecruiterMeeting->Employee->find('list');
		$this->set(compact('schools', 'employees'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'recruiter meeting'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->RecruiterMeeting->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'recruiter meeting'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'recruiter meeting'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RecruiterMeeting->read(null, $id);
		}
		$schools = $this->RecruiterMeeting->School->find('list');
		$employees = $this->RecruiterMeeting->Employee->find('list');
		$this->set(compact('schools', 'employees'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'recruiter meeting'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RecruiterMeeting->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Recruiter meeting'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Recruiter meeting'));
		$this->redirect(array('action' => 'index'));
	}

	function recruit_index() {
		$this->RecruiterMeeting->recursive = 0;
		$this->set('recruiterMeetings', $this->paginate());
	}

	function recruit_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'recruiter meeting'));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('recruiterMeeting', $this->RecruiterMeeting->read(null, $id));
	}

	function recruit_add() {
		if (!empty($this->data)) {
			$this->RecruiterMeeting->create();
			if ($this->RecruiterMeeting->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'recruiter meeting'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'recruiter meeting'));
			}
		}
		$schools = $this->RecruiterMeeting->School->find('list');
		$employees = $this->RecruiterMeeting->Employee->find('list');
		$this->set(compact('schools', 'employees'));
	}

	function recruit_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(sprintf(__('Invalid %s', true), 'recruiter meeting'));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->RecruiterMeeting->save($this->data)) {
				$this->Session->setFlash(sprintf(__('The %s has been saved', true), 'recruiter meeting'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(sprintf(__('The %s could not be saved. Please, try again.', true), 'recruiter meeting'));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->RecruiterMeeting->read(null, $id);
		}
		$schools = $this->RecruiterMeeting->School->find('list');
		$employees = $this->RecruiterMeeting->Employee->find('list');
		$this->set(compact('schools', 'employees'));
	}

	function recruit_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(sprintf(__('Invalid id for %s', true), 'recruiter meeting'));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->RecruiterMeeting->delete($id)) {
			$this->Session->setFlash(sprintf(__('%s deleted', true), 'Recruiter meeting'));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(sprintf(__('%s was not deleted', true), 'Recruiter meeting'));
		$this->redirect(array('action' => 'index'));
	}
}
?>