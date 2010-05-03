<div class="donations form">
<?php echo $this->Form->create('Donation');?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Donation', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('amount');
		echo $this->Form->input('reason');
		echo $this->Form->input('volunteer_name');
		echo $this->Form->input('payment_id');
		echo $this->Form->input('booking_id');
		echo $this->Form->input('volunteer_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Donations', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Bookings', true)), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Booking', true)), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
	</ul>
</div>