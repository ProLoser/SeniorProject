<ul>
  <?php
  echo $html->link(
    'View Pages',
    array('controller'=>'pages', 'action'=>'')
  );
  echo $html->link(
    'View Users',
    array('controller'=>'users', 'action'=>'')
  );?>
</ul>
