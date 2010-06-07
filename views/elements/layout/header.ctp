<h2>ISV Online</h2>
<ul id="globalnav">
	<li class="flag-<?php if (isset($this->params['local'])) echo strtolower($this->params['local']);?>">
		<?php echo $this->Html->link('Change Location', '/welcome'); ?>
	</li> 
	<li><a href="#">My Account</a></li>
	<li><form action=""><input type="text" /> <input type="button" value="Search" /></form></li>
</ul>
<?php echo $this->element('layout/navigation'); ?>