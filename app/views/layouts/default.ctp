<?php echo $html->docType("xhtml11"); ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<?php echo $html->charset(); ?>
	<title><?php if(!empty($title_for_layout)){ __($title_for_layout); e(" | "); } __(Configure::read("Software.Name")); ?></title>
	<!-- CSS -->
	<?php echo $html->css('screen', null, array("media" => "screen, projection")); ?>
	<?php echo $html->css('print', null, array("media" => "print")); ?>
	<!--[if lt IE 8]>
		<?php echo $html->css('ie', null, array("media" => "screen, projection")); ?>
	<![endif]-->
	
	<!-- Meta Tags -->
	<?php echo $html->meta('keywords',__('sports, ladder',true));?>
</head>	
<body>
	<div class="container">
		<div id="header">
			<div id="title" class="span-18">
				<h1><?php if(!empty($title_for_layout)){ __($title_for_layout); e(" | "); } __(Configure::read("Software.Name")); ?></h1>
			</div>
			<div id="nav"  class="span-5">
				<?php echo $this->element('nav', array('user_session' => $session->read('Person'))); ?>
			</div>
		</div><!-- Header -->
		
		<hr/>
		
		<div id="content">
			<cake:nocache>
				<?php $session->flash(); ?>
				<?php if($session->check('Message.auth')) { $session->flash('auth'); } ?>
			</cake:nocache>
			<?php e($content_for_layout); ?>
		</div><!-- Content -->
		
		<hr/>
		
		<div id="footer">
			<?php echo $this->element('footer'); ?>
		</div><!-- Footer -->
	</div><!-- Container -->
	<!-- Javascript -->
	<?php echo $html->script("http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"); ?>
	<?php echo $html->script(array("core")); ?>
	<?php echo $this->element('sql_dump'); ?>
	<?php echo $scripts_for_layout; ?>
	<!-- Google Analytics -->
	<script type="text/javascript">
	var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
	document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
	try {
	var pageTracker = _gat._getTracker("UA-15530919-1");
	pageTracker._trackPageview();
	} catch(err) {}</script>
</body>
</html>