<div class="volunteerTypes form">
<?php echo $this->Form->create('VolunteerType');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Volunteer Type', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteer Types', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Trip Pages', true)), array('controller' => 'trip_pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Trip Page', true)), array('controller' => 'trip_pages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Trips', true)), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Trip', true)), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>