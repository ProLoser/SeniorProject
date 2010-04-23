<?php
/* Donation Fixture generated on: 2010-04-23 23:04:42 : 1272066102 */
class DonationFixture extends CakeTestFixture {
	var $name = 'Donation';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'description' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'amount' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '8,2'),
		'reason' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'volunteer_name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'payment_sid' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'booking_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'volunteer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'booking_id' => array('column' => 'booking_id', 'unique' => 0), 'volunteer_id' => array('column' => 'volunteer_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'amount' => 1,
			'reason' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'volunteer_name' => 'Lorem ipsum dolor sit amet',
			'created' => '2010-04-23 23:41:42',
			'modified' => '2010-04-23 23:41:42',
			'payment_sid' => 1,
			'booking_id' => 1,
			'volunteer_id' => 1
		),
	);
}
?>