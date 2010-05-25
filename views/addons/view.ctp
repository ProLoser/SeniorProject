<div class="addons view">
<h2><?php  __('Addon');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $addon['Addon']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $addon['Addon']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $addon['Addon']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $addon['Addon']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $addon['Addon']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Addon', true)), array('action' => 'edit', $addon['Addon']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Addon', true)), array('action' => 'delete', $addon['Addon']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $addon['Addon']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Addons', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Addon', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Addon Combinations', true)), array('controller' => 'addon_combinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Addon Combination', true)), array('controller' => 'addon_combinations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Addon Combinations', true));?></h3>
	<?php if (!empty($addon['AddonCombination'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Trip Id'); ?></th>
		<th><?php __('Addon Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($addon['AddonCombination'] as $addonCombination):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $addonCombination['id'];?></td>
			<td><?php echo $addonCombination['trip_id'];?></td>
			<td><?php echo $addonCombination['addon_id'];?></td>
			<td><?php echo $addonCombination['created'];?></td>
			<td><?php echo $addonCombination['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'addon_combinations', 'action' => 'view', $addonCombination['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'addon_combinations', 'action' => 'edit', $addonCombination['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'addon_combinations', 'action' => 'delete', $addonCombination['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $addonCombination['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Addon Combination', true)), array('controller' => 'addon_combinations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
