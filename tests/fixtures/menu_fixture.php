<?php
/* Menu Fixture generated on: 2010-04-15 10:04:17 : 1271329157 */
class MenuFixture extends CakeTestFixture {
	var $name = 'Menu';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'parent_sid' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'key' => 'index'),
		'page_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'lft' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'rght' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'path' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'parent_sid' => array('column' => 'parent_sid', 'unique' => 0), 'page_id' => array('column' => 'page_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'parent_sid' => 1,
			'page_id' => 1,
			'lft' => 1,
			'rght' => 1,
			'path' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'created' => '2010-04-15 10:59:17',
			'modified' => '2010-04-15 10:59:17'
		),
	);
}
?>