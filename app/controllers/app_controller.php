<?php
	class AppController extends Controller {
		var $components = array("Auth", 'Session', 'RequestHandler');
		
		var $helpers = array('Html', 'Form', 'Session', 'Time', 'TimeExtended');
		
		function beforeRender() {
			//If the Session is not valid, renew it
			if (!$this->Session->valid()) {
				$this->Session->renew();
			}
		}
		
		function beforeFilter(){
			//Allow displaying of pages
			$this->Auth->allow('display');
			
			//Set the fields for authenication
			$this->Auth->fields  = array(
            	'username'=>'username', //The field the user logs in with (eg. username)
            	'password' =>'password' //The password field
       		);
       		$this->Auth->loginError = __("Invalid username or password.", true);
			
			$this->Auth->userModel = "Person";
			$this->Auth->loginRedirect = '/';
			$this->Auth->logoutRedirect = array('controller' => 'people', 'action' => 'login');
			$this->Auth->authorize = 'controller';
			
			//Set the currentUser object to the Auth->user()
			$this->currentUser = $this->Auth->user();
			$this->Session->write('User', $this->currentUser);
		}
		
		function isAuthorized(){
			return true;
            //If User is an admin always allow access
       		if($this->Session->read('User.role') == 'admin'): return true; endif;
       		//if permissions exist for the action, validate permissions
       		if(!empty($this->permissions[$this->action])){
               //If permissions are set to '*' or all user roles return true
           		if($this->permissions[$this->action] == '*') return true;
           		//If Permissions set in the array is equal to the user's role return true
           			if(in_array($this->Session->read('User.role'), (array)$this->permissions[$this->action])) return true;
       		}
       		//Set the flass to display a permissions error and return false
       		$this->Session->setFlash(__('You do not have permission to access this.', true));
       		return false;
   		}		
	}
?>