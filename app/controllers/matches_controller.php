<?php
class MatchesController extends AppController {

	var $name = 'Matches';
	
	var $uses = array('PeopleSport', 'Person', 'Sport', 'Match', 'Outcome');
	var $permissions = array(
       'index' => '*', //everybody can access this action
       'view' => '*',
	   'add' => array('user', 'admin'),
	   'delete' => array('admin'),
	);

	function index() {
		$this->Match->recursive = 0;
		$this->set('matches', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid match', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('match', $this->Match->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Match->create();
			if ($this->Match->save($this->data)) {
				$this->Session->setFlash(__('The match has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The match could not be saved. Please, try again.', true));
			}
		}
		$sports = $this->Match->Sport->find('list');
		$people = $this->Match->Person->find('list');
		$this->set(compact('sports', 'people'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid match', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Match->save($this->data)) {
				$this->Session->setFlash(__('The match has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The match could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Match->read(null, $id);
		}
		$sports = $this->Sport->find('list');
		$this->set(compact('sports'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for match', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Match->delete($id)) {
			$this->Session->setFlash(__('Match deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Match was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>