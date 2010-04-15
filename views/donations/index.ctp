<div class="donations index">
	<h2><?php __('Donations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th><?php echo $this->Paginator->sort('reason');?></th>
			<th><?php echo $this->Paginator->sort('volunteer_name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('payment_sid');?></th>
			<th><?php echo $this->Paginator->sort('booking_id');?></th>
			<th><?php echo $this->Paginator->sort('volunteer_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($donations as $donation):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $donation['Donation']['id']; ?>&nbsp;</td>
		<td><?php echo $donation['Donation']['name']; ?>&nbsp;</td>
		<td><?php echo $donation['Donation']['description']; ?>&nbsp;</td>
		<td><?php echo $donation['Donation']['amount']; ?>&nbsp;</td>
		<td><?php echo $donation['Donation']['reason']; ?>&nbsp;</td>
		<td><?php echo $donation['Donation']['volunteer_name']; ?>&nbsp;</td>
		<td><?php echo $donation['Donation']['created']; ?>&nbsp;</td>
		<td><?php echo $donation['Donation']['modified']; ?>&nbsp;</td>
		<td><?php echo $donation['Donation']['payment_sid']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($donation['Booking']['id'], array('controller' => 'bookings', 'action' => 'view', $donation['Booking']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($donation['Volunteer']['id'], array('controller' => 'volunteers', 'action' => 'view', $donation['Volunteer']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $donation['Donation']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $donation['Donation']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $donation['Donation']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $donation['Donation']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Donation', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Bookings', true)), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Booking', true)), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
	</ul>
</div>