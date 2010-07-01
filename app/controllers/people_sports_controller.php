<?php
class PeopleSportsController extends AppController {

	var $name = 'PeopleSports';
	
	var $uses = array('PeopleSport', 'Person', 'Sport');

	function index() {
		$this->PeopleSport->recursive = 0;
		$this->set('peopleSports', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid people sport', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('peopleSport', $this->PeopleSport->read(null, $id));
	}

	function add($person_id = null) {
		if (!empty($this->data)) {
			$this->PeopleSport->create();
			if ($this->PeopleSport->save($this->data)) {
				$this->Session->setFlash(__('The people sport has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people sport could not be saved. Please, try again.', true));
			}
		}
		$this->set('person_id', $person_id);
		$this->set('sports', $this->Sport->find('list'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid people sport', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->PeopleSport->save($this->data)) {
				$this->Session->setFlash(__('The people sport has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The people sport could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->PeopleSport->read(null, $id);
		}
		$people = $this->PeopleSport->Person->find('list');
		$sports = $this->PeopleSport->Sport->find('list');
		$this->set(compact('people', 'sports'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for people sport', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->PeopleSport->delete($id)) {
			$this->Session->setFlash(__('People sport deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('People sport was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>