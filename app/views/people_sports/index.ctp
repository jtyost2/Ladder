<div class="peopleSports index">
	<h2><?php __('People Sports');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('people_id');?></th>
			<th><?php echo $this->Paginator->sort('sports_id');?></th>
			<th><?php echo $this->Paginator->sort('person_title');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($peopleSports as $peopleSport):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $peopleSport['PeopleSport']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($peopleSport['People']['id'], array('controller' => 'people', 'action' => 'view', $peopleSport['People']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($peopleSport['Sports']['name'], array('controller' => 'sports', 'action' => 'view', $peopleSport['Sports']['id'])); ?>
		</td>
		<td><?php echo $peopleSport['PeopleSport']['person_title']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $peopleSport['PeopleSport']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $peopleSport['PeopleSport']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $peopleSport['PeopleSport']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $peopleSport['PeopleSport']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New People Sport', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sports', true), array('controller' => 'sports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sports', true), array('controller' => 'sports', 'action' => 'add')); ?> </li>
	</ul>
</div>