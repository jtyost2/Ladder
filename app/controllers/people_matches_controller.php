<?php
class PeopleMatchesController extends AppController {

	var $name = 'PeopleMatches';

	function index() {
		$this->PeopleMatch->recursive = 0;
		$this->set('peopleMatches', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid people match', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('peopleMatch', $this->PeopleMatch->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->PeopleMatch->create();
			if ($this->PeopleMatch->save($this->data)) {
				$this->Session->setFlash(__('The people match has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people match could not be saved. Please, try again.', true));
			}
		}
		$people = $this->PeopleMatch->Person->find('list');
		$matches = $this->PeopleMatch->Match->find('list');
		$outcomes = $this->PeopleMatch->Outcome->find('list');
		$this->set(compact('people', 'matches', 'outcomes'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid people match', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PeopleMatch->save($this->data)) {
				$this->Session->setFlash(__('The people match has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people match could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PeopleMatch->read(null, $id);
		}
		$people = $this->PeopleMatch->Person->find('list');
		$matches = $this->PeopleMatch->Match->find('list');
		$outcomes = $this->PeopleMatch->Outcome->find('list');
		$this->set(compact('people', 'matches', 'outcomes'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for people match', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PeopleMatch->delete($id)) {
			$this->Session->setFlash(__('People match deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('People match was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>