<div class="emailers form">
<?php echo $this->Form->create('Emailer', array('url' => array('controller' => 'pages')));?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Emailer', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('email');
		echo $this->Form->input('phone');
		echo $this->Form->input('subject');
		echo $this->Form->input('message', array('type' => 'textarea'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
</div>