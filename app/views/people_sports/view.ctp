<div class="peopleSports view">
<h2><?php  __('People Sport');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $peopleSport['PeopleSport']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('People'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($peopleSport['People']['id'], array('controller' => 'people', 'action' => 'view', $peopleSport['People']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sports'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($peopleSport['Sports']['name'], array('controller' => 'sports', 'action' => 'view', $peopleSport['Sports']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Person Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $peopleSport['PeopleSport']['person_title']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit People Sport', true), array('action' => 'edit', $peopleSport['PeopleSport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete People Sport', true), array('action' => 'delete', $peopleSport['PeopleSport']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $peopleSport['PeopleSport']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List People Sports', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People Sport', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List People', true), array('controller' => 'people', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New People', true), array('controller' => 'people', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sports', true), array('controller' => 'sports', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sports', true), array('controller' => 'sports', 'action' => 'add')); ?> </li>
	</ul>
</div>
