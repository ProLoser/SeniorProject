<?php $this->layout = 'full-width'?>
<h2>Add Page</h2>
<ul class="actions">
	<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pages', true)), array('action' => 'index'));?></li>
</ul>
<div class="pages form">
<?php echo $this->Form->create('Page');?>
	<?php
		echo $this->Form->input('full_width');
		echo $this->Form->input('title');
		echo $this->Form->input('location_id');
		echo $this->Form->input('contents');
		echo $this->Form->input('sidebar_contents');
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>