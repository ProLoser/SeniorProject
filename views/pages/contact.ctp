<div class="emailers form">
	<h1>Contact Us</h1>
	<h3>Via Phone</h3>
	<p>US Office: +1 (000) 000-0000</p>
	<p>Australian Office: +...</p>
	<h3>Via Email</h3>
<?php echo $this->Form->create('Emailer', array('url' => array('controller' => 'pages')));?>
	<fieldset>
 		<legend><?php __('Contact Info'); ?></legend>
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