<?php
class Security_check {

    public function validating_ips()
    {     
    	$CI = &get_instance();

    	$CI->load->helper('url');

        $allowed_ips = $CI->config->item('allowed_ips');

        if((!in_array($this->getrealipaddress(), $allowed_ips)) && ($CI->uri->segment(2) != 'unauthorizedaccess') && (!in_array($CI->uri->segment(1), array('v1','api', 'scapi', 'cmgapi', 'covercompare','ferreapi','covidapi','mbdapi','appliancecoverpyfapi', 'mobileappapi')) ))
    	{
    		redirect('/login/unauthorizedaccess', 'refresh');
    		exit;
    	}
    }

    private function getrealipaddress()
	{
		if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
		{
			$ip=$_SERVER['HTTP_CLIENT_IP'];
		}
		elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
		{
			$ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
		}
		else
		{
			$ip=$_SERVER['REMOTE_ADDR'];
		}
		return $ip;
	}

}
?>