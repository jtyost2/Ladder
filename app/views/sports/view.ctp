<div class="sports view">
<h2><?php  __('Sport');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
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
<table>
	<tr>
		<th>Rank</th>
		<th>Name</th>
		<th colspan="3">Record</th>
		<th>Score</th>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>W</td>
		<td>L</td>
		<td>T</td>
		<td></td>
	</tr>
	<?php $i=1; foreach($rankings as $k => $p):?>
	<tr>
		<td><?php echo $i;?></td>
		<td><?php echo $people[$k];?></td>
		<td><?php echo isset($stats[$k]['w']) ? $stats[$k]['w'] : 0;?></td>
		<td><?php echo isset($stats[$k]['l']) ? $stats[$k]['l'] : 0;?></td>
		<td><?php echo isset($stats[$k]['t']) ? $stats[$k]['t'] : 0;?></td>
		<td><?php echo isset($stats[$k]['score']) ? $stats[$k]['score'] : 0;?></td>
	</tr>
	<?php $i++; endforeach;?>
</table>