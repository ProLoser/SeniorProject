<div class="employees index">
	<h2><?php __('Employees');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('office_id');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('department');?></th>
			<th><?php echo $this->Paginator->sort('disabled');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($employees as $employee):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $employee['Employee']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employee['Office']['name'], array('controller' => 'offices', 'action' => 'view', $employee['Office']['id'])); ?>
		</td>
		<td><?php echo $employee['Employee']['status']; ?>&nbsp;</td>
		<td><?php echo $employee['Employee']['name']; ?>&nbsp;</td>
		<td><?php echo $employee['Employee']['email']; ?>&nbsp;</td>
		<td><?php echo $employee['Employee']['phone']; ?>&nbsp;</td>
		<td><?php echo $employee['Employee']['address']; ?>&nbsp;</td>
		<td><?php echo $employee['Employee']['department']; ?>&nbsp;</td>
		<td><?php echo $employee['Employee']['disabled']; ?>&nbsp;</td>
		<td><?php echo $employee['Employee']['created']; ?>&nbsp;</td>
		<td><?php echo $employee['Employee']['modified']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($employee['User']['id'], array('controller' => 'users', 'action' => 'view', $employee['User']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $employee['Employee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $employee['Employee']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $employee['Employee']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $employee['Employee']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Employee', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Offices', true)), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Office', true)), array('controller' => 'offices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Users', true)), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('User', true)), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Recruiter Meetings', true)), array('controller' => 'recruiter_meetings', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Recruiter Meeting', true)), array('controller' => 'recruiter_meetings', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Signups', true)), array('controller' => 'signups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Signup', true)), array('controller' => 'signups', 'action' => 'add')); ?> </li>
	</ul>
</div>