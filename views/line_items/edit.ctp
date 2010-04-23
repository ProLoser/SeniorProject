<div class="lineItems form">
<?php echo $this->Form->create('LineItem');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Line Item', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('booking_id');
		echo $this->Form->input('price_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('LineItem.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('LineItem.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Line Items', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Bookings', true)), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Booking', true)), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Prices', true)), array('controller' => 'prices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Price', true)), array('controller' => 'prices', 'action' => 'add')); ?> </li>
	</ul>
</div>