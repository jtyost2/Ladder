<div class="matches view">
<h2><?php  __('Match');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $match['Match']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sport'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($match['Sport']['name'], array('controller' => 'sports', 'action' => 'view', $match['Sport']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $match['Match']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date Occured'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $match['Match']['date_occured']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $match['Match']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $match['Match']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Match', true), array('action' => 'edit', $match['Match']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Match', true), array('action' => 'delete', $match['Match']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $match['Match']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sports', true), array('controller' => 'sports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sport', true), array('controller' => 'sports', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related People');?></h3>
	<?php if (!empty($match['Person'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Role Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($match['Person'] as $person):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $person['id'];?></td>
			<td><?php echo $person['first_name'];?></td>
			<td><?php echo $person['last_name'];?></td>
			<td><?php echo $person['username'];?></td>
			<td><?php echo $person['email'];?></td>
			<td><?php echo $person['password'];?></td>
			<td><?php echo $person['role_id'];?></td>
			<td><?php echo $person['created'];?></td>
			<td><?php echo $person['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'people', 'action' => 'view', $person['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'people', 'action' => 'edit', $person['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'people', 'action' => 'delete', $person['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $person['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Person', true), array('controller' => 'people', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
