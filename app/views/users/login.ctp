<?php
    $session->flash('auth');
    echo $form->create('User', array('action' => 'login'));
    echo $form->input('username');
    echo $form->input('password');
	echo $html->link('Register', array("action" => "register"));
    echo $form->end('Login');
?>
