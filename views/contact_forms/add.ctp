<div class="contactForms form">
<?php echo $this->Form->create('ContactForm');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Contact Form', true)); ?></legend>
	<?php
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Contact Forms', true)), array('action' => 'index'));?></li>
	</ul>
</div>