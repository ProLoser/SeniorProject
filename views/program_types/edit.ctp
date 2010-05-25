<div class="programTypes form">
<?php echo $this->Form->create('ProgramType');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Program Type', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('adventure');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ProgramType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ProgramType.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Program Types', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Trip Pages', true)), array('controller' => 'trip_pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Trip Page', true)), array('controller' => 'trip_pages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Trips', true)), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Trip', true)), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>