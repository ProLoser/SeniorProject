<?php $this->layout = 'full-width'; ?>
	<div style="display:none;">
    	<?php echo $this->Html->image('selector/can_hover.jpg', array('alt' => 'Canada') ); ?>
    	<?php echo $this->Html->image('selector/usa_hover.jpg', array('alt' => 'USA, United States') ); ?>
    	<?php echo $this->Html->image('selector/uk_hover.jpg', array('alt' => 'UK, United Kingdom') ); ?>
    	<?php echo $this->Html->image('selector/eu_hover.jpg', array('alt' => 'Europe') ); ?>
        <?php echo $this->Html->image('selector/aus_hover.jpg', array('alt' => 'Australia') ); ?>
        <?php echo $this->Html->image('selector/nz_hover.jpg', array('alt' => 'New Zealand') ); ?>
	</div>
    
    <h1>Please Select Your Global Site:</h1>
        <ul id="world_map">
            <li id="loc_can">
            	<?php echo $this->Html->link('Canada', '/ca');?>
            </li>
            <li id="loc_usa">
            	<?php echo $this->Html->link('USA', '/us');?>
            </li>
            <li id="loc_uk">
            	<?php echo $this->Html->link('UK', '/uk');?>
            </li>
            <li id="loc_eu">
            	<?php echo $this->Html->link('Europe', '/eu');?>
            </li>
            <li id="loc_aus">
            	<?php echo $this->Html->link('Australia', '/au');?>
            </li>
            <li id="loc_nz">
            	<?php echo $this->Html->link('New Zealand', '/nz');?>
            </li>
        </ul>