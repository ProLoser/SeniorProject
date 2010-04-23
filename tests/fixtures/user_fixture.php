<?php
/* User Fixture generated on: 2010-04-23 23:04:22 : 1272066142 */
class UserFixture extends CakeTestFixture {
	var $name = 'User';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 140),
		'password' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 40),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'role_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'location_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'role_id' => array('column' => 'role_id', 'unique' => 0), 'location_id' => array('column' => 'location_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet',
			'role_id' => 1,
			'location_id' => 1,
			'created' => '2010-04-23 23:42:22',
			'modified' => '2010-04-23 23:42:22'
		),
	);
}
?>