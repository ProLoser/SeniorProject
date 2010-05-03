<div class="addonCombinations form">
<?php echo $this->Form->create('AddonCombination');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Addon Combination', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('base_combination_id');
		echo $this->Form->input('addon_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('AddonCombination.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('AddonCombination.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Addon Combinations', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Base Combinations', true)), array('controller' => 'base_combinations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Base Combination', true)), array('controller' => 'base_combinations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Addons', true)), array('controller' => 'addons', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Addon', true)), array('controller' => 'addons', 'action' => 'add')); ?> </li>
	</ul>
</div>