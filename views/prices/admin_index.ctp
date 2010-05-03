<div class="prices index">
	<h2><?php __('Prices');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('foreign_id');?></th>
			<th><?php echo $this->Paginator->sort('foreign_model');?></th>
			<th><?php echo $this->Paginator->sort('location_id');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('hidden');?></th>
			<th><?php echo $this->Paginator->sort('active');?></th>
			<th><?php echo $this->Paginator->sort('expires');?></th>
			<th><?php echo $this->Paginator->sort('activates');?></th>
			<th><?php echo $this->Paginator->sort('original_slots_available');?></th>
			<th><?php echo $this->Paginator->sort('current_slots_available');?></th>
			<th><?php echo $this->Paginator->sort('line_item_count');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($prices as $price):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $price['Price']['id']; ?>&nbsp;</td>
		<td><?php echo $price['Price']['foreign_id']; ?>&nbsp;</td>
		<td><?php echo $price['Price']['foreign_model']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($price['Location']['name'], array('controller' => 'locations', 'action' => 'view', $price['Location']['id'])); ?>
		</td>
		<td><?php echo $price['Price']['price']; ?>&nbsp;</td>
		<td><?php echo $price['Price']['created']; ?>&nbsp;</td>
		<td><?php echo $price['Price']['modified']; ?>&nbsp;</td>
		<td><?php echo $price['Price']['hidden']; ?>&nbsp;</td>
		<td><?php echo $price['Price']['active']; ?>&nbsp;</td>
		<td><?php echo $price['Price']['expires']; ?>&nbsp;</td>
		<td><?php echo $price['Price']['activates']; ?>&nbsp;</td>
		<td><?php echo $price['Price']['original_slots_available']; ?>&nbsp;</td>
		<td><?php echo $price['Price']['current_slots_available']; ?>&nbsp;</td>
		<td><?php echo $price['Price']['line_item_count']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $price['Price']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $price['Price']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $price['Price']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $price['Price']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Price', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Locations', true)), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Location', true)), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Line Items', true)), array('controller' => 'line_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Line Item', true)), array('controller' => 'line_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pages', true)), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Page', true)), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>