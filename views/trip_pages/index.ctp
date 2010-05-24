<div class="tripPages index">
	<h2><?php __('Trip Pages');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('destination_id');?></th>
			<th><?php echo $this->Paginator->sort('volunteer_type_id');?></th>
			<th><?php echo $this->Paginator->sort('program_type_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('page_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tripPages as $tripPage):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tripPage['TripPage']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tripPage['Destination']['name'], array('controller' => 'destinations', 'action' => 'view', $tripPage['Destination']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tripPage['VolunteerType']['name'], array('controller' => 'volunteer_types', 'action' => 'view', $tripPage['VolunteerType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($tripPage['ProgramType']['name'], array('controller' => 'program_types', 'action' => 'view', $tripPage['ProgramType']['id'])); ?>
		</td>
		<td><?php echo $tripPage['TripPage']['created']; ?>&nbsp;</td>
		<td><?php echo $tripPage['TripPage']['modified']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($tripPage['Page']['title'], array('controller' => 'pages', 'action' => 'view', $tripPage['Page']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $tripPage['TripPage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tripPage['TripPage']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tripPage['TripPage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tripPage['TripPage']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Trip Page', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Destinations', true)), array('controller' => 'destinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Destination', true)), array('controller' => 'destinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteer Types', true)), array('controller' => 'volunteer_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer Type', true)), array('controller' => 'volunteer_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Program Types', true)), array('controller' => 'program_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Program Type', true)), array('controller' => 'program_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pages', true)), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Page', true)), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>