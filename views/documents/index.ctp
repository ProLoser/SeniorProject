<div class="documents index">
	<h2><?php __('Documents');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('type');?></th>
			<th><?php echo $this->Paginator->sort('volunteer_id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('checked');?></th>
			<th><?php echo $this->Paginator->sort('attachment_file_name');?></th>
			<th><?php echo $this->Paginator->sort('attachment_file_size');?></th>
			<th><?php echo $this->Paginator->sort('attachment_meta_type');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($documents as $document):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $document['Document']['id']; ?>&nbsp;</td>
		<td><?php echo $document['Document']['type']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($document['Volunteer']['id'], array('controller' => 'volunteers', 'action' => 'view', $document['Volunteer']['id'])); ?>
		</td>
		<td><?php echo $document['Document']['description']; ?>&nbsp;</td>
		<td><?php echo $document['Document']['created']; ?>&nbsp;</td>
		<td><?php echo $document['Document']['modified']; ?>&nbsp;</td>
		<td><?php echo $document['Document']['checked']; ?>&nbsp;</td>
		<td><?php echo $document['Document']['attachment_file_name']; ?>&nbsp;</td>
		<td><?php echo $document['Document']['attachment_file_size']; ?>&nbsp;</td>
		<td><?php echo $document['Document']['attachment_meta_type']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $document['Document']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $document['Document']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $document['Document']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $document['Document']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true).' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Document', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Volunteers', true)), array('controller' => 'volunteers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Volunteer', true)), array('controller' => 'volunteers', 'action' => 'add')); ?> </li>
	</ul>
</div>