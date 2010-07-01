<?php
class PeopleController extends AppController {

	var $name = 'People';
	
	var $uses = array('PeopleSport', 'Person', 'Sport', 'Match', 'Outcome', 'Role');
	
	function beforeFilter(){
		$this->Auth->allow("login", 'logout', 'add');
		parent::beforeFilter();
	}

	function index() {
		$this->Person->recursive = 1;
		$this->set('people', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid person', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('people_matches', $this->PeopleMatch->find('all', array(
			'conditions' => array('outcome.people_id' => $id, 'NOT' => array('Match.id' => null))
		)));
		$this->set('person', $this->Person->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Person->create();
			if ($this->Person->save($this->data)) {
				$this->Session->setFlash(__('The person has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.', true));
			}
		}
		$roles = $this->Person->Role->find('list');
		$sports = $this->Person->Sport->find('list');
		$this->set(compact('roles', 'sports'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid person', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Person->save($this->data)) {
				$this->Session->setFlash(__('The person has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The person could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Person->read(null, $id);
		}
		$roles = $this->Person->Role->find('list');
		$matches = $this->Person->Match->find('list');
		$sports = $this->Person->Sport->find('list');
		$this->set(compact('roles', 'matches', 'sports'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for person', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Person->delete($id)) {
			$this->Session->setFlash(__('Person deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Person was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	/**
	* The AuthComponent provides the needed functionality
	* for login, so you can leave this function blank.
	*/
	function login() {
		Cache::clear();
    	$this->disableCache();
		if ($this->Auth->user()) {
			$this->Session->destroy();
			$this->Session->write('Person', $this->Person->read(null,$this->Auth->user('id')));
		} else {
		}
	}
	function logout() {
		Cache::clear();
    	$this->disableCache();
    	$this->Session->destroy();
		$this->redirect($this->Auth->logout());
	}
}
?>