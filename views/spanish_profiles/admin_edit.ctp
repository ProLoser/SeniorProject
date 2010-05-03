<div class="spanishProfiles form">
<?php echo $this->Form->create('SpanishProfile');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Spanish Profile', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('proficiency_level');
		echo $this->Form->input('homestay');
		echo $this->Form->input('volunteer_id');
		echo $this->Form->input('booking_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('SpanishProfile.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SpanishProfile.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Spanish Profiles', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Bookings', true)), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Booking', true)), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
	</ul>
</div>