<ul id="nav">
    <li><?php echo $html->link(__('Home', true),array('controller' => 'pages', 'action' => 'display', 'home'),array('title' => 'Home')); ?></li>
    <li><a href="pages/view/19">Programs</a></li>
    <li><a href="pages/view/19">Adventure</a></li>
    <li><a href="pages/view/19">Volunteer</a></li>
    <li><a href="pages/view/19">ISV Family</a></li>
    <li><?php echo $this->Html->link(__('Apply Now', true), array('controller' => 'users', 'action' => 'add')); ?></li>
</ul>