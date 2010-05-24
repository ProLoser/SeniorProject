<?php
/* Trip Fixture generated on: 2010-05-24 16:05:20 : 1274744240 */
class TripFixture extends CakeTestFixture {
	var $name = 'Trip';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'destination_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'volunteer_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'program_type_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'adventure' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'description' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'destination_id' => array('column' => 'destination_id', 'unique' => 0), 'volunteer_type_id' => array('column' => 'volunteer_type_id', 'unique' => 0), 'program_type_id' => array('column' => 'program_type_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'destination_id' => 1,
			'volunteer_type_id' => 1,
			'program_type_id' => 1,
			'created' => '2010-05-24 16:37:20',
			'modified' => '2010-05-24 16:37:20',
			'adventure' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>