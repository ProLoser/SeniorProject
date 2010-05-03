<div class="lineItems index">
	<h2><?php __('Line Items');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('booking_id');?></th>
			<th><?php echo $this->Paginator->sort('price_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($lineItems as $lineItem):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $lineItem['LineItem']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($lineItem['Booking']['id'], array('controller' => 'bookings', 'action' => 'view', $lineItem['Booking']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($lineItem['Price']['id'], array('controller' => 'prices', 'action' => 'view', $lineItem['Price']['id'])); ?>
		</td>
		<td><?php echo $lineItem['LineItem']['created']; ?>&nbsp;</td>
		<td><?php echo $lineItem['LineItem']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $lineItem['LineItem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $lineItem['LineItem']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $lineItem['LineItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lineItem['LineItem']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Line Item', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Bookings', true)), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Booking', true)), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Prices', true)), array('controller' => 'prices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Price', true)), array('controller' => 'prices', 'action' => 'add')); ?> </li>
	</ul>
</div>