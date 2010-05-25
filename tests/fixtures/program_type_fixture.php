<?php
/* ProgramType Fixture generated on: 2010-05-24 16:05:19 : 1274744239 */
class ProgramTypeFixture extends CakeTestFixture {
	var $name = 'ProgramType';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'description' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'adventure' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'created' => '2010-05-24 16:37:19',
			'modified' => '2010-05-24 16:37:19',
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet',
			'adventure' => 1
		),
	);
}
?>