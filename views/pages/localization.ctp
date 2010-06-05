<?php $this->layout = 'full-width'; ?>
	<div style="display:none;">
    	<?php echo $this->Html->image('selector/can_hover.jpg', array('alt' => 'Canada') ); ?>
    	<?php echo $this->Html->image('selector/usa_hover.jpg', array('alt' => 'United States') ); ?>
    	<?php echo $this->Html->image('selector/uk_hover.jpg', array('alt' => 'UK, United Kingdom') ); ?>
    	<?php echo $this->Html->image('selector/eu_hover.jpg', array('alt' => 'Europe') ); ?>
        <?php echo $this->Html->image('selector/aus_hover.jpg', array('alt' => 'Australia') ); ?>
        <?php echo $this->Html->image('selector/nz_hover.jpg', array('alt' => 'New Zealand') ); ?>
	</div>
    
    <h1>Please Select Your Global Site:</h1>
        <ul id="world_map">
            <li id="loc_can">
            	<a href="#">Canada</a>
            </li>
            <li id="loc_usa">
            	<a href="#">United States</a>
            </li>
            <li id="loc_uk">
            	<a href="#">UK</a>
            </li>
            <li id="loc_eu">
            	<a href="#">Europe</a>
            </li>
            <li id="loc_aus">
            	<a href="#">Australia</a>
            </li>
            <li id="loc_nz">
            	<a href="#">New<br />Zealand</a>
            </li>
        </ul>