<?php
/* PackagePage Fixture generated on: 2010-05-24 16:05:02 : 1274744102 */
class PackagePageFixture extends CakeTestFixture {
	var $name = 'PackagePage';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'destination_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'volunteer_type_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'program_type_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'page_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'destination_id' => array('column' => 'destination_id', 'unique' => 0), 'volunteer_type_id' => array('column' => 'volunteer_type_id', 'unique' => 0), 'program_type_id' => array('column' => 'program_type_id', 'unique' => 0), 'page_id' => array('column' => 'page_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'destination_id' => 1,
			'volunteer_type_id' => 1,
			'program_type_id' => 1,
			'created' => '2010-05-24 16:35:02',
			'modified' => '2010-05-24 16:35:02',
			'page_id' => 1
		),
	);
}
?>