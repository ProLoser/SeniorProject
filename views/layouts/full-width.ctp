<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ISV Online - <?php echo $title_for_layout; ?></title>
<?php echo $this->Html->css(array(
	'layout',
	'adventure',
	'page-galleria',
	'prettyPhoto',
	'prettyPhoto/prettyPhoto',
	'index',
	'forms',
	'tables',
	'home'
)); ?>
<!--[if IE 6]><?php echo $this->Html->css('ie6'); ?><![endif]-->
<!--[if IE 7]><?php echo $this->Html->css('ie7'); ?><![endif]-->

<?php echo $this->Html->script(array(
	'jquery-1.3.2.min',
	'jquery.easing.1.2',
	'fadeinout',
	'jquery.prettyPhoto',
	'lib/jquery-1.3.2.min',
	'lib/jquery.easing.1.2',
	'lib/jquery.prettyPhoto',
	'galleria-init1',
	'jquery.galleria',
	'cufon-yui',
	'fontconfig',
	'common.js',
	'common-innovation',
	'index_advmain',
	'haccordion',
	'flash-map'
)); ?>


<?php echo $scripts_for_layout; ?>
</head>
<body>
<div id="container">
    <div id="header">
    	<?php echo $this->element('layout/header'); ?>
    </div>
    
    <div id="body">
		<div id="fullwidth-content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>
        </div>
    </div>
    
    <div id="footer">
        <?php echo $this->element('layout/footer'); ?>
    </div>
</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
