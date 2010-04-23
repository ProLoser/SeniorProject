<div class="signups index">
	<h2><?php __('Signups');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('volunteer_id');?></th>
			<th><?php echo $this->Paginator->sort('school_id');?></th>
			<th><?php echo $this->Paginator->sort('employee_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($signups as $signup):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $signup['Signup']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($signup['Volunteer']['id'], array('controller' => 'volunteers', 'action' => 'view', $signup['Volunteer']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($signup['School']['name'], array('controller' => 'schools', 'action' => 'view', $signup['School']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($signup['Employee']['name'], array('controller' => 'employees', 'action' => 'view', $signup['Employee']['id'])); ?>
		</td>
		<td><?php echo $signup['Signup']['name']; ?>&nbsp;</td>
		<td><?php echo $signup['Signup']['email']; ?>&nbsp;</td>
		<td><?php echo $signup['Signup']['phone']; ?>&nbsp;</td>
		<td><?php echo $signup['Signup']['created']; ?>&nbsp;</td>
		<td><?php echo $signup['Signup']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $signup['Signup']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $signup['Signup']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $signup['Signup']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $signup['Signup']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Signup', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Schools', true)), array('controller' => 'schools', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('School', true)), array('controller' => 'schools', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Employees', true)), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Employee', true)), array('controller' => 'employees', 'action' => 'add')); ?> </li>
	</ul>
</div>