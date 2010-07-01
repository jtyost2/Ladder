<ul id="nav_menu">
	<li><?php e($html->link(__("Home", true), array('controller'=>'/'))); ?></li>
	<li><?php e($html->link(__("Sports", true), array('controller'=>'sports', 'action' => 'index'))); ?></li>
	<li><?php e($html->link(__("People", true), array('controller'=>'people', 'action' => 'index'))); ?></li>
	<li><?php echo $this->Html->link(__('Roles', true), array('controller' => 'roles', 'action' => 'index')); ?> </li>
	<cake:nocache>
	<?php if(!empty($user_session)){ ?>
		<li><?php e($html->link(__("Log Out", true), array('controller'=>'people', 'action' => 'logout'))); ?></li>
	<?php } else { ?>
		<li><?php e($html->link(__("Log In", true), array('controller'=>'people', 'action' => 'login'))); ?></li>
	<?php } ?>
	</cake:nocache>
</ul>