<div class="locations view">
<h2><?php  __('Location');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Currency Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['currency_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Short Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['short_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Office'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($location['Office']['name'], array('controller' => 'offices', 'action' => 'view', $location['Office']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Location', true)), array('action' => 'edit', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Location', true)), array('action' => 'delete', $location['Location']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Locations', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Location', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Offices', true)), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Office', true)), array('controller' => 'offices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pages', true)), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Page', true)), array('controller' => 'pages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Prices', true)), array('controller' => 'prices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Price', true)), array('controller' => 'prices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Pages', true));?></h3>
	<?php if (!empty($location['Page'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Price Id'); ?></th>
		<th><?php __('Short Title'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Slug'); ?></th>
		<th><?php __('Contents'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Meta Description'); ?></th>
		<th><?php __('Meta Keywords'); ?></th>
		<th><?php __('Location Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Page'] as $page):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $page['id'];?></td>
			<td><?php echo $page['price_id'];?></td>
			<td><?php echo $page['short_title'];?></td>
			<td><?php echo $page['title'];?></td>
			<td><?php echo $page['slug'];?></td>
			<td><?php echo $page['contents'];?></td>
			<td><?php echo $page['created'];?></td>
			<td><?php echo $page['modified'];?></td>
			<td><?php echo $page['meta_description'];?></td>
			<td><?php echo $page['meta_keywords'];?></td>
			<td><?php echo $page['location_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'pages', 'action' => 'view', $page['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'pages', 'action' => 'edit', $page['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'pages', 'action' => 'delete', $page['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $page['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Page', true)), array('controller' => 'pages', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Prices', true));?></h3>
	<?php if (!empty($location['Price'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Foreign Id'); ?></th>
		<th><?php __('Foreign Model'); ?></th>
		<th><?php __('Location Id'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Hidden'); ?></th>
		<th><?php __('Active'); ?></th>
		<th><?php __('Expires'); ?></th>
		<th><?php __('Activates'); ?></th>
		<th><?php __('Original Slots Available'); ?></th>
		<th><?php __('Current Slots Available'); ?></th>
		<th><?php __('Line Item Count'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Price'] as $price):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $price['id'];?></td>
			<td><?php echo $price['foreign_id'];?></td>
			<td><?php echo $price['foreign_model'];?></td>
			<td><?php echo $price['location_id'];?></td>
			<td><?php echo $price['price'];?></td>
			<td><?php echo $price['created'];?></td>
			<td><?php echo $price['modified'];?></td>
			<td><?php echo $price['hidden'];?></td>
			<td><?php echo $price['active'];?></td>
			<td><?php echo $price['expires'];?></td>
			<td><?php echo $price['activates'];?></td>
			<td><?php echo $price['original_slots_available'];?></td>
			<td><?php echo $price['current_slots_available'];?></td>
			<td><?php echo $price['line_item_count'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'prices', 'action' => 'view', $price['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'prices', 'action' => 'edit', $price['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'prices', 'action' => 'delete', $price['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $price['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Price', true)), array('controller' => 'prices', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Users', true));?></h3>
	<?php if (!empty($location['User'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Username'); ?></th>
		<th><?php __('Password'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Role Id'); ?></th>
		<th><?php __('Location Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['User'] as $user):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $user['id'];?></td>
			<td><?php echo $user['username'];?></td>
			<td><?php echo $user['password'];?></td>
			<td><?php echo $user['email'];?></td>
			<td><?php echo $user['role_id'];?></td>
			<td><?php echo $user['location_id'];?></td>
			<td><?php echo $user['created'];?></td>
			<td><?php echo $user['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'users', 'action' => 'delete', $user['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Volunteers', true));?></h3>
	<?php if (!empty($location['Volunteer'])):?>
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
		foreach ($location['Volunteer'] as $volunteer):
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
