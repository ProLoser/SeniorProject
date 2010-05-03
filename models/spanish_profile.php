<?php
class SpanishProfile extends AppModel {
	var $name = 'SpanishProfile';
	var $validate = array(
		'proficiency_level' => array(
			'notempty' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter a proficiency level.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'homestay' => array(
			'boolean' => array(
				'rule' => array('boolean'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'volunteer_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'booking_id' => array(
			'numeric' => array(
				//'rule' => array('numeric'),
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
		'Volunteer' => array(
			'className' => 'Volunteer',
			'foreignKey' => 'volunteer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Booking' => array(
			'className' => 'Booking',
			'foreignKey' => 'booking_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>