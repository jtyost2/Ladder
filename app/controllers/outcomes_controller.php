<?php
class OutcomesController extends AppController {

	var $name = 'Outcomes';
	var $permissions = array(
       'index' => '*', //everybody can access this action
       'view' => '*',
	   'add' => array('user', 'admin'),
	   'edit' => array('admin'),
	   'delete' => array('admin')
	);
	
	function index() {
		$this->Outcome->recursive = 0;
		$this->set('outcomes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid outcome', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('outcome', $this->Outcome->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Outcome->create();
			if ($this->Outcome->save($this->data)) {
				$this->Session->setFlash(__('The outcome has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The outcome could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid outcome', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Outcome->save($this->data)) {
				$this->Session->setFlash(__('The outcome has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The outcome could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Outcome->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for outcome', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Outcome->delete($id)) {
			$this->Session->setFlash(__('Outcome deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Outcome was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>