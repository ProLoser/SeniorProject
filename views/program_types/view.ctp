<div class="programTypes view">
<h2><?php  __('Program Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $programType['ProgramType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $programType['ProgramType']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $programType['ProgramType']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $programType['ProgramType']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $programType['ProgramType']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Adventure'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $programType['ProgramType']['adventure']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Program Type', true)), array('action' => 'edit', $programType['ProgramType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Program Type', true)), array('action' => 'delete', $programType['ProgramType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $programType['ProgramType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Program Types', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Program Type', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Trip Pages', true)), array('controller' => 'trip_pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Trip Page', true)), array('controller' => 'trip_pages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Trips', true)), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Trip', true)), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Trip Pages', true));?></h3>
	<?php if (!empty($programType['TripPage'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Destination Id'); ?></th>
		<th><?php __('Volunteer Type Id'); ?></th>
		<th><?php __('Program Type Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Page Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($programType['TripPage'] as $tripPage):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tripPage['id'];?></td>
			<td><?php echo $tripPage['destination_id'];?></td>
			<td><?php echo $tripPage['volunteer_type_id'];?></td>
			<td><?php echo $tripPage['program_type_id'];?></td>
			<td><?php echo $tripPage['created'];?></td>
			<td><?php echo $tripPage['modified'];?></td>
			<td><?php echo $tripPage['page_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'trip_pages', 'action' => 'view', $tripPage['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'trip_pages', 'action' => 'edit', $tripPage['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'trip_pages', 'action' => 'delete', $tripPage['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tripPage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Trip Page', true)), array('controller' => 'trip_pages', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Trips', true));?></h3>
	<?php if (!empty($programType['Trip'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Destination Id'); ?></th>
		<th><?php __('Volunteer Type Id'); ?></th>
		<th><?php __('Program Type Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Adventure'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($programType['Trip'] as $trip):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $trip['id'];?></td>
			<td><?php echo $trip['destination_id'];?></td>
			<td><?php echo $trip['volunteer_type_id'];?></td>
			<td><?php echo $trip['program_type_id'];?></td>
			<td><?php echo $trip['created'];?></td>
			<td><?php echo $trip['modified'];?></td>
			<td><?php echo $trip['adventure'];?></td>
			<td><?php echo $trip['name'];?></td>
			<td><?php echo $trip['description'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'trips', 'action' => 'view', $trip['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'trips', 'action' => 'edit', $trip['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'trips', 'action' => 'delete', $trip['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $trip['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Trip', true)), array('controller' => 'trips', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
