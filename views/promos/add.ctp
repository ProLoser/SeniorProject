<div class="promos form">
<?php echo $this->Form->create('Promo');?>
	<fieldset>
 		<legend><?php printf(__('Add %s', true), __('Promo', true)); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('expires');
		echo $this->Form->input('activates');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Promos', true)), array('action' => 'index'));?></li>
	</ul>
</div>