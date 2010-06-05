<h2>ISV Online</h2>
<ul id="globalnav">
	<li class="flag-<?php if (isset($this->params['local'])) echo $this->params['local'];?>"><a href="#">Global Site</a></li> 
	<li><a href="#">My Account</a></li>
	<li><form><input type="textbox" /> <input type="button" value="Search" /></form></li>
</ul>
<?php echo $this->element('layout/navigation'); ?>