<?php
/* Location Fixture generated on: 2010-04-15 10:04:16 : 1271329156 */
class LocationFixture extends CakeTestFixture {
	var $name = 'Location';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'currency_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 4),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'short_code' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'office_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'office_id' => array('column' => 'office_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'currency_code' => 'Lo',
			'name' => 'Lorem ipsum dolor sit amet',
			'short_code' => 'Lorem ipsum dolor sit amet',
			'office_id' => 1,
			'created' => '2010-04-15 10:59:16',
			'modified' => '2010-04-15 10:59:16'
		),
	);
}
?>