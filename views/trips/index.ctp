<div class="trips index">
	<h2><?php __('Trips');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('destination_id');?></th>
			<th><?php echo $this->Paginator->sort('volunteer_type_id');?></th>
			<th><?php echo $this->Paginator->sort('program_type_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('adventure');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($trips as $trip):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $trip['Trip']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($trip['Destination']['name'], array('controller' => 'destinations', 'action' => 'view', $trip['Destination']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($trip['VolunteerType']['name'], array('controller' => 'volunteer_types', 'action' => 'view', $trip['VolunteerType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($trip['ProgramType']['name'], array('controller' => 'program_types', 'action' => 'view', $trip['ProgramType']['id'])); ?>
		</td>
		<td><?php echo $trip['Trip']['created']; ?>&nbsp;</td>
		<td><?php echo $trip['Trip']['modified']; ?>&nbsp;</td>
		<td><?php echo $trip['Trip']['adventure']; ?>&nbsp;</td>
		<td><?php echo $trip['Trip']['name']; ?>&nbsp;</td>
		<td><?php echo $trip['Trip']['description']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $trip['Trip']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $trip['Trip']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $trip['Trip']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trip['Trip']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Trip', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Destinations', true)), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Destination', true)), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteer Types', true)), array('controller' => 'volunteer_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer Type', true)), array('controller' => 'volunteer_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Program Types', true)), array('controller' => 'program_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Program Type', true)), array('controller' => 'program_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Addon Combinations', true)), array('controller' => 'addon_combinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Addon Combination', true)), array('controller' => 'addon_combinations', 'action' => 'add')); ?> </li>
	</ul>
</div>