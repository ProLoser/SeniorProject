<div class="users login">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Login')?></legend>
	<?php
		echo $this->Form->input('username', array(
			'after' => $this->Html->link(__('Need to Register?', true), array('action' => 'add'))
		));
		echo $this->Form->input('password', array(
			'after' => $this->Html->link(__('Forgotten Password?', true), array('action' => 'reset'))
		));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Login', true));?>
</div>