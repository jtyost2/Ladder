<?php
 /**
 * TimeExtendedHelper Object Extended from CakePHP's TimeHelper
 *
 * Smartfield: CropInsight Application (http://www.smartfield.com/)
 * Copyright 2010, Smartfield, Inc. (http://www.smartfield.com/)
 *
 * All content expect where explicitly noted is the exclusive copyright of 
 * Smartfield, Inc. As such Smartfield reserves all rights and responsibilities 
 * associated with the content of this web application.
 *
 * @copyright     Copyright 2010, Smartfield, Inc. (http://www.smartfield.com/)
 * @link          http://www.smartfield.com/
 * @package       cropinsight
 * @license       All Rights Reserved (http://www.smartfield.com/contact/legal/copyright/)
 */
App::import('Helper', 'Time');
class TimeExtendedHelper extends TimeHelper {
/**
 * TIMEAGOINWORDS - passes through to the parent TimeHelper for time ago in words except where the time is null and returns 'unkown'
 *
 * @param $dateTime mixed - the time value to parse into words
 * @param $options array - the options to pass through to parent helper
 * @return string
 * @access public
 *
 */
	function timeAgoInWords($dateTime, $options = array('format'=>'F jS Y')) {
		if( (!$dateTime) || empty($dateTime) || ($dateTime == 0) || ($dateTime == "NULL")){
			return "unknown";
		} else {
			return parent::timeAgoInWords($dateTime, $options);
		}
	}

}
?>