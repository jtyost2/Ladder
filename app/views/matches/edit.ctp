<div class="matches form">
<?php echo $this->Form->create('Match');?>
	<fieldset>
 		<legend><?php __('Edit Match'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('sport_id');
		echo $this->Form->input('name');
		echo $this->Form->input('date_occured');
		echo $this->Form->input('Person');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Match.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Match.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Sports', true), array('controller' => 'sports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sport', true), array('controller' => 'sports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>