<div class="recruiterMeetings form">
<?php echo $this->Form->create('RecruiterMeeting');?>
	<fieldset>
 		<legend><?php printf(__('Recruit Add %s', true), __('Recruiter Meeting', true)); ?></legend>
	<?php
		echo $this->Form->input('time');
		echo $this->Form->input('location');
		echo $this->Form->input('school_id');
		echo $this->Form->input('employee_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Recruiter Meetings', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Schools', true)), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('School', true)), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Employees', true)), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Employee', true)), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>