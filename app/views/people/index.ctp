<div class="people index">
	<h2><?php __('People');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('username');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('role_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($people as $person):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $person['People']['id']; ?>&nbsp;</td>
		<td><?php echo $person['People']['first_name']; ?>&nbsp;</td>
		<td><?php echo $person['People']['last_name']; ?>&nbsp;</td>
		<td><?php echo $person['People']['username']; ?>&nbsp;</td>
		<td><?php echo $person['People']['email']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($roles[$person['People']['role_id']], array('controller' => 'roles', 'action' => 'view', $person['People']['role_id'])); ?>
		</td>
		<td><?php echo $time->timeAgoInWords($person['People']['created']); ?>&nbsp;</td>
		<td><?php echo $time->timeAgoInWords($person['People']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $person['People']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $person['People']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $person['People']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $person['People']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Add a New Person', true), array('action' => 'add')); ?></li>
	</ul>
</div>