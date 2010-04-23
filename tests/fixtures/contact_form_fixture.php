<?php
/* ContactForm Fixture generated on: 2010-04-15 10:04:04 : 1271329144 */
class ContactFormFixture extends CakeTestFixture {
	var $name = 'ContactForm';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

	var $records = array(
		array(
			'id' => 1,
			'created' => '2010-04-15 10:59:04',
			'modified' => '2010-04-15 10:59:04'
		),
	);
}
?>