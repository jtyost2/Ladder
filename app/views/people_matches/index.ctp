<div class="peopleMatches index">
	<h2><?php __('People Matches');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('people_id');?></th>
			<th><?php echo $this->Paginator->sort('match_id');?></th>
			<th><?php echo $this->Paginator->sort('outcome_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($peopleMatches as $peopleMatch):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $peopleMatch['PeopleMatch']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($peopleMatch['People']['id'], array('controller' => 'people', 'action' => 'view', $peopleMatch['People']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($peopleMatch['Match']['name'], array('controller' => 'matches', 'action' => 'view', $peopleMatch['Match']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($peopleMatch['Outcome']['name'], array('controller' => 'outcomes', 'action' => 'view', $peopleMatch['Outcome']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $peopleMatch['PeopleMatch']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $peopleMatch['PeopleMatch']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $peopleMatch['PeopleMatch']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $peopleMatch['PeopleMatch']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New People Match', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Outcomes', true), array('controller' => 'outcomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Outcome', true), array('controller' => 'outcomes', 'action' => 'add')); ?> </li>
	</ul>
</div>