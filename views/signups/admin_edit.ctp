<div class="signups form">
<?php echo $this->Form->create('Signup');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Signup', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('volunteer_id');
		echo $this->Form->input('school_id');
		echo $this->Form->input('employee_id');
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Signup.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Signup.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Signups', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Schools', true)), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('School', true)), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Employees', true)), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Employee', true)), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>