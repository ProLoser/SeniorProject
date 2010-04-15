<div class="faqs form">
<?php echo $this->Form->create('Faq');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Faq', true)); ?></legend>
	<?php
		echo $this->Form->input('question');
		echo $this->Form->input('answer');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Faqs', true)), array('action' => 'index'));?></li>
	</ul>
</div>