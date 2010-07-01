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
			
			//Set the currentUser object to the Auth->user()
			$this->currentUser = $this->Auth->user();
		}		
	}
?>