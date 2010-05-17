<ul id="nav">
    <li><?php echo $html->link(__('Home', true),'/',array('title' => 'Home')); ?></li>
    <li><?php echo $html->link(__('Programs', true),array('controller'=>'programs','action'=>'index'),array('title' => 'Programs'));?></li>
    <li><a href="adv-main.html">Adventure</a></li>
    <li><a href="#">Volunteer</a></li>
    <li><a href="page.html">ISV Family</a></li>
    <li><?php echo $this->Html->link(__('Apply Now', true), array('controller' => 'users', 'action' => 'add')); ?></li>
</ul>