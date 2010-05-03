<div class="bookings view">
<h2><?php  __('Booking');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $booking['Booking']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Volunteer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($booking['Volunteer']['id'], array('controller' => 'volunteers', 'action' => 'view', $booking['Volunteer']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Accepted'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $booking['Booking']['accepted']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $booking['Booking']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $booking['Booking']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Payment Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $booking['Booking']['payment_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Paid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $booking['Booking']['paid']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cancelled'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $booking['Booking']['cancelled']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Line Item Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $booking['Booking']['line_item_count']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Booking', true)), array('action' => 'edit', $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Booking', true)), array('action' => 'delete', $booking['Booking']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $booking['Booking']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Bookings', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Booking', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Donations', true)), array('controller' => 'donations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Donation', true)), array('controller' => 'donations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ecuador Profiles', true)), array('controller' => 'ecuador_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ecuador Profile', true)), array('controller' => 'ecuador_profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Line Items', true)), array('controller' => 'line_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Line Item', true)), array('controller' => 'line_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Spanish Profiles', true)), array('controller' => 'spanish_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Spanish Profile', true)), array('controller' => 'spanish_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Donations', true));?></h3>
	<?php if (!empty($booking['Donation'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Amount'); ?></th>
		<th><?php __('Reason'); ?></th>
		<th><?php __('Volunteer Name'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Payment Id'); ?></th>
		<th><?php __('Booking Id'); ?></th>
		<th><?php __('Volunteer Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($booking['Donation'] as $donation):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $donation['id'];?></td>
			<td><?php echo $donation['name'];?></td>
			<td><?php echo $donation['description'];?></td>
			<td><?php echo $donation['amount'];?></td>
			<td><?php echo $donation['reason'];?></td>
			<td><?php echo $donation['volunteer_name'];?></td>
			<td><?php echo $donation['created'];?></td>
			<td><?php echo $donation['modified'];?></td>
			<td><?php echo $donation['payment_id'];?></td>
			<td><?php echo $donation['booking_id'];?></td>
			<td><?php echo $donation['volunteer_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'donations', 'action' => 'view', $donation['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'donations', 'action' => 'edit', $donation['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'donations', 'action' => 'delete', $donation['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $donation['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Donation', true)), array('controller' => 'donations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Ecuador Profiles', true));?></h3>
	<?php if (!empty($booking['EcuadorProfile'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Volunteer Id'); ?></th>
		<th><?php __('Booking Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($booking['EcuadorProfile'] as $ecuadorProfile):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ecuadorProfile['id'];?></td>
			<td><?php echo $ecuadorProfile['volunteer_id'];?></td>
			<td><?php echo $ecuadorProfile['booking_id'];?></td>
			<td><?php echo $ecuadorProfile['created'];?></td>
			<td><?php echo $ecuadorProfile['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'ecuador_profiles', 'action' => 'view', $ecuadorProfile['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'ecuador_profiles', 'action' => 'edit', $ecuadorProfile['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'ecuador_profiles', 'action' => 'delete', $ecuadorProfile['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ecuadorProfile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ecuador Profile', true)), array('controller' => 'ecuador_profiles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Line Items', true));?></h3>
	<?php if (!empty($booking['LineItem'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Booking Id'); ?></th>
		<th><?php __('Price Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($booking['LineItem'] as $lineItem):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $lineItem['id'];?></td>
			<td><?php echo $lineItem['booking_id'];?></td>
			<td><?php echo $lineItem['price_id'];?></td>
			<td><?php echo $lineItem['created'];?></td>
			<td><?php echo $lineItem['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'line_items', 'action' => 'view', $lineItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'line_items', 'action' => 'edit', $lineItem['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'line_items', 'action' => 'delete', $lineItem['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $lineItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Line Item', true)), array('controller' => 'line_items', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Spanish Profiles', true));?></h3>
	<?php if (!empty($booking['SpanishProfile'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Proficiency Level'); ?></th>
		<th><?php __('Homestay'); ?></th>
		<th><?php __('Volunteer Id'); ?></th>
		<th><?php __('Booking Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($booking['SpanishProfile'] as $spanishProfile):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $spanishProfile['id'];?></td>
			<td><?php echo $spanishProfile['proficiency_level'];?></td>
			<td><?php echo $spanishProfile['homestay'];?></td>
			<td><?php echo $spanishProfile['volunteer_id'];?></td>
			<td><?php echo $spanishProfile['booking_id'];?></td>
			<td><?php echo $spanishProfile['created'];?></td>
			<td><?php echo $spanishProfile['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'spanish_profiles', 'action' => 'view', $spanishProfile['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'spanish_profiles', 'action' => 'edit', $spanishProfile['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'spanish_profiles', 'action' => 'delete', $spanishProfile['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $spanishProfile['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Spanish Profile', true)), array('controller' => 'spanish_profiles', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
