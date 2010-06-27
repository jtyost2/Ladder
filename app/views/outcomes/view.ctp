<div class="outcomes view">
<h2><?php  __('Outcome');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $outcome['Outcome']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $outcome['Outcome']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $outcome['Outcome']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Outcome', true), array('action' => 'edit', $outcome['Outcome']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Outcome', true), array('action' => 'delete', $outcome['Outcome']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $outcome['Outcome']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Outcomes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Outcome', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People Matches', true), array('controller' => 'people_matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People Match', true), array('controller' => 'people_matches', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related People Matches');?></h3>
	<?php if (!empty($outcome['PeopleMatch'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('People Id'); ?></th>
		<th><?php __('Match Id'); ?></th>
		<th><?php __('Outcome Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($outcome['PeopleMatch'] as $peopleMatch):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $peopleMatch['id'];?></td>
			<td><?php echo $peopleMatch['people_id'];?></td>
			<td><?php echo $peopleMatch['match_id'];?></td>
			<td><?php echo $peopleMatch['outcome_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'people_matches', 'action' => 'view', $peopleMatch['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'people_matches', 'action' => 'edit', $peopleMatch['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'people_matches', 'action' => 'delete', $peopleMatch['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $peopleMatch['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New People Match', true), array('controller' => 'people_matches', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
