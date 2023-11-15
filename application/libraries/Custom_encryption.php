<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Custom_encryption {

	public function decrypt($data) 
    {
        $method = 'AES-256-CBC';
        $key = hash('sha256', 'qJB0rGtIn5UB1xG04efyCp');
        $data = base64_decode($data);
        $ivSize = openssl_cipher_iv_length($method);
        $iv = substr($data, 0, $ivSize);
        $data = openssl_decrypt(substr($data, $ivSize), $method, $key, OPENSSL_RAW_DATA, $iv);
        return $data;
    }

    public function encrypt( $data) 
	{
	    $method = 'AES-256-CBC';
	    $key = hash('sha256', 'qJB0rGtIn5UB1xG04efyCp');
	    $ivSize = openssl_cipher_iv_length($method);
	    $iv = openssl_random_pseudo_bytes($ivSize);
	    $encrypted = openssl_encrypt($data, $method, $key, OPENSSL_RAW_DATA, $iv);
	    $encrypted = base64_encode($iv . $encrypted);
	    return $encrypted;
	}
	
}

?>