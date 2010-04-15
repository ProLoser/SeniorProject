<?php
class LineItem extends AppModel {
	var $name = 'LineItem';
	var $validate = array(
		'booking_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'price_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Booking' => array(
			'className' => 'Booking',
			'foreignKey' => 'booking_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Price' => array(
			'className' => 'Price',
			'foreignKey' => 'price_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>