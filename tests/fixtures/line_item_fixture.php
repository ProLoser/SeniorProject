<?php
/* LineItem Fixture generated on: 2010-04-15 10:04:14 : 1271329154 */
class LineItemFixture extends CakeTestFixture {
	var $name = 'LineItem';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'booking_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'price_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'booking_id' => array('column' => 'booking_id', 'unique' => 0), 'price_id' => array('column' => 'price_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'booking_id' => 1,
			'price_id' => 1,
			'created' => '2010-04-15 10:59:14',
			'modified' => '2010-04-15 10:59:14'
		),
	);
}
?>