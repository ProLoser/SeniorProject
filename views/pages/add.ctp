<div class="pages form">
<?php echo $this->Form->create('Page');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Page', true)); ?></legend>
	<?php
		echo $this->Form->input('short_title');
		echo $this->Form->input('title');
		echo $this->Form->input('slug');
		echo $this->Form->input('contents');
		echo $this->Form->input('sidebar_contents');
		echo $this->Form->input('meta_description');
		echo $this->Form->input('meta_keywords');
		echo $this->Form->input('location_id');
		echo $this->Form->input('Trip');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pages', true)), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Locations', true)), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Location', true)), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Trips', true)), array('controller' => 'trips', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Trip', true)), array('controller' => 'trips', 'action' => 'add')); ?> </li>
	</ul>
</div>