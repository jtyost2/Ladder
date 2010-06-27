<div class="peopleMatches view">
<h2><?php  __('People Match');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $peopleMatch['PeopleMatch']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('People'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($peopleMatch['People']['id'], array('controller' => 'people', 'action' => 'view', $peopleMatch['People']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Match'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($peopleMatch['Match']['name'], array('controller' => 'matches', 'action' => 'view', $peopleMatch['Match']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Outcome'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($peopleMatch['Outcome']['name'], array('controller' => 'outcomes', 'action' => 'view', $peopleMatch['Outcome']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit People Match', true), array('action' => 'edit', $peopleMatch['PeopleMatch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete People Match', true), array('action' => 'delete', $peopleMatch['PeopleMatch']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $peopleMatch['PeopleMatch']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People Matches', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People Match', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Outcomes', true), array('controller' => 'outcomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Outcome', true), array('controller' => 'outcomes', 'action' => 'add')); ?> </li>
	</ul>
</div>
