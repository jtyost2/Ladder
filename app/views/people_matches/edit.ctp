<div class="peopleMatches form">
<?php echo $this->Form->create('PeopleMatch');?>
	<fieldset>
 		<legend><?php __('Edit People Match'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('people_id', array('type' => 'hidden'));
		echo $this->Form->input('match_id', array('type' => 'hidden'));
		echo $this->Form->input('outcome_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('PeopleMatch.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('PeopleMatch.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List People Matches', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Outcomes', true), array('controller' => 'outcomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Outcome', true), array('controller' => 'outcomes', 'action' => 'add')); ?> </li>
	</ul>
</div>