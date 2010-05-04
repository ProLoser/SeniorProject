<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('User', true)); ?></legend>
	<?php
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('confirm_password', array('type' => 'password'));
		echo $this->Form->input('email');
		echo $this->Form->input('location_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>