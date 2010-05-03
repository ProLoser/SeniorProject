<div class="promos form">
<?php echo $this->Form->create('Promo');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Promo', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Promo.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Promo.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Promos', true)), array('action' => 'index'));?></li>
	</ul>
</div>