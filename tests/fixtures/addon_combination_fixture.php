<?php
/* AddonCombination Fixture generated on: 2010-04-15 10:04:59 : 1271329139 */
class AddonCombinationFixture extends CakeTestFixture {
	var $name = 'AddonCombination';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'base_combination_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'addon_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'base_combination_id' => array('column' => 'base_combination_id', 'unique' => 0), 'addon_id' => array('column' => 'addon_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'base_combination_id' => 1,
			'addon_id' => 1,
			'created' => '2010-04-15 10:58:59',
			'modified' => '2010-04-15 10:58:59'
		),
	);
}
?>