<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ISV Online - <?php echo $title_for_layout; ?></title>
<?php echo $this->Html->css(array(
	'layout',
	'ddsmoothmenu',
	'adventure',
	'page-galleria',
	'prettyPhoto',
	'prettyPhoto/prettyPhoto',
	'index',
	'forms'
)); ?>
<!--ifwhatever>
	<?php echo $this->Html->css('ie6'); ?>
-->

<!--ifwhatever>
	<?php echo $this->Html->css('ie7'); ?>
-->

<!--
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
-->

<?php echo $this->Html->script(array(
	'jquery-1.3.2.min',
	'jquery.easing.1.2',
	'fadeinout',
	'jquery.prettyPhoto',
	'lib/jquery.prettyPhoto',
	'jquery.galleria',
	'common.js',
	'ddsmoothmenu',
	'galleria-init1',
	'jquery.galleria',
	'common-innovation',
	'index_advmain',
	
)); ?>


<?php echo $scripts_for_layout; ?>
</head>
<body>
<div id="container">
    <div id="header">
    	<h2>ISV Online</h2>
    	<ul id="globalnav">
        	<li><a href="#">Global Site</a></li> 
            <li><a href="#">My Account</a></li>
            <li><form><input type="textbox"></input> <input type="button" value="Search"></input></form></li>
        </ul>
        <?php echo $this->element('navigation'); ?>
    </div>
    
    <div id="body">
    	<div id="sidebar">
        	<h3>Some Media</h3>
            	<a rel="prettyPhoto[gallery]" >
                <?php echo $this->Html->image('adventure/Aus_map.jpg', array('alt' => 'Adventure Map of Australia')); ?>
				</a>
        	<h3>Sub Navigation</h3>
            <ul>
                <li><a href="#">Australia</a></li>
                <li><a href="#">Costa Rica</a></li>
                <li><a href="#">Dominican Republic</a></li>
                <li><a href="#">Eastern Europe</a></li>
                <li><a href="#">Ecuador</a></li>
                <li><a href="#">New Zealand</a></li>
                <li><a href="#">South Africa</a></li>
                <li><a href="#">Thailand</a></li>
			</ul>
        </div>
        
        <div id="content">
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>
        </div>
    </div>
    
    <div id="footer">
        <div class="footerminibox">
            <h6>Contact Us</h6>
            <ul class="footerposts">
                <li><a href="#">Get a Free Brochure</a></li>
                <li><a href="#">Subscribe to Our Newsletter</a></li>
                <li><a href="#">Customer Service</a></li>
                <li><a href="#">Frequently Asked Questions</a></li>
                <li><a href="#">ISV Blog</a></li>
            </ul>
        </div>
        <div class="footerminibox">
            <h6>About ISV</h6>
            <p>For the past 27 years ISV has conducted international travel programs for tens of thousands of students on six continents.  During this time, students from around the world have participated in ISV's educational, volunteer, cultural and adventure programs, and experienced the ultimate in outdoor adventure travel.</p>
            <p>ISV has 12 offices in six continents worldwide.  ISV program outbound offices are located in Australia, Canada, New Zealand, the UK and the USA.</p>
        </div>
        <div class="footerminibox">
            <h6>Media Center</h6>
            <!-- Flickr Photos -->
            <ul class="footermedia">
                <li><a href="#"><?php echo $this->Html->image('footer/thumb1.jpg'); ?>Photo Gallery</a></li>
                <li><a href="#"><?php echo $this->Html->image('footer/thumb2.jpg'); ?>Video Gallery</a></li>
                <li><a href="#"><?php echo $this->Html->image('footer/thumb3.jpg'); ?>In the News</a></li>
                <li><a href="#"><?php echo $this->Html->image('footer/fb.png'); ?>Facebook Fan Page</a></li>
            </ul>
        </div>
        <div class="clear"></div>
	
        <div id="footerbarwrap">
        <ul>
            <li>Copyright © Your Contact Name. All rights reserved.     +12 34 56 78 90</li>
            <li>Other important footer information is easy to add <a href="#">Including links</a></li>
        </ul>
        </div>
    </div>
</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
