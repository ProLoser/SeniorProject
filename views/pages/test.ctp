<h1>Plugin Test Page</h1>

<h2>Slideshow</h2>
<div class="js-slideshow" id="slideshow">
    <?php echo $this->Html->image('volunteer/australia/aus-vol01.jpg', array('alt' => '<strong>Nature Sanctuary:</strong> <em>Make a difference to Australia&#39;s wildlife!</em><br />ISV has several projects located in nature sanctuaries. The goal is to conserve native animals in a relatively natural setting. Primary tasks vary and can include building and maintaining animal enclosures, fence building, vegetation removal, tree planting, and surveying. All of these tasks are directly related to the establishment or maintenance of the sanctuary and the species within it.') ); ?>
	<?php echo $this->Html->image('volunteer/australia/aus-vol02.jpg', array('alt' => 'This is the caption for this.  Pic 2.') ); ?>
    <?php echo $this->Html->image('volunteer/australia/aus-vol03.jpg', array('alt' => 'This is the caption for this.  Pic 3.') ); ?>
    <?php echo $this->Html->image('volunteer/australia/aus-vol04.jpg', array('alt' => 'This is the caption for this.  Pic 4.') ); ?>
    <?php echo $this->Html->image('volunteer/australia/aus-vol04.jpg', array('alt' => 'This is the caption for this.  Pic 4.') ); ?>
</div>

<h2>Gallery</h2>
<ul class="js-gallery">
	<li><?php echo $this->Html->image('adventure/Australia/Adv_Aus-Day01.jpg'); ?><span>This is the caption for this.  Pic 1.</span></li>
    <li><?php echo $this->Html->image('adventure/Australia/Adv_Aus-Day02.jpg' ); ?><span>asdf</span></li>
    <li><?php echo $this->Html->image('adventure/Australia/Adv_Aus-Day03.jpg' ); ?></li>
    <li><?php echo $this->Html->image('adventure/Australia/Adv_Aus-Day04.jpg' ); ?></li>
    <li><?php echo $this->Html->image('adventure/Australia/Adv_Aus-Day05.jpg' ); ?></li>
    <li><?php echo $this->Html->image('adventure/Australia/Adv_Aus-Day06.jpg' ); ?></li>
    <li><?php echo $this->Html->image('adventure/Australia/Adv_Aus-Day07.jpg' ); ?></li>
    <li><?php echo $this->Html->image('adventure/Australia/Adv_Aus-Day08.jpg' ); ?></li>
    <li><?php echo $this->Html->image('adventure/Australia/Adv_Aus-Day09.jpg' ); ?></li>
    <li><?php echo $this->Html->image('adventure/Australia/Adv_Aus-Day10.jpg' ); ?></li>
    <li><?php echo $this->Html->image('adventure/Australia/Adv_Aus-Day11.jpg' ); ?></li>
    <li><?php echo $this->Html->image('adventure/Australia/Adv_Aus-Day12.jpg' ); ?></li>
</ul>

<h2>Innerfade</h2>
<?php echo $this->Html->image('adventure/Australia/Fiji_Excursion.jpg', array('class' => 'js-fade')); ?>

