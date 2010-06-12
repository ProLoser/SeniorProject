<?php
class Picture extends AppModel {
	var $name = 'Picture';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Page'
	);
	
	var $actsAs = array(
		'UploadPack.Upload' => array(
			'picture' => array(
				'path' => ':webroot/upload/:style/:basename.:extension',
				'styles' => array(
					'thumb' => '80x80'
				)
			)
		),
	);
}
?>