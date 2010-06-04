<?php $this->layout = 'full-width'; ?>
	<div id="flash-map">
	  	<script language="JavaScript" type="text/javascript">
	AC_FL_RunContent(
		'codebase', 'http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0',
		'width', '940',
		'height', '323',
		'src', 'flash/teasermapflashapp',
		'quality', 'high',
		'pluginspage', 'http://www.adobe.com/go/getflashplayer',
		'align', 'middle',
		'play', 'true',
		'loop', 'true',
		'scale', 'showall',
		'wmode', 'transparent',
		'devicefont', 'false',
		'id', 'teasermapflashapp',
		'bgcolor', '#ffffff',
		'name', 'teasermapflashapp',
		'menu', 'true',
		'allowFullScreen', 'false',
		'allowScriptAccess','sameDomain',
		'movie', 'flash/teasermapflashapp',
		'salign', ''
		); //end AC code
		</script>
<noscript>
	<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=10,0,0,0" width="940" height="323" id="teasermapflashapp" align="middle">
	<param name="allowScriptAccess" value="sameDomain" />
	<param name="allowFullScreen" value="false" />
	<param name="movie" value="flash/teasermapflashapp.swf" /><param name="quality" value="high" /><param name="bgcolor" value="#ffffff" />	<embed src="flash/teasermapflashapp.swf" quality="high" bgcolor="#ffffff" width="940" height="323" name="teasermapflashapp" align="middle" allowScriptAccess="sameDomain" allowFullScreen="false" type="application/x-shockwave-flash" pluginspage="http://www.adobe.com/go/getflashplayer" />
	</object>
</noscript>
	</div>
	<div class="clear"></div>
    
    <p class="teaser"><?php echo $this->Html->image('main/ISV.png', array('alt' => 'International Student Volunteers','title' => 'International Student Volunteers')); ?> combines meaningful volunteer projects with action-packed adventure and educational travel in countries such as <strong>Australia</strong>, the <strong>Dominican Republic</strong>, <strong>Costa Rica</strong>, <strong>Eastern Europe</strong>, <strong>Ecuador</strong>, <strong>New Zealand</strong>, and <strong>Thailand</strong>.</p>
    <p class="teaser">ISV is committed to creating a volunteer environment condusive to combining conservation, education, community development and recreation into the most incredible experience of a lifetime, all while giving back to the local communities in the countries where we travel.</p>	
    
    <!-- Portfolio Block -->
    <div id="mportfoliowrap">
        <div class="mportfoliobox">
            <h4><a href="#"><?php echo $this->Html->image('main/programs-lbl.png', array('alt' => 'Programs')); ?></a></h4>
            <div class="mportfolio mportfoliocatbg"><!-- Portfolio Block One-->
                <a href="#">
                    <!-- Class js-fade will enable fade in out -->
                    <?php echo $this->Html->image('main/portfolio1.jpg', array('alt' => 'Programs','class' => 'js-fade')); ?>
                </a>
            </div>
        </div>
        
        <div class="mportfoliobox mportfoliospace">
            <h4><a href="#"><?php echo $this->Html->image('main/Adventures-lbl.png', array('alt' => 'Adventures')); ?></a></h4>
            <div class="mportfolio mportfoliocatbg"><!-- Portfolio Block Two -->
                <a href="#">
                    <?php echo $this->Html->image('main/portfolio2.jpg', array('alt' => 'Adventures','class' => 'js-fade')); ?>
                </a>
            </div>
        </div>
        
        <div class="mportfoliobox mportfoliospace">
            <h4><a href="#"><?php echo $this->Html->image('main/Volunteer-lbl.png', array('alt' => 'Volunteer')); ?></a></h4>
            <div class="mportfolio mportfoliocatbg"><!-- Portfolio Block Three -->
                <a href="#">
                    <?php echo $this->Html->image('main/portfolio3.jpg', array('alt' => 'Volunteer','class' => 'js-fade')); ?>
                </a>
            </div>
       	</div>
        <div class="clear"></div>
    </div>
	
    <div id="mblogwrap">
        <div class="mblogbox"><!-- Info Block One -->
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur, nibh ut feugiat placerat, orci lacus accumsan erat, eget porttitor arcu velit a lacus. Sed tempus bibendum risus, nec dignissim sem vestibulum ut. Nam iaculis aliquam elementum. Nunc sed dignissim sapien. 
            </p>
            <a href="#"><img src="img/portfolio/meet_new_people.png" alt="Meet new people" /></a>
        </div>
        <div class="mblogbox mblogspace"><!-- Info Block Two -->
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur, nibh ut feugiat placerat, orci lacus accumsan erat, eget porttitor arcu velit a lacus. Sed tempus bibendum risus, nec dignissim sem vestibulum ut. Nam iaculis aliquam elementum. Nunc sed dignissim sapien. 
            </p>
            <a href="#"><img src="img/portfolio/discover_new_places.png" alt="Discover new places" /></a>
        </div>
        <div class="mblogbox mblogspace"><!-- Info Block Three -->
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec consectetur, nibh ut feugiat placerat, orci lacus accumsan erat, eget porttitor arcu velit a lacus. Sed tempus bibendum risus, nec dignissim sem vestibulum ut. Nam iaculis aliquam elementum. Nunc sed dignissim sapien.
            </p>
            <a href="#"><img src="img/portfolio/travel_with_a_purpose.png" alt="Travel with a purpose" /></a>
        </div>
        <div class="clear"></div>
	</div>
<script type="text/javascript">
<!--
swfobject.registerObject("FlashID");
//-->
</script>
