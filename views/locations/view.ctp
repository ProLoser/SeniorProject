<div class="locations view">
<h2><?php  __('Location');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Currency Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['currency_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Short Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['short_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Office'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($location['Office']['name'], array('controller' => 'offices', 'action' => 'view', $location['Office']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $location['Location']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(sprintf(__('Edit %s', true), __('Location', true)), array('action' => 'edit', $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('Delete %s', true), __('Location', true)), array('action' => 'delete', $location['Location']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $location['Location']['id'])); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Locations', true)), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Location', true)), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Offices', true)), array('controller' => 'offices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Office', true)), array('controller' => 'offices', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('List %s', true), __('Pages', true)), array('controller' => 'pages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Page', true)), array('controller' => 'pages', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php printf(__('Related %s', true), __('Pages', true));?></h3>
	<?php if (!empty($location['Page'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Short Title'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Slug'); ?></th>
		<th><?php __('Contents'); ?></th>
		<th><?php __('Sidebar Contents'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Meta Description'); ?></th>
		<th><?php __('Meta Keywords'); ?></th>
		<th><?php __('Location Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($location['Page'] as $page):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $page['id'];?></td>
			<td><?php echo $page['short_title'];?></td>
			<td><?php echo $page['title'];?></td>
			<td><?php echo $page['slug'];?></td>
			<td><?php echo $page['contents'];?></td>
			<td><?php echo $page['sidebar_contents'];?></td>
			<td><?php echo $page['created'];?></td>
			<td><?php echo $page['modified'];?></td>
			<td><?php echo $page['meta_description'];?></td>
			<td><?php echo $page['meta_keywords'];?></td>
			<td><?php echo $page['location_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'pages', 'action' => 'view', $page['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'pages', 'action' => 'edit', $page['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'pages', 'action' => 'delete', $page['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $page['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(sprintf(__('New %s', true), __('Page', true)), array('controller' => 'pages', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
