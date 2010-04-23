<?php
/* Employee Fixture generated on: 2010-04-15 10:04:11 : 1271329151 */
class EmployeeFixture extends CakeTestFixture {
	var $name = 'Employee';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'office_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'status' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'phone' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 15),
		'address' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'department' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'disabled' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'office_id' => array('column' => 'office_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'office_id' => 1,
			'status' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum d',
			'address' => 'Lorem ipsum dolor sit amet',
			'department' => 'Lorem ipsum dolor sit amet',
			'disabled' => 1,
			'created' => '2010-04-15 10:59:11',
			'modified' => '2010-04-15 10:59:11'
		),
	);
}
?>