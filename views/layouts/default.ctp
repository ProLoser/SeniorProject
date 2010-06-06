<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ISV Online - <?php echo $title_for_layout; ?></title>
<?php echo $this->Html->css(array(
	'layout',
	'forms',
	'tables',
	'home',
	'trip_info',
	'jquery/slideshow',
	'jquery/accordion_info',
	'jquery/fancy_accordion',
	'jquery/prettyPhoto',
	'jquery/pikachoose',
	'volunteer',
	'articles',
	'destination',
	'program'
)); ?>
<meta name="keywords" content="<?php echo (isset($keywords_for_layout)) ? $keywords_for_layout : ""; ?>" />
<meta name="description" content="<?php echo (isset($description_for_layout)) ? $description_for_layout : ""; ?>" />
<!--[if IE 6]><?php echo $this->Html->css('ie6'); ?><![endif]-->
<!--[if IE 7]><?php echo $this->Html->css('ie7'); ?><![endif]-->

<?php echo $this->Html->script(array(
	'jquery/jquery-1.4.2.min',
	'jquery/jquery-ui-1.8.1.custom.min',
	'jquery/jquery.slideshow.lite-0.5.3',
	'jquery/jquery.innerfade',
	'jquery/pikachoose',
	'jquery/jquery.prettyPhoto',
	'jquery/accordion_info',
	'jquery/fancy_accordion',
)); ?>
<script type="text/javascript">Galleria.loadTheme('<?php echo $this->webroot?>js/jquery/themes/classic/galleria.classic.js');</script>
<?php echo $this->Html->script(array(
	'ISVOnline',
)); ?>

<?php echo $scripts_for_layout; ?>
</head>
<body>
<div id="container">
    <div id="header">
    	<?php echo $this->element('layout/header'); ?>
    </div>
    
    <div id="body">
    	<div id="sidebar">
        	<?php echo $this->element('layout/sidebar');?>
        </div>
        
        <div id="content">
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
