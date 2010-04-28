<?php
/* CampusSummary Fixture generated on: 2010-04-28 00:04:31 : 1272413671 */
class CampusSummaryFixture extends CakeTestFixture {
	var $name = 'CampusSummary';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'id_employees' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'id_schools' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'id_employees' => array('column' => 'id_employees', 'unique' => 0), 'id_schools' => array('column' => 'id_schools', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'id_employees' => 1,
			'id_schools' => 1
		),
	);
}
?>