<?php
class Destination extends AppModel {
	var $name = 'Destination';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'TripPage' => array(
			'className' => 'TripPage',
			'foreignKey' => 'destination_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Trip' => array(
			'className' => 'Trip',
			'foreignKey' => 'destination_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
?>