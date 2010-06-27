<?php
/* Match Fixture generated on: 2010-06-27 14:06:37 : 1277668237 */
class MatchFixture extends CakeTestFixture {
	var $name = 'Match';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'sport_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL),
		'date_occured' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'sport_id' => array('column' => 'sport_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'sport_id' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'date_occured' => '2010-06-27 14:50:37',
			'created' => '2010-06-27 14:50:37',
			'modified' => '1277668237'
		),
	);
}
?>