<?php
/* PeopleSport Fixture generated on: 2010-06-27 14:06:16 : 1277668396 */
class PeopleSportFixture extends CakeTestFixture {
	var $name = 'PeopleSport';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'people_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'sports_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'person_title' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'people_id' => array('column' => 'people_id', 'unique' => 0), 'sports_id' => array('column' => 'sports_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'people_id' => 1,
			'sports_id' => 1,
			'person_title' => 'Lorem ipsum dolor sit amet'
		),
	);
}
?>