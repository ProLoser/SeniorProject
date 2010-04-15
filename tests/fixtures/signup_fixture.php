<?php
/* Signup Fixture generated on: 2010-04-15 10:04:29 : 1271329169 */
class SignupFixture extends CakeTestFixture {
	var $name = 'Signup';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'volunteer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'school_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'phone' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 15),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'volunteer_id' => array('column' => 'volunteer_id', 'unique' => 0), 'school_id' => array('column' => 'school_id', 'unique' => 0), 'employee_id' => array('column' => 'employee_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'volunteer_id' => 1,
			'school_id' => 1,
			'employee_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum d',
			'created' => '2010-04-15 10:59:29',
			'modified' => '2010-04-15 10:59:29'
		),
	);
}
?>