<div class="outcomes form">
<?php echo $this->Form->create('Outcome');?>
	<fieldset>
 		<legend><?php __('Add Outcome'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Outcomes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List People Matches', true), array('controller' => 'people_matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People Match', true), array('controller' => 'people_matches', 'action' => 'add')); ?> </li>
	</ul>
</div>