<div class="offices form">
<?php echo $this->Form->create('Office');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Office', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('location');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Offices', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Locations', true)), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Location', true)), array('controller' => 'locations', 'action' => 'add')); ?> </li>
	</ul>
</div>