<div class="sports view">
<h2><?php  __('Sport');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sport['Sport']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sport['Sport']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $sport['Sport']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sport', true), array('action' => 'edit', $sport['Sport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Sport', true), array('action' => 'delete', $sport['Sport']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $sport['Sport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Sports', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sport', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Matches', true), array('controller' => 'matches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Person', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Matches');?></h3>
	<?php if (!empty($sport['Match'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Sport Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Date Occured'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($sport['Match'] as $match):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $match['id'];?></td>
			<td><?php echo $match['sport_id'];?></td>
			<td><?php echo $match['name'];?></td>
			<td><?php echo $match['date_occured'];?></td>
			<td><?php echo $match['created'];?></td>
			<td><?php echo $match['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'matches', 'action' => 'view', $match['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'matches', 'action' => 'edit', $match['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'matches', 'action' => 'delete', $match['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $match['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Match', true), array('controller' => 'matches', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related People');?></h3>
	<?php if (!empty($sport['Person'])):?>
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
		foreach ($sport['Person'] as $person):
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
