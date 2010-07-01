<?php
class UsersController extends AppController {

	var $name = 'Users';
	var $permissions = array(
       'login' => '*', //everybody can access this action
       'logout' => '*',
	   'register' => '*'
	);
	
	function beforeFilter(){
		$this->Auth->allow(array('login', 'logout', 'register'));
	}
    /**
	* The AuthComponent provides the needed functionality
	* for login, so you can leave this function blank.
	*/
	function login() {
	}
	function logout() {
	$this->redirect($this->Auth->logout());
	}
	
	function register() {
        if (!empty($this->data)) {
            if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['password_confirm'])) {
                $this->User->create();
				$this->User->role_id=1;
                $this->User->save($this->data);
                $this->redirect(array('controller' => 'sports', 'action' => 'index'));
            }
        }
    }
}
?>