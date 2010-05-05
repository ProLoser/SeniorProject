<div class="recruiterMeetings index">
	<h2><?php __('Recruiter Meetings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('time');?></th>
			<th><?php echo $this->Paginator->sort('location');?></th>
			<th><?php echo $this->Paginator->sort('school_id');?></th>
			<th><?php echo $this->Paginator->sort('employee_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($recruiterMeetings as $recruiterMeeting):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $recruiterMeeting['RecruiterMeeting']['id']; ?>&nbsp;</td>
		<td><?php echo $recruiterMeeting['RecruiterMeeting']['time']; ?>&nbsp;</td>
		<td><?php echo $recruiterMeeting['RecruiterMeeting']['location']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($recruiterMeeting['School']['name'], array('controller' => 'schools', 'action' => 'view', $recruiterMeeting['School']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($recruiterMeeting['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $recruiterMeeting['Employee']['id'])); ?>
		</td>
		<td><?php echo $recruiterMeeting['RecruiterMeeting']['created']; ?>&nbsp;</td>
		<td><?php echo $recruiterMeeting['RecruiterMeeting']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $recruiterMeeting['RecruiterMeeting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $recruiterMeeting['RecruiterMeeting']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $recruiterMeeting['RecruiterMeeting']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $recruiterMeeting['RecruiterMeeting']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Recruiter Meeting', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Schools', true)), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('School', true)), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Employees', true)), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Employee', true)), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>