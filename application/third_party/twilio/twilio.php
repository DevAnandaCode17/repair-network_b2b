<?php 
require __DIR__ . '/autoload.php';
use Twilio\Rest\Client;

Class Twilio 
{
	public function __construct()
	{
        $this->CI = &get_instance();
        $this->CI->load->config('config');
    }

	public function sendsms($number = '', $message = '')
	{
		echo '<pre>';
		$twi_account_sid	= $this->CI->config->item('twi_account_sid');
		$twi_auth_token		= $this->CI->config->item('twi_auth_token');
		$twilio_number 		= $this->CI->config->item('twi_phone_no');
		$twi_env 			= $this->CI->config->item('twi_env');

		if($twi_env == 'dev' || $number == '')
		{
			$number = $this->CI->config->item('twi_dev_country_code').$this->CI->config->item('twi_dev_phone_no');
		}

		if($twi_env == 'dev' || $message == '')
		{
			$message = 'This message was sent from repair network';
		}

		$client = new Client($twi_account_sid, $twi_auth_token);
		$status = $client->messages->create($number, array('from' => $twilio_number, 'body' => $message, 'statusCallback' => "http://202.191.67.3/repair_network_crm/quotes/receivesmsstatus"));
		var_dump($status->sid);
		var_dump($status->status);
	}
}
?>