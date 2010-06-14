<?php if (isset($sidebar)) echo $sidebar; ?>
<h3>Sub Navigation</h3>
<ul>
	<li><?php echo $this->Html->link('Pages', array('controller' => 'pages', 'action' => 'index'));?></li>
	<li><?php echo $this->Html->link('Pictures', array('controller' => 'pictures', 'action' => 'index'));?></li>
	<li><?php echo $this->Html->link('Trip Pages', array('controller' => 'trip_pages', 'action' => 'index'));?></li>
	<li><?php echo $this->Html->link('Trips', array('controller' => 'trips', 'action' => 'index'));?></li>
	<li><?php echo $this->Html->link('Volunteer Types', array('controller' => 'volunteer_types', 'action' => 'index'));?></li>
	<li><?php echo $this->Html->link('Locales', array('controller' => 'locations', 'action' => 'index'));?></li>
	<li><?php echo $this->Html->link('Destinations', array('controller' => 'destinations', 'action' => 'index'));?></li>
</ul>