<h2>Lightbox</h2>
<?php echo $this->Html->link($this->Html->image('adventure/Australia/sydney.jpg', array('alt' => 'Sydney Harbour')), 'adventure/Australia/sydney.jpg', array('class' => 'js-litebox', 'escape' => false)); ?>
<br />
<?php echo $this->Html->link($this->Html->image('adventure/black-kids.jpg', array('alt' => 'Black Kids - Hurricane Jane')), 'http://www.youtube.com/watch?v=5S1l8qq7EVA', array('class' => 'js-litebox', 'escape' => false)); ?>
<h2>Fancy Accordion</h2>
<!-- ACCORDION IMAGE ROTATOR -->
<div id="js-accordion">

	<!-- slide 1 -->
	<div id="slide1" class="accordionImgDiv">
		<a href="index.html" id="slideimg1" class="accordionSlideImage asyncImgLoadAccordion" title="/SeniorProject/img/oap/australia/accordion/1.jpg|Sydney Harbour Sunset Cocktail Cruise|Enjoy the amazing Sydney Harbour on board this sunset cocktail cruise. The 1.5 hour trip cruises under the Sydney Harbour Bridge, up close to the Sydney Opera House, past the Royal Botanic Gardens while the sun sets on beautiful Sydney. All this while enjoying a complimentary drink and Australian Cheeses."></a>
		<div class="accordionDescBack"></div>
		<div class="accordionDesc">
			<p class="accordionDescHeader">Sydney Harbour</p>
			
		</div>                    
		<div class="slideStrip" title="/SeniorProject/img/oap/australia/accordion/1strip.jpg"></div>
		<p class="slideDesc">Sydney<br />Harbour</p>  
	</div>
											  
	<!-- slide 2 -->
	<div id="slide2" class="accordionImgDiv"> 
		<a href="index.html" id="slideimg2" class="accordionSlideImage asyncImgLoadAccordion" title="/SeniorProject/img/oap/australia/accordion/2.jpg|Rappelling in the Blue Mountains|Experience the adrenaline rush of rappelling down the beautiful sandstone cliffs of the World Heritage listed Blue Mountains. Participants will build their skills and confidence on rappels of multiple heights - the ultimate challenge is 180ft high!"></a>
		<div class="accordionDescBack"></div>
		<div class="accordionDesc">
			<p class="accordionDescHeader">Blue Mountains</p>
			
		</div>                    
		<div class="slideStrip" title="/SeniorProject/img/oap/australia/accordion/2strip.jpg"></div>
		<p class="slideDesc">Blue<br />Mountains</p> 
	</div>
					
	<!-- slide 3 -->
	<div id="slide3" class="accordionImgDiv">
		<a href="index.html" id="slideimg3" class="accordionSlideImage asyncImgLoadAccordion" title="/SeniorProject/img/oap/australia/accordion/3.jpg|Learn to Surf in Byron Bay|Surfing is an Australian tradition and Byron Bay is one of Australia's most popular surfing spots. Surfing professionals will teach you the basics to the advanced skills of surfing in some of the best waves in Australia."></a>
		<div class="accordionDescBack"></div>
		<div class="accordionDesc">
			<p class="accordionDescHeader">Bryon Bay</p>
			
		</div>                    
		<div class="slideStrip" title="/SeniorProject/img/oap/australia/accordion/3strip.jpg"></div>
		<p class="slideDesc">Bryon <br />Bay</p>  
	</div>
							  
	<!-- slide 4 -->
	<div id="slide4" class="accordionImgDiv">
		<a href="index.html" id="slideimg4" class="accordionSlideImage asyncImgLoadAccordion" title="/SeniorProject/img/oap/australia/accordion/4.jpg|Fraser Island Lake Wabby Tour|Lake Wabby is a stunning emerald green freshwater lake on the amazing Fraser Island, which is the largest sand island in the world. Lake Wabby is great for swimming and you may be lucky enough to see friendly catfish and long neck turtles! To reach Lake Wabby we will drive a short distance along 75-mile Beach, and then take an interpreted hike across the ever-changing sand dunes."></a>
		<div class="accordionDescBack"></div>
		<div class="accordionDesc">
			<p class="accordionDescHeader">Frasier Island</p>
			
		</div>                   
	   <div class="slideStrip" title="/SeniorProject/img/oap/australia/accordion/4strip.jpg"></div>
	   <p class="slideDesc">Frasier<br />Island</p>  
	</div>           
	
	<!-- slide 5 -->
	<div id="slide5" class="accordionImgDiv">
		<a href="index.html" id="slideimg5" class="accordionSlideImage asyncImgLoadAccordion" title="/SeniorProject/img/oap/australia/accordion/5.jpg|Ocean Rafting the Beautiful Whitsunday Islands|This is an adrenaline filled full day eco-adventure tour through the Whitsunday Islands to postcard perfect Whitehaven beach. Ocean Rafting is the most exhilarating and fastest way to tour the Whitsunday Islands. The day includes exploring Whitehaven Beach, snorkeling pristine coral reefs and tropical island guided walks. A buffet lunch is also included. Whitehaven Beach is recognized as one of the most beautiful beaches in the world with its amazing blue water and white sand."></a> 
		<div class="accordionDescBack"></div>
		<div class="accordionDesc">
			<p class="accordionDescHeader">Whitsunday Islands</p>
			
		</div>    
		<div class="slideStrip" title="/SeniorProject/img/oap/australia/accordion/5strip.jpg"></div>
		<p class="slideDesc">Whitsunday<br />Islands</p>  
	</div>
	
</div> <!-- accordionContainer -->

<!-- ACCORDION CONTROL PANEL -->   
<div id="accordionControlPanel">
<span id="accorControlBtnDesc"></span>
	<img id="accorBackBtn" class="accorControlButton ie6PNGfix" src="/SeniorProject/img/slider/accordion/control/back.png" alt="" /><img 
	id="accorPlayBtn" class="accorControlButton ie6PNGfix" src="/SeniorProject/img/slider/accordion/control/pause.png" alt="" /><img 
	id="accorForwardBtn" class="accorControlButton ie6PNGfix" src="/SeniorProject/img/slider/accordion/control/forward.png" alt="" /> 
</div> <!-- accordionControlPanel -->    
	<div id="ImageTitle">Sydney Harbour Sunset Cocktail Cruise</div>
	<div id="ImageDescrip">Enjoy the amazing Sydney Harbour on board this sunset cocktail cruise. The 1.5 hour trip cruises under the Sydney Harbour Bridge, up close to the Sydney Opera House, past the Royal Botanic Gardens while the sun sets on beautiful Sydney. All this while enjoying a complimentary drink and Australian Cheeses.</div>
 
<h2>And again</h2>