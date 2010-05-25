<div class="tripPages form">
<?php echo $this->Form->create('TripPage');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Trip Page', true)); ?></legend>
	<?php
		echo $this->Form->input('destination_id');
		echo $this->Form->input('volunteer_type_id');
		echo $this->Form->input('program_type_id');
		echo $this->Form->input('page_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Trip Pages', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Destinations', true)), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Destination', true)), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteer Types', true)), array('controller' => 'volunteer_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer Type', true)), array('controller' => 'volunteer_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Program Types', true)), array('controller' => 'program_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Program Type', true)), array('controller' => 'program_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pages', true)), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Page', true)), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>