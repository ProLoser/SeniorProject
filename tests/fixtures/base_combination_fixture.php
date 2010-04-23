<?php
/* BaseCombination Fixture generated on: 2010-04-23 23:04:33 : 1272066093 */
class BaseCombinationFixture extends CakeTestFixture {
	var $name = 'BaseCombination';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'destination_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'program_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'destination_id' => array('column' => 'destination_id', 'unique' => 0), 'program_id' => array('column' => 'program_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'destination_id' => 1,
			'program_id' => 1,
			'created' => '2010-04-23 23:41:33',
			'modified' => '2010-04-23 23:41:33'
		),
	);
}
?>