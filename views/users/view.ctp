<div class="users view">
<h2><?php  __('User');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Username'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['username']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Role'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Role']['name'], array('controller' => 'roles', 'action' => 'view', $user['Role']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($user['Location']['name'], array('controller' => 'locations', 'action' => 'view', $user['Location']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $user['User']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('User', true)), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('User', true)), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Roles', true)), array('controller' => 'roles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Role', true)), array('controller' => 'roles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Locations', true)), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Location', true)), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Employees', true)), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Employee', true)), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Employees', true));?></h3>
	<?php if (!empty($user['Employee'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Office Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Department'); ?></th>
		<th><?php __('Disabled'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Employee'] as $employee):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $employee['id'];?></td>
			<td><?php echo $employee['office_id'];?></td>
			<td><?php echo $employee['status'];?></td>
			<td><?php echo $employee['name'];?></td>
			<td><?php echo $employee['email'];?></td>
			<td><?php echo $employee['phone'];?></td>
			<td><?php echo $employee['address'];?></td>
			<td><?php echo $employee['department'];?></td>
			<td><?php echo $employee['disabled'];?></td>
			<td><?php echo $employee['created'];?></td>
			<td><?php echo $employee['modified'];?></td>
			<td><?php echo $employee['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'employees', 'action' => 'view', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'employees', 'action' => 'edit', $employee['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'employees', 'action' => 'delete', $employee['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employee['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Employee', true)), array('controller' => 'employees', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Volunteers', true));?></h3>
	<?php if (!empty($user['Volunteer'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Middle Name'); ?></th>
		<th><?php __('Nickname'); ?></th>
		<th><?php __('Current Address'); ?></th>
		<th><?php __('Current City'); ?></th>
		<th><?php __('Current State'); ?></th>
		<th><?php __('Current Zip'); ?></th>
		<th><?php __('Current Country'); ?></th>
		<th><?php __('Permanent Address'); ?></th>
		<th><?php __('Permanent City'); ?></th>
		<th><?php __('Permanent State'); ?></th>
		<th><?php __('Permanent Zip'); ?></th>
		<th><?php __('Permanent Country'); ?></th>
		<th><?php __('Passport'); ?></th>
		<th><?php __('Passport Country'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Last Login'); ?></th>
		<th><?php __('Referral'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Age'); ?></th>
		<th><?php __('Mobile Phone'); ?></th>
		<th><?php __('University'); ?></th>
		<th><?php __('University Major'); ?></th>
		<th><?php __('Country Of Birth'); ?></th>
		<th><?php __('Country Of Residence'); ?></th>
		<th><?php __('Citizenship'); ?></th>
		<th><?php __('Alternate Email'); ?></th>
		<th><?php __('Primary Emergency Contact'); ?></th>
		<th><?php __('Primary Emergency Relationship'); ?></th>
		<th><?php __('Primary Emergency Phone'); ?></th>
		<th><?php __('Primary Emergency Email'); ?></th>
		<th><?php __('Secondary Emergency Contact'); ?></th>
		<th><?php __('Secondary Emergency Relationship'); ?></th>
		<th><?php __('Secondary Emergency Phone'); ?></th>
		<th><?php __('Secondary Emergency Email'); ?></th>
		<th><?php __('Grade Level'); ?></th>
		<th><?php __('Medical Conditions'); ?></th>
		<th><?php __('Medical Condition Comments'); ?></th>
		<th><?php __('Allergies'); ?></th>
		<th><?php __('Allergies Comments'); ?></th>
		<th><?php __('Hospitalization'); ?></th>
		<th><?php __('Hospitalization Comments'); ?></th>
		<th><?php __('Prescription Medication'); ?></th>
		<th><?php __('Prescription Medication Comments'); ?></th>
		<th><?php __('Diet'); ?></th>
		<th><?php __('Diet Comments'); ?></th>
		<th><?php __('Shirt Size'); ?></th>
		<th><?php __('Date Summer'); ?></th>
		<th><?php __('Date Fall'); ?></th>
		<th><?php __('Hobbies'); ?></th>
		<th><?php __('Project Preference'); ?></th>
		<th><?php __('Interests'); ?></th>
		<th><?php __('Location Id'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['Volunteer'] as $volunteer):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $volunteer['id'];?></td>
			<td><?php echo $volunteer['last_name'];?></td>
			<td><?php echo $volunteer['first_name'];?></td>
			<td><?php echo $volunteer['middle_name'];?></td>
			<td><?php echo $volunteer['nickname'];?></td>
			<td><?php echo $volunteer['current_address'];?></td>
			<td><?php echo $volunteer['current_city'];?></td>
			<td><?php echo $volunteer['current_state'];?></td>
			<td><?php echo $volunteer['current_zip'];?></td>
			<td><?php echo $volunteer['current_country'];?></td>
			<td><?php echo $volunteer['permanent_address'];?></td>
			<td><?php echo $volunteer['permanent_city'];?></td>
			<td><?php echo $volunteer['permanent_state'];?></td>
			<td><?php echo $volunteer['permanent_zip'];?></td>
			<td><?php echo $volunteer['permanent_country'];?></td>
			<td><?php echo $volunteer['passport'];?></td>
			<td><?php echo $volunteer['passport_country'];?></td>
			<td><?php echo $volunteer['email'];?></td>
			<td><?php echo $volunteer['created'];?></td>
			<td><?php echo $volunteer['modified'];?></td>
			<td><?php echo $volunteer['last_login'];?></td>
			<td><?php echo $volunteer['referral'];?></td>
			<td><?php echo $volunteer['phone'];?></td>
			<td><?php echo $volunteer['gender'];?></td>
			<td><?php echo $volunteer['age'];?></td>
			<td><?php echo $volunteer['mobile_phone'];?></td>
			<td><?php echo $volunteer['university'];?></td>
			<td><?php echo $volunteer['university_major'];?></td>
			<td><?php echo $volunteer['country_of_birth'];?></td>
			<td><?php echo $volunteer['country_of_residence'];?></td>
			<td><?php echo $volunteer['citizenship'];?></td>
			<td><?php echo $volunteer['alternate_email'];?></td>
			<td><?php echo $volunteer['primary_emergency_contact'];?></td>
			<td><?php echo $volunteer['primary_emergency_relationship'];?></td>
			<td><?php echo $volunteer['primary_emergency_phone'];?></td>
			<td><?php echo $volunteer['primary_emergency_email'];?></td>
			<td><?php echo $volunteer['secondary_emergency_contact'];?></td>
			<td><?php echo $volunteer['secondary_emergency_relationship'];?></td>
			<td><?php echo $volunteer['secondary_emergency_phone'];?></td>
			<td><?php echo $volunteer['secondary_emergency_email'];?></td>
			<td><?php echo $volunteer['grade_level'];?></td>
			<td><?php echo $volunteer['medical_conditions'];?></td>
			<td><?php echo $volunteer['medical_condition_comments'];?></td>
			<td><?php echo $volunteer['allergies'];?></td>
			<td><?php echo $volunteer['allergies_comments'];?></td>
			<td><?php echo $volunteer['hospitalization'];?></td>
			<td><?php echo $volunteer['hospitalization_comments'];?></td>
			<td><?php echo $volunteer['prescription_medication'];?></td>
			<td><?php echo $volunteer['prescription_medication_comments'];?></td>
			<td><?php echo $volunteer['diet'];?></td>
			<td><?php echo $volunteer['diet_comments'];?></td>
			<td><?php echo $volunteer['shirt_size'];?></td>
			<td><?php echo $volunteer['date_summer'];?></td>
			<td><?php echo $volunteer['date_fall'];?></td>
			<td><?php echo $volunteer['hobbies'];?></td>
			<td><?php echo $volunteer['project_preference'];?></td>
			<td><?php echo $volunteer['interests'];?></td>
			<td><?php echo $volunteer['location_id'];?></td>
			<td><?php echo $volunteer['user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'volunteers', 'action' => 'view', $volunteer['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'volunteers', 'action' => 'edit', $volunteer['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'volunteers', 'action' => 'delete', $volunteer['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $volunteer['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('controller' => 'volunteers', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
