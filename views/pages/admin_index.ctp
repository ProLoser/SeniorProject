<div class="pages index">
	<h2><?php __('Pages');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('price_id');?></th>
			<th><?php echo $this->Paginator->sort('short_title');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('slug');?></th>
			<th><?php echo $this->Paginator->sort('contents');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('meta_description');?></th>
			<th><?php echo $this->Paginator->sort('meta_keywords');?></th>
			<th><?php echo $this->Paginator->sort('location_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pages as $page):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $page['Page']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($page['Price']['id'], array('controller' => 'prices', 'action' => 'view', $page['Price']['id'])); ?>
		</td>
		<td><?php echo $page['Page']['short_title']; ?>&nbsp;</td>
		<td><?php echo $page['Page']['title']; ?>&nbsp;</td>
		<td><?php echo $page['Page']['slug']; ?>&nbsp;</td>
		<td><?php echo $page['Page']['contents']; ?>&nbsp;</td>
		<td><?php echo $page['Page']['created']; ?>&nbsp;</td>
		<td><?php echo $page['Page']['modified']; ?>&nbsp;</td>
		<td><?php echo $page['Page']['meta_description']; ?>&nbsp;</td>
		<td><?php echo $page['Page']['meta_keywords']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($page['Location']['name'], array('controller' => 'locations', 'action' => 'view', $page['Location']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $page['Page']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $page['Page']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $page['Page']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $page['Page']['id'])); ?>
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
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Page', true)), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Prices', true)), array('controller' => 'prices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Price', true)), array('controller' => 'prices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Locations', true)), array('controller' => 'locations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Location', true)), array('controller' => 'locations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Menus', true)), array('controller' => 'menus', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Menu', true)), array('controller' => 'menus', 'action' => 'add')); ?> </li>
	</ul>
</div>