<div class="addonCombinations index">
	<h2><?php __('Addon Combinations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('base_combination_id');?></th>
			<th><?php echo $this->Paginator->sort('addon_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($addonCombinations as $addonCombination):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $addonCombination['AddonCombination']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($addonCombination['BaseCombination']['id'], array('controller' => 'base_combinations', 'action' => 'view', $addonCombination['BaseCombination']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($addonCombination['Addon']['name'], array('controller' => 'addons', 'action' => 'view', $addonCombination['Addon']['id'])); ?>
		</td>
		<td><?php echo $addonCombination['AddonCombination']['created']; ?>&nbsp;</td>
		<td><?php echo $addonCombination['AddonCombination']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $addonCombination['AddonCombination']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $addonCombination['AddonCombination']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $addonCombination['AddonCombination']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $addonCombination['AddonCombination']['id'])); ?>
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
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Addon Combination', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Base Combinations', true)), array('controller' => 'base_combinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Base Combination', true)), array('controller' => 'base_combinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Addons', true)), array('controller' => 'addons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Addon', true)), array('controller' => 'addons', 'action' => 'add')); ?> </li>
	</ul>
</div>