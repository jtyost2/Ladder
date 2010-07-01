<?php
class PeopleMatchesController extends AppController {

	var $name = 'PeopleMatches';
	
	var $uses = array('PeopleSport', 'Person', 'Sport', 'Match', 'PeopleMatch', 'Outcome');

	function index() {
		$this->PeopleMatch->recursive = 1;
		$this->set('peopleMatches', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid people match', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('peopleMatch', $this->PeopleMatch->read(null, $id));
	}

	function add($person_id = null) {
		if (!empty($this->data)) {
			$this->PeopleMatch->create();
			$this->Match->create();
			if ($this->Match->save($this->data['Match'])) {
				$people_match = array();
				$added_data = array();
				$added_data['PeopleMatch']['people_id'] = $this->data['PeopleMatch']['person_1_id'];
				$added_data['PeopleMatch']['match_id'] = $this->Match->id;
				$added_data['PeopleMatch']['outcome_id'] = $this->data['PeopleMatch']['outcome_id'];
				$people_match[] = $added_data;
				
				$added_data['PeopleMatch']['people_id'] = $this->data['PeopleMatch']['person_2_id'];
				$added_data['PeopleMatch']['match_id'] = $this->Match->id;
				$added_data['PeopleMatch']['outcome_id'] = $this->data['PeopleMatch']['outcome_id'];
				$people_match[] = $added_data;
				if ($this->PeopleMatch->saveAll($people_match)) {
					$this->Session->setFlash(__('The people match has been saved', true));
					$this->redirect(array('controller' => 'people', 'action' => 'index'));
				} else {
					$this->Session->setFlash(__('The people match could not be saved. Please, try again.', true));
				}
			} else {
				$this->Session->setFlash(__('The people match could not be saved. Please, try again.', true));
			}
		}
		$this->set('first_person_id', $person_id);
		$this->set('people', $people = $this->Person->find('list', array(
			'fields' => array('Person.id', 'Person.name'),
			'conditions' => array('NOT' => array('Person.id' => $person_id))
		)));
		$this->set('sports', $this->Sport->find('list', array(
			'fields' => array('Sport.id', 'Sport.name'),
			'conditions' => array('Sport.id' => $this->PeopleSport->find_sports_by_person($person_id))
		)));
		$this->set('outcomes', $this->Outcome->find('list', array(
			'fields' => array('Outcome.id', 'Outcome.name')
		)));
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
		$this->set('outcomes', $this->Outcome->find('list', array(
			'fields' => array('Outcome.id', 'Outcome.name')
		)));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for people match', true));
			$this->redirect($this->referer(array('action' => 'index')));
		}
		if ($this->PeopleMatch->delete($id)) {
			$this->Session->setFlash(__('People match deleted', true));
			$this->redirect($this->referer(array('action' => 'index')));
		}
		$this->Session->setFlash(__('People match was not deleted', true));
		$this->redirect($this->referer(array('action' => 'index')));
	}
}
?>