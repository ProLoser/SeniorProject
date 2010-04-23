<?php
/* Page Fixture generated on: 2010-04-23 23:04:01 : 1272066121 */
class PageFixture extends CakeTestFixture {
	var $name = 'Page';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'price_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'short_title' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'title' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'slug' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100),
		'contents' => array('type' => 'text', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'meta_description' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'meta_keywords' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'location_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'price_id' => array('column' => 'price_id', 'unique' => 0), 'location_id' => array('column' => 'location_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'price_id' => 1,
			'short_title' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'slug' => 'Lorem ipsum dolor sit amet',
			'contents' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'created' => '2010-04-23 23:42:01',
			'modified' => '2010-04-23 23:42:01',
			'meta_description' => 1,
			'meta_keywords' => 1,
			'location_id' => 1
		),
	);
}
?>