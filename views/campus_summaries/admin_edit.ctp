<div class="campusSummaries form">
<?php echo $this->Form->create('CampusSummary');?>
	<fieldset>
 		<legend><?php printf(__('Admin Edit %s', true), __('Campus Summary', true)); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('id_employees');
		echo $this->Form->input('id_schools');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CampusSummary.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CampusSummary.id'))); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Campus Summaries', true)), array('action' => 'index'));?></li>
	</ul>
</div>