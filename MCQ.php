<?php

/**
 * A question-based captcha plugin.
 * @file
 * @ingroup Extensions
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}
$wgAutoloadClasses['MCQ'] = dirname( __FILE__ ) . '/MCQ.class.php';
$wgExtensionMessagesFiles['MCQ'] = dirname( __FILE__ ) . '/MCQ.i18n.php';

?>