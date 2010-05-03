<div class="documents form">
<?php echo $this->Form->create('Document');?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Document', true)); ?></legend>
	<?php
		echo $this->Form->input('type');
		echo $this->Form->input('volunteer_id');
		echo $this->Form->input('description');
		echo $this->Form->input('checked');
		echo $this->Form->input('attachment_file_name');
		echo $this->Form->input('attachment_file_size');
		echo $this->Form->input('attachment_meta_type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Documents', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
	</ul>
</div>