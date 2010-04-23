<?php
/* Booking Fixture generated on: 2010-04-23 23:04:35 : 1272066095 */
class BookingFixture extends CakeTestFixture {
	var $name = 'Booking';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'volunteer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'accepted' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'payment_sid' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'paid' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'cancelled' => array('type' => 'boolean', 'null' => false, 'default' => '0'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'volunteer_id' => array('column' => 'volunteer_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'volunteer_id' => 1,
			'accepted' => 1,
			'created' => '2010-04-23 23:41:35',
			'modified' => '2010-04-23 23:41:35',
			'payment_sid' => 1,
			'paid' => 1,
			'cancelled' => 1
		),
	);
}
?>