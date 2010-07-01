<ul id="nav_menu">
	<li><?php e($html->link(__("Home", true), array('controller'=>'/'))); ?></li>
	<li><?php e($html->link(__("About", true), array('controller'=>'pages', 'action' => 'about'))); ?></li>
	<li><?php e($html->link(__("Sports", true), array('controller'=>'sports', 'action' => 'index'))); ?></li>
	<cake:nocache>
	<?php if(!empty($user_session)){ ?>
		<li><?php e($html->link(__("Log Out", true), array('controller'=>'users', 'action' => 'logout'))); ?></li>
	<?php } else { ?>
		<li><?php e($html->link(__("Log In", true), array('controller'=>'/'))); ?></li>
	<?php } ?>
	</cake:nocache>
</ul>