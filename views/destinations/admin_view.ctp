<div class="destinations view">
<h2><?php  __('Destination');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $destination['Destination']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $destination['Destination']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $destination['Destination']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $destination['Destination']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $destination['Destination']['description']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Destination', true)), array('action' => 'edit', $destination['Destination']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Destination', true)), array('action' => 'delete', $destination['Destination']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $destination['Destination']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Destinations', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Destination', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Base Combinations', true)), array('controller' => 'base_combinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Base Combination', true)), array('controller' => 'base_combinations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Base Combinations', true));?></h3>
	<?php if (!empty($destination['BaseCombination'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Destination Id'); ?></th>
		<th><?php __('Program Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($destination['BaseCombination'] as $baseCombination):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $baseCombination['id'];?></td>
			<td><?php echo $baseCombination['destination_id'];?></td>
			<td><?php echo $baseCombination['program_id'];?></td>
			<td><?php echo $baseCombination['created'];?></td>
			<td><?php echo $baseCombination['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'base_combinations', 'action' => 'view', $baseCombination['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'base_combinations', 'action' => 'edit', $baseCombination['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'base_combinations', 'action' => 'delete', $baseCombination['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseCombination['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Base Combination', true)), array('controller' => 'base_combinations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
