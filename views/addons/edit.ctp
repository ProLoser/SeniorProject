<div class="addons form">
<?php echo $this->Form->create('Addon');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Addon', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Addon.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Addon.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Addons', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Addon Combinations', true)), array('controller' => 'addon_combinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Addon Combination', true)), array('controller' => 'addon_combinations', 'action' => 'add')); ?> </li>
	</ul>
</div>