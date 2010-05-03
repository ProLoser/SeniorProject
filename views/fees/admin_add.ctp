<div class="fees form">
<?php echo $this->Form->create('Fee');?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Fee', true)); ?></legend>
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

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Fees', true)), array('action' => 'index'));?></li>
	</ul>
</div>