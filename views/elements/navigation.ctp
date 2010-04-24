<ul>
  <?php
  echo $html->link(
    'View Pages',
    array('controller'=>'pages', 'action'=>'index')
  );
  echo $html->link(
    'View Users',
    array('controller'=>'users', 'action'=>'index')
  );?>
</ul>
