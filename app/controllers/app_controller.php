<?php
	class AppController extends Controller {
		var $components = array("Auth");
				
		function beforeFilter(){
			$this->Auth->userModel = "Person";
			$this->Auth->loginRedirect = '/';
			$this->Auth->allow("/");
		}		
	}
?>