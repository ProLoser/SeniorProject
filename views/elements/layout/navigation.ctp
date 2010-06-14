<ul id="nav">
    <li><?php echo $html->link(__('Home', true),array('controller' => 'pages', 'action' => 'display', 'home'),array('title' => 'Home')); ?></li>
    <li><?php echo $html->link(__('Programs', true),array('controller' => 'pages', 'action' => 'view', 19),array('title' => 'Programs')); ?></li>
    <li><?php echo $html->link(__('Adventure', true),array('controller' => 'pages', 'action' => 'view', 19),array('title' => 'Programs')); ?></li>
    <li><?php echo $html->link(__('Volunteer', true),array('controller' => 'pages', 'action' => 'view', 19),array('title' => 'Programs')); ?></li>
    <li><?php echo $html->link(__('ISV Family', true),array('controller' => 'pages', 'action' => 'view', 19),array('title' => 'Programs')); ?></li>
    <li><?php echo $this->Html->link(__('Apply Now', true), array('controller' => 'users', 'action' => 'add')); ?></li>
</ul>