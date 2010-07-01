<div class="people form">
<?php echo $this->Form->create('Person');?>
	<fieldset>
 		<legend><?php __('Add Person'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('username');
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('role_id', array('value' => 2, 'type' => 'hidden'));
		echo $this->Form->input('Sport');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>