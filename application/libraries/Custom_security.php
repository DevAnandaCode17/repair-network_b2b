<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Custom_security {

	/**
	 * List of sanitize strings
	 *
	 * @var	array
	 */
	private $bad_chars =	array(
		'../', 
		'<!--', 
		'-->', 
		'<', 
		'>',
		"'", 
		'"', 
		'&', 
		'$', 
		'#',
		'{', 
		'}', 
		'[', 
		']', 
		'(', 
		')', 
		'=',
		';', 
		'?',
		'|', 
		'%20', 
		'%22',
		'%3c',		// <
		'%253c',	// <
		'%3e',		// >
		'%0e',		// >
		'%28',		// (
		'%29',		// )
		'%2528',	// (
		'%26',		// &
		'%24',		// $
		'%3f',		// ?
		'%3b',		// ;
		'%3d'		// =
	);

	/**
	 * Sanitize String
	 *
	 * @param	string	$str
	 * @return	string
	 */
	public function sanitize_string($str)
	{
		$bad = $this->bad_chars;
		$str = remove_invisible_characters($str, FALSE);
		$str = str_replace($bad, '', $str);
		$str = stripslashes($str);
		$str = filter_var($str, FILTER_SANITIZE_STRING);
		return $str;
	}

	/**
	 * Sanitize Email
	 *
	 * @param	string	$str
	 * @return	string
	 */
	public function sanitize_email($str)
	{
		$str = trim($str);
		$str = filter_var($str, FILTER_VALIDATE_EMAIL);
		return $str;
	}

}

?>