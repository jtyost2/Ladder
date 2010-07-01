<div class="peopleMatches form">
<?php echo $this->Form->create('PeopleMatch');?>
	<fieldset>
 		<legend><?php __('Add People Match'); ?></legend>
	<?php
		echo $this->Form->input('PeopleMatch.person_1_id', array('type' => 'hidden', 'value' => $first_person_id));
		echo $this->Form->input('PeopleMatch.person_2_id', array('label' => 'Competitor', 'options' => $people));
		echo $this->Form->input('Match.sport_id');
		echo $this->Form->input('Match.name');
		echo $this->Form->input('Match.date_occured');
		echo $this->Form->input('PeopleMatch.outcome_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List People Matches', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Outcomes', true), array('controller' => 'outcomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Outcome', true), array('controller' => 'outcomes', 'action' => 'add')); ?> </li>
	</ul>
</div>