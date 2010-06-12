<?php $this->layout = 'full-width'?>
<div class="pages form">
	<h2><?php printf(__('Edit %s', true), __('Page', true)); ?></h2>
	<ul class="actions">
		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Page.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Page.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pages', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Locations', true)), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Location', true)), array('controller' => 'locations', 'action' => 'add')); ?> </li>
	</ul>
<?php echo $this->Form->create('Page');?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('full_width');
		echo $this->Form->input('title');
		echo $this->Form->input('location_id');
		echo $this->Form->input('contents');
		echo $this->Form->input('sidebar_contents');
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>