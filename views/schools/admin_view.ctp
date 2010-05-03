<div class="schools view">
<h2><?php  __('School');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['location']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Office'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($school['Office']['name'], array('controller' => 'offices', 'action' => 'view', $school['Office']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $school['School']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('School', true)), array('action' => 'edit', $school['School']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('School', true)), array('action' => 'delete', $school['School']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $school['School']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Schools', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('School', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Offices', true)), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Office', true)), array('controller' => 'offices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Recruiter Meetings', true)), array('controller' => 'recruiter_meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Recruiter Meeting', true)), array('controller' => 'recruiter_meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Signups', true)), array('controller' => 'signups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Signup', true)), array('controller' => 'signups', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Recruiter Meetings', true));?></h3>
	<?php if (!empty($school['RecruiterMeeting'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Time'); ?></th>
		<th><?php __('Location'); ?></th>
		<th><?php __('School Id'); ?></th>
		<th><?php __('Employee Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($school['RecruiterMeeting'] as $recruiterMeeting):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $recruiterMeeting['id'];?></td>
			<td><?php echo $recruiterMeeting['time'];?></td>
			<td><?php echo $recruiterMeeting['location'];?></td>
			<td><?php echo $recruiterMeeting['school_id'];?></td>
			<td><?php echo $recruiterMeeting['employee_id'];?></td>
			<td><?php echo $recruiterMeeting['created'];?></td>
			<td><?php echo $recruiterMeeting['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'recruiter_meetings', 'action' => 'view', $recruiterMeeting['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'recruiter_meetings', 'action' => 'edit', $recruiterMeeting['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'recruiter_meetings', 'action' => 'delete', $recruiterMeeting['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $recruiterMeeting['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Recruiter Meeting', true)), array('controller' => 'recruiter_meetings', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Signups', true));?></h3>
	<?php if (!empty($school['Signup'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Volunteer Id'); ?></th>
		<th><?php __('School Id'); ?></th>
		<th><?php __('Employee Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($school['Signup'] as $signup):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $signup['id'];?></td>
			<td><?php echo $signup['volunteer_id'];?></td>
			<td><?php echo $signup['school_id'];?></td>
			<td><?php echo $signup['employee_id'];?></td>
			<td><?php echo $signup['name'];?></td>
			<td><?php echo $signup['email'];?></td>
			<td><?php echo $signup['phone'];?></td>
			<td><?php echo $signup['created'];?></td>
			<td><?php echo $signup['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'signups', 'action' => 'view', $signup['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'signups', 'action' => 'edit', $signup['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'signups', 'action' => 'delete', $signup['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $signup['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Signup', true)), array('controller' => 'signups', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
