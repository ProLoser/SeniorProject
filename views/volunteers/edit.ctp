<div class="volunteers form">
<?php echo $this->Form->create('Volunteer');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Volunteer', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('nickname');
		echo $this->Form->input('current_address');
		echo $this->Form->input('current_city');
		echo $this->Form->input('current_state');
		echo $this->Form->input('current_zip');
		echo $this->Form->input('current_country');
		echo $this->Form->input('permanent_address');
		echo $this->Form->input('permanent_city');
		echo $this->Form->input('permanent_state');
		echo $this->Form->input('permanent_zip');
		echo $this->Form->input('permanent_country');
		echo $this->Form->input('passport');
		echo $this->Form->input('passport_country');
		echo $this->Form->input('email');
		echo $this->Form->input('last_login');
		echo $this->Form->input('referral');
		echo $this->Form->input('phone');
		echo $this->Form->input('gender');
		echo $this->Form->input('age');
		echo $this->Form->input('mobile_phone');
		echo $this->Form->input('university');
		echo $this->Form->input('university_major');
		echo $this->Form->input('country_of_birth');
		echo $this->Form->input('country_of_residence');
		echo $this->Form->input('citizenship');
		echo $this->Form->input('alternate_email');
		echo $this->Form->input('primary_emergency_contact');
		echo $this->Form->input('primary_emergency_relationship');
		echo $this->Form->input('primary_emergency_phone');
		echo $this->Form->input('primary_emergency_email');
		echo $this->Form->input('secondary_emergency_contact');
		echo $this->Form->input('secondary_emergency_relationship');
		echo $this->Form->input('secondary_emergency_phone');
		echo $this->Form->input('secondary_emergency_email');
		echo $this->Form->input('grade_level');
		echo $this->Form->input('medical_conditions');
		echo $this->Form->input('medical_condition_comments');
		echo $this->Form->input('allergies');
		echo $this->Form->input('allergies_comments');
		echo $this->Form->input('hospitalization');
		echo $this->Form->input('hospitalization_comments');
		echo $this->Form->input('prescription_medication');
		echo $this->Form->input('prescription_medication_comments');
		echo $this->Form->input('diet');
		echo $this->Form->input('diet_comments');
		echo $this->Form->input('shirt_size');
		echo $this->Form->input('date_summer');
		echo $this->Form->input('date_fall');
		echo $this->Form->input('hobbies');
		echo $this->Form->input('project_preference');
		echo $this->Form->input('interests');
		echo $this->Form->input('location_id');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Volunteer.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Volunteer.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Locations', true)), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Location', true)), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Bookings', true)), array('controller' => 'bookings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Booking', true)), array('controller' => 'bookings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Documents', true)), array('controller' => 'documents', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Document', true)), array('controller' => 'documents', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Donations', true)), array('controller' => 'donations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Donation', true)), array('controller' => 'donations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Ecuador Profiles', true)), array('controller' => 'ecuador_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Ecuador Profile', true)), array('controller' => 'ecuador_profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Signups', true)), array('controller' => 'signups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Signup', true)), array('controller' => 'signups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Spanish Profiles', true)), array('controller' => 'spanish_profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Spanish Profile', true)), array('controller' => 'spanish_profiles', 'action' => 'add')); ?> </li>
	</ul>
</div>