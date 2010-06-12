<div class="pictures form">
<?php echo $this->Form->create('Picture', array('type' => 'file'));?>
	<fieldset>
 		<legend><?php printf(__('Edit %s', true), __('Picture', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('picture', array('type' => 'file'));
		echo $this->Form->input('page_id', array('type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Picture.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Picture.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pictures', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pages', true)), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Page', true)), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>