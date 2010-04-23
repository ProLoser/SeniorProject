<div class="programs form">
<?php echo $this->Form->create('Program');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Program', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Programs', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Base Combinations', true)), array('controller' => 'base_combinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Base Combination', true)), array('controller' => 'base_combinations', 'action' => 'add')); ?> </li>
	</ul>
</div>