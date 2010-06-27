<div class="peopleSports form">
<?php echo $this->Form->create('PeopleSport');?>
	<fieldset>
 		<legend><?php __('Edit People Sport'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('people_id');
		echo $this->Form->input('sports_id');
		echo $this->Form->input('person_title');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('PeopleSport.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('PeopleSport.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List People Sports', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sports', true), array('controller' => 'sports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sports', true), array('controller' => 'sports', 'action' => 'add')); ?> </li>
	</ul>
</div>