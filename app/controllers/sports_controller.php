<?php
class SportsController extends AppController {

	var $name = 'Sports';

	function index() {
		$this->Sport->recursive = 0;
		$this->set('sports', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid sport', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->Sport->Behaviors->attach('Containable');
		$this->Sport->contain(array("Match" => array("Outcome" => "Person")));
		$this->set('sport', $this->Sport->read(null, $id));
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