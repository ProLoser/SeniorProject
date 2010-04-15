<div class="spanishProfiles index">
	<h2><?php __('Spanish Profiles');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('proficiency_level');?></th>
			<th><?php echo $this->Paginator->sort('homestay');?></th>
			<th><?php echo $this->Paginator->sort('volunteer_id');?></th>
			<th><?php echo $this->Paginator->sort('booking_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($spanishProfiles as $spanishProfile):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $spanishProfile['SpanishProfile']['id']; ?>&nbsp;</td>
		<td><?php echo $spanishProfile['SpanishProfile']['proficiency_level']; ?>&nbsp;</td>
		<td><?php echo $spanishProfile['SpanishProfile']['homestay']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($spanishProfile['Volunteer']['id'], array('controller' => 'volunteers', 'action' => 'view', $spanishProfile['Volunteer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($spanishProfile['Booking']['id'], array('controller' => 'bookings', 'action' => 'view', $spanishProfile['Booking']['id'])); ?>
		</td>
		<td><?php echo $spanishProfile['SpanishProfile']['created']; ?>&nbsp;</td>
		<td><?php echo $spanishProfile['SpanishProfile']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $spanishProfile['SpanishProfile']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $spanishProfile['SpanishProfile']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $spanishProfile['SpanishProfile']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $spanishProfile['SpanishProfile']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Spanish Profile', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Bookings', true)), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Booking', true)), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>