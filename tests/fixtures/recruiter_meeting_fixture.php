<?php
/* RecruiterMeeting Fixture generated on: 2010-04-15 10:04:25 : 1271329165 */
class RecruiterMeetingFixture extends CakeTestFixture {
	var $name = 'RecruiterMeeting';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'time' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'location' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'school_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'employee_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'school_id' => array('column' => 'school_id', 'unique' => 0), 'employee_id' => array('column' => 'employee_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'time' => '2010-04-15 10:59:25',
			'location' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'school_id' => 1,
			'employee_id' => 1,
			'created' => '2010-04-15 10:59:25',
			'modified' => '2010-04-15 10:59:25'
		),
	);
}
?>