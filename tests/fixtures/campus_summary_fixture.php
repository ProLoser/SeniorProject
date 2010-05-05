<?php
/* CampusSummary Fixture generated on: 2010-05-05 00:05:29 : 1273021169 */
class CampusSummaryFixture extends CakeTestFixture {
	var $name = 'CampusSummary';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'school_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'id_employees' => array('column' => 'employee_id', 'unique' => 0), 'id_schools' => array('column' => 'school_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'employee_id' => 1,
			'school_id' => 1
		),
	);
}
?>