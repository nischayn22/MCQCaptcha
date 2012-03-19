<?php

/**
 * MCQCaptcha class
 *
 * @file
 * @author Nischay Nahata <nischayn22@gmail.com>
 * @ingroup Extensions
 */

class MCQ extends SimpleCaptcha {

	/** Validate a captcha response */
	function keyMatch( $answer, $info ) {
		return $answer == $info['answer'];
	}

	
	function getCaptcha() {
		$rand = mt_rand(1,2);
		$question = wfMsg( "question".$rand );
		$answer = wfMsg( "answer".$rand);
		$wgCaptchaQuestion = array( 'question' => $question, 'answer' => $answer );
		return $wgCaptchaQuestion;
	}

	function getMessage( $action ) {
		$name = 'questycaptcha-' . $action;
		$text = wfMsg( $name );
		# Obtain a more tailored message, if possible, otherwise, fall back to
		# the default for edits
		return wfEmptyMsg( $name, $text ) ? wfMsg( 'questycaptcha-edit' ) : $text;
	}
	 
	function showHelp() {
		global $wgOut;
		$wgOut->setPageTitle( wfMsg( 'captchahelp-title' ) );
		$wgOut->addWikiText( wfMsg( 'mcqcaptchahelp-text' ) );
		if ( CaptchaStore::get()->cookiesNeeded() ) {
			$wgOut->addWikiText( wfMsg( 'captchahelp-cookies-needed' ) );
		}
	}

	function getForm() {
		$captcha = $this->getCaptcha();
		$index = $this->storeCaptcha( $captcha );

		return "<p><label for=\"wpCaptchaWord\">Pick the correct Option Number</br>{$captcha['question']}</br></label>  " .
			Xml::element( 'input', array(
				'name' => 'wpCaptchaWord',
				'id'   => 'wpCaptchaWord',
				'tabindex' => 1 ) ) . // tab in before the edit textarea
			"</p>\n" .
			Xml::element( 'input', array(
				'type'  => 'hidden',
				'name'  => 'wpCaptchaId',
				'id'    => 'wpCaptchaId',
				'value' => $index ) );
	}
	
	
}
