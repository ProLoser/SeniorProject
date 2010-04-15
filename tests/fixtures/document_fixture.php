<?php
/* Document Fixture generated on: 2010-04-15 10:04:07 : 1271329147 */
class DocumentFixture extends CakeTestFixture {
	var $name = 'Document';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 150),
		'volunteer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'description' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'checked' => array('type' => 'boolean', 'null' => false, 'default' => NULL),
		'attachment_file_name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'attachment_file_size' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'attachment_meta_type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 10),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'volunteer_id' => array('column' => 'volunteer_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'type' => 'Lorem ipsum dolor sit amet',
			'volunteer_id' => 1,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2010-04-15 10:59:07',
			'modified' => '2010-04-15 10:59:07',
			'checked' => 1,
			'attachment_file_name' => 'Lorem ipsum dolor sit amet',
			'attachment_file_size' => 1,
			'attachment_meta_type' => 'Lorem ip'
		),
	);
}
?>