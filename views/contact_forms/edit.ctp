<div class="contactForms form">
<?php echo $this->Form->create('ContactForm');?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Contact Form', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('ContactForm.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('ContactForm.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Contact Forms', true)), array('action' => 'index'));?></li>
	</ul>
</div>