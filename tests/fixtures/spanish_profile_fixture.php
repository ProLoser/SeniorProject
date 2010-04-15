<?php
/* SpanishProfile Fixture generated on: 2010-04-15 10:04:31 : 1271329171 */
class SpanishProfileFixture extends CakeTestFixture {
	var $name = 'SpanishProfile';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'proficiency_level' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'homestay' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'volunteer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'booking_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'volunteer_id' => array('column' => 'volunteer_id', 'unique' => 0), 'booking_id' => array('column' => 'booking_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'proficiency_level' => 'Lorem ipsum dolor sit amet',
			'homestay' => 1,
			'volunteer_id' => 1,
			'booking_id' => 1,
			'created' => '2010-04-15 10:59:31',
			'modified' => '2010-04-15 10:59:31'
		),
	);
}
?>