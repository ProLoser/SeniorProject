<?php
class AddonCombination extends AppModel {
	var $name = 'AddonCombination';
	var $validate = array(
		'base_combination_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'addon_id' => array(
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
		'BaseCombination' => array(
			'className' => 'BaseCombination',
			'foreignKey' => 'base_combination_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Addon' => array(
			'className' => 'Addon',
			'foreignKey' => 'addon_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>