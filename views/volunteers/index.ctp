<div class="volunteers index">
	<h2><?php __('Volunteers');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('middle_name');?></th>
			<th><?php echo $this->Paginator->sort('nickname');?></th>
			<th><?php echo $this->Paginator->sort('current_address');?></th>
			<th><?php echo $this->Paginator->sort('current_city');?></th>
			<th><?php echo $this->Paginator->sort('current_state');?></th>
			<th><?php echo $this->Paginator->sort('current_zip');?></th>
			<th><?php echo $this->Paginator->sort('current_country');?></th>
			<th><?php echo $this->Paginator->sort('permanent_address');?></th>
			<th><?php echo $this->Paginator->sort('permanent_city');?></th>
			<th><?php echo $this->Paginator->sort('permanent_state');?></th>
			<th><?php echo $this->Paginator->sort('permanent_zip');?></th>
			<th><?php echo $this->Paginator->sort('permanent_country');?></th>
			<th><?php echo $this->Paginator->sort('passport');?></th>
			<th><?php echo $this->Paginator->sort('passport_country');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('last_login');?></th>
			<th><?php echo $this->Paginator->sort('referral');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('age');?></th>
			<th><?php echo $this->Paginator->sort('mobile_phone');?></th>
			<th><?php echo $this->Paginator->sort('university');?></th>
			<th><?php echo $this->Paginator->sort('university_major');?></th>
			<th><?php echo $this->Paginator->sort('country_of_birth');?></th>
			<th><?php echo $this->Paginator->sort('country_of_residence');?></th>
			<th><?php echo $this->Paginator->sort('citizenship');?></th>
			<th><?php echo $this->Paginator->sort('alternate_email');?></th>
			<th><?php echo $this->Paginator->sort('primary_emergency_contact');?></th>
			<th><?php echo $this->Paginator->sort('primary_emergency_relationship');?></th>
			<th><?php echo $this->Paginator->sort('primary_emergency_phone');?></th>
			<th><?php echo $this->Paginator->sort('primary_emergency_email');?></th>
			<th><?php echo $this->Paginator->sort('secondary_emergency_contact');?></th>
			<th><?php echo $this->Paginator->sort('secondary_emergency_relationship');?></th>
			<th><?php echo $this->Paginator->sort('secondary_emergency_phone');?></th>
			<th><?php echo $this->Paginator->sort('secondary_emergency_email');?></th>
			<th><?php echo $this->Paginator->sort('grade_level');?></th>
			<th><?php echo $this->Paginator->sort('medical_conditions');?></th>
			<th><?php echo $this->Paginator->sort('medical_condition_comments');?></th>
			<th><?php echo $this->Paginator->sort('allergies');?></th>
			<th><?php echo $this->Paginator->sort('allergies_comments');?></th>
			<th><?php echo $this->Paginator->sort('hospitalization');?></th>
			<th><?php echo $this->Paginator->sort('hospitalization_comments');?></th>
			<th><?php echo $this->Paginator->sort('prescription_medication');?></th>
			<th><?php echo $this->Paginator->sort('prescription_medication_comments');?></th>
			<th><?php echo $this->Paginator->sort('diet');?></th>
			<th><?php echo $this->Paginator->sort('diet_comments');?></th>
			<th><?php echo $this->Paginator->sort('shirt_size');?></th>
			<th><?php echo $this->Paginator->sort('date_summer');?></th>
			<th><?php echo $this->Paginator->sort('date_fall');?></th>
			<th><?php echo $this->Paginator->sort('hobbies');?></th>
			<th><?php echo $this->Paginator->sort('project_preference');?></th>
			<th><?php echo $this->Paginator->sort('interests');?></th>
			<th><?php echo $this->Paginator->sort('location_id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($volunteers as $volunteer):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $volunteer['Volunteer']['id']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['last_name']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['first_name']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['middle_name']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['nickname']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['current_address']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['current_city']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['current_state']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['current_zip']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['current_country']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['permanent_address']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['permanent_city']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['permanent_state']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['permanent_zip']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['permanent_country']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['passport']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['passport_country']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['email']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['created']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['modified']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['last_login']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['referral']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['phone']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['gender']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['age']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['mobile_phone']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['university']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['university_major']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['country_of_birth']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['country_of_residence']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['citizenship']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['alternate_email']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['primary_emergency_contact']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['primary_emergency_relationship']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['primary_emergency_phone']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['primary_emergency_email']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['secondary_emergency_contact']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['secondary_emergency_relationship']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['secondary_emergency_phone']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['secondary_emergency_email']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['grade_level']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['medical_conditions']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['medical_condition_comments']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['allergies']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['allergies_comments']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['hospitalization']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['hospitalization_comments']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['prescription_medication']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['prescription_medication_comments']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['diet']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['diet_comments']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['shirt_size']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['date_summer']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['date_fall']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['hobbies']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['project_preference']; ?>&nbsp;</td>
		<td><?php echo $volunteer['Volunteer']['interests']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($volunteer['Location']['name'], array('controller' => 'locations', 'action' => 'view', $volunteer['Location']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($volunteer['User']['id'], array('controller' => 'users', 'action' => 'view', $volunteer['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $volunteer['Volunteer']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $volunteer['Volunteer']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $volunteer['Volunteer']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $volunteer['Volunteer']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('action' => 'add')); ?></li>
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