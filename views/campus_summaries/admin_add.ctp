<div class="campusSummaries form">
<?php echo $this->Form->create('CampusSummary');?>
	<fieldset>
 		<legend><?php printf(__('Admin Add %s', true), __('Campus Summary', true)); ?></legend>
	<?php
		echo $this->Form->input('id_employees');
		echo $this->Form->input('id_schools');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Campus Summaries', true)), array('action' => 'index'));?></li>
	</ul>
</div>