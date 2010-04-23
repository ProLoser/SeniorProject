<?php
/* Price Fixture generated on: 2010-04-15 10:04:21 : 1271329161 */
class PriceFixture extends CakeTestFixture {
	var $name = 'Price';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'foreign_sid' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'foreign_model' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10),
		'location_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'price' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '8,2'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'hidden' => array('type' => 'boolean', 'null' => true, 'default' => '0'),
		'active' => array('type' => 'boolean', 'null' => true, 'default' => NULL),
		'expires' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'activates' => array('type' => 'date', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'foreign_sid' => array('column' => 'foreign_sid', 'unique' => 0), 'location_id' => array('column' => 'location_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'foreign_sid' => 1,
			'foreign_model' => 'Lorem ip',
			'location_id' => 1,
			'price' => 1,
			'created' => '2010-04-15 10:59:21',
			'modified' => '2010-04-15 10:59:21',
			'hidden' => 1,
			'active' => 1,
			'expires' => '2010-04-15',
			'activates' => '2010-04-15'
		),
	);
}
?>