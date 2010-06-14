<?php
/* Picture Fixture generated on: 2010-06-12 05:06:27 : 1276321887 */
class PictureFixture extends CakeTestFixture {
	var $name = 'Picture';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'picture_file_name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'page_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'picture_file_name' => 'Lorem ipsum dolor sit amet',
			'page_id' => 1,
			'created' => '2010-06-12 05:51:27'
		),
	);
}
?>