<?php
class SportsController extends AppController {

	var $name = 'Sports';
	var $uses = array("Sport", "Person");
	var $permissions = array(
       'index' => '*', //everybody can access this action
       'view' => '*',
	   'add' => 'admin',
	   'edit' => 'admin',
	   'delete' => 'admin'
	);

	function index() {
		$this->Sport->recursive = 0;
		$this->set('sports', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sport', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Sport->recursive = 0;
		$this->Person->recursive = 0;
		$data = $this->Person->find('all', array("fields" => array("CONCAT(Person.first_name,' ',Person.last_name) AS name", 
														"Person.id"),
													'joins' => array(
												 	array(
											            'table' => 'people_sports',
											            'alias' => 'PeopleSports',
											            'type' => 'left',
											            'foreignKey' => false,
											            'conditions'=> array('PeopleSports.people_id = Person.id'))
													), 'conditions' => array("PeopleSports.sports_id" => $id)));
		
		$people = array();
		foreach($data as $d)
			$people[$d['Person']['id']] = $d[0]['name'];
					
		$data  = $this->Sport->find('all', array("fields" => array(
													"count(*) AS count", 
													"Outcome.description",
													"Outcome.people_id",
													"Person.first_name", "Person.last_name"
												 ),'joins' => array(
												 	array(
											            'table' => 'matches',
											            'alias' => 'Match',
											            'type' => 'left',
											            'foreignKey' => false,
											            'conditions'=> array('Match.sport_id = Sport.id')
											        ), 
											        array(
											            'table' => 'outcomes',
											            'alias' => 'Outcome',
											            'type' => 'left',
											            'foreignKey' => false,
											            'conditions'=> array('Outcome.match_id = Match.id')
											        ),
													array(
											            'table' => 'people',
											            'alias' => 'Person',
											            'type' => 'left',
											            'foreignKey' => false,
											            'conditions'=> array('Person.id = outcome.people_id')
											        ), 
												),
												 "conditions" => array("Sport.id" => $id),
												 "group" => array("Outcome.description", "outcome.people_id")));
				
		
		$template = array("w" => 0, "l" => 0, "t" => 0, "score" => 0, "total" => 0);
		$stats = array_fill_keys(array_keys($people), $template);
		$stats_score =  array_fill_keys(array_keys($people), 0);

		foreach($data as $k => $d){
			$pid = $d['Outcome']['people_id'];
			$stats[$pid][$d['Outcome']['description']] = $d[0]['count'];
			$stats[$pid]['total'] = (isset($stats[$pid]['total']) ? $stats[$pid]['total'] : 0)+$d[0]['count'];
			$stats[$pid]['score'] = ((isset($stats[$pid]['w']) ? $stats[$pid]['w'] : 0)+
					  (isset($stats[$pid]['t']) ? $stats[$pid]['t'] : 0)*.5+
					  (isset($stats[$pid]['l']) ? $stats[$pid]['l'] : 0)*.25)/
					  $stats[$pid]['total'];
			$stats[$pid]['people_id'] = $pid;
			$stats_score[$pid] = $stats[$pid]['score'];
			unset($data[$k]);
		}
		/*foreach($stats as $k => $s){
			$stats_wins[$k] = isset($s['w']) ? $s['w'] : 0;
			$stats_total[$k] = isset($s['total']) ? $s['total'] : 0;
			$stats_score[$k] = isset($s['score']) ? $s['score'] : 0;	
		}*/
		arsort($stats_score);
			
		$this->set('sport', $this->Sport->read('', $id));
		$this->set('rankings', $stats_score);
		$this->set('stats', $stats);
		$this->set('people', $people);
	}

	function add() {
		if (!empty($this->data)) {
			$this->Sport->create();
			if ($this->Sport->save($this->data)) {
				$this->Session->setFlash(__('The sport has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sport could not be saved. Please, try again.', true));
			}
		}
		$people = $this->Sport->Person->find('list');
		$this->set(compact('people'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid sport', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Sport->save($this->data)) {
				$this->Session->setFlash(__('The sport has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The sport could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Sport->read(null, $id);
		}
		$people = $this->Sport->Person->find('list');
		$this->set(compact('people'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for sport', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Sport->delete($id)) {
			$this->Session->setFlash(__('Sport deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Sport was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>