<div class="baseCombinations index">
	<h2><?php __('Base Combinations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('destination_id');?></th>
			<th><?php echo $this->Paginator->sort('program_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($baseCombinations as $baseCombination):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $baseCombination['BaseCombination']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($baseCombination['Destination']['name'], array('controller' => 'destinations', 'action' => 'view', $baseCombination['Destination']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($baseCombination['Program']['name'], array('controller' => 'programs', 'action' => 'view', $baseCombination['Program']['id'])); ?>
		</td>
		<td><?php echo $baseCombination['BaseCombination']['created']; ?>&nbsp;</td>
		<td><?php echo $baseCombination['BaseCombination']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $baseCombination['BaseCombination']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $baseCombination['BaseCombination']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $baseCombination['BaseCombination']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $baseCombination['BaseCombination']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Base Combination', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Destinations', true)), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Destination', true)), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Programs', true)), array('controller' => 'programs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Program', true)), array('controller' => 'programs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Addon Combinations', true)), array('controller' => 'addon_combinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Addon Combination', true)), array('controller' => 'addon_combinations', 'action' => 'add')); ?> </li>
	</ul>
</div>