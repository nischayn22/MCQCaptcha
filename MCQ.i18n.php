<?php
/**
 * Internationalisation for MCQ extension
 *
 * @file
 * @ingroup Extensions
 */

$messages = array();

/** English
 * @author Nischay Nahata
 */
$messages['en'] = array(

	'mcqcaptcha-desc' => 'MCQ CAPTCHA generator for Confirm Edit',
	'mcqcaptcha-addurl' => 'Your edit includes new external links.
To help protect against automated spam, please answer the question that appears below ([[Special:Captcha/help|more info]]):',
	'mcqcaptcha-badlogin' => 'To help protect against automated password cracking, please answer the question that appears below ([[Special:Captcha/help|more info]]):',
	'mcqcaptcha-createaccount' => 'To help protect against automated account creation, please answer the question that appears below ([[Special:Captcha/help|more info]]):',
	'mcqcaptcha-create' => 'To create the page, please answer the question that appears below ([[Special:Captcha/help|more info]]):',
	'mcqcaptcha-edit' => 'To edit this page, please answer the question that appears below ([[Special:Captcha/help|more info]]):',
	'mcqcaptcha-sendemail' => 'To help protect against automated spamming, please answer the question that appears below ([[Special:Captcha/help|more info]]):',
	
	'mcqcaptchahelp-text' => 'Answer the Question using Common Sense',
	/** 
	*update the question number in the MCQ.class.php when adding new questions
	*/
	'question1' => 'Which of the following is an Animal 1.Dog 2.Carrot 3.Bridge 4.Ship',
	'answer1' => '1',
	'question2' => 'We pray to 1.Time 1.God 3.Lion 4.Tomato',
	'answer2' => '2',
);
