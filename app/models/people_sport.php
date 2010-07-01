<?php
class PeopleSport extends AppModel {
	var $name = 'PeopleSport';
	var $validate = array(
		'people_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sports_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'person_title' => array(
			'notempty' => array(
				'rule' => array('notempty'),
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
		'People' => array(
			'className' => 'People',
			'foreignKey' => 'people_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Sports' => array(
			'className' => 'Sports',
			'foreignKey' => 'sports_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	function find_sports_by_person($person_id = null){
		$person_tied_to_sport = $this->find('all', array(
			'fields' => array('PeopleSport.sports_id'),
			'conditions' => array('PeopleSport.people_id' => $person_id)
		));
		
		$return_array = array();
		if(!empty($person_tied_to_sport)):
			foreach($person_tied_to_sport as $sport):
				$return_array[] = $sport['PeopleSport']['sports_id'];
			endforeach;
		endif;
		
		return $return_array;
	}
}
?>