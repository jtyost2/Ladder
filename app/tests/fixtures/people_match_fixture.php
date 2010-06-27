<?php
/* PeopleMatch Fixture generated on: 2010-06-27 14:06:06 : 1277668386 */
class PeopleMatchFixture extends CakeTestFixture {
	var $name = 'PeopleMatch';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'people_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'match_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'outcome_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'people_id' => array('column' => array('people_id', 'match_id', 'outcome_id'), 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'people_id' => 1,
			'match_id' => 1,
			'outcome_id' => 1
		),
	);
}
?>