<?php

/**
 * A question-based captcha plugin.
 * @file
 * @ingroup Extensions
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	exit;
}
$wgExtensionMessagesFiles['QuestyCaptcha'] = dirname( __FILE__ ) . '/QuestyCaptcha.i18n.php';
$wgAutoloadClasses['MCQ'] = dirname( __FILE__ ) . '/MCQ.class.php';
$wgExtensionMessagesFiles['MCQ'] = dirname( __FILE__ ) . '/MCQ.i18n.php';

?>