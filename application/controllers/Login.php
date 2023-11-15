<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper(array('form','security','crm_helper'));
    }

	public function index()
	{
        if (isset($_SESSION["user_id"]) && isActive()) {
            redirect('/jobdetails', 'refresh');
        }
		$this->load->view('header/login');
		$this->load->view('content/login');
		$this->load->view('footer/login');
	}
    public function isloginuser()
    {
        $this->load->library('Custom_security');
        $security = new Custom_security();

        $username   = $this->input->post('username', TRUE);
        $password   = $this->input->post('strcrypt', TRUE);
        
        $username   = $this->security->xss_clean($username);
        $password   = $this->security->xss_clean($password);

        $username   = $security->sanitize_string($username);
        $password   = $security->sanitize_string($password);

        if ($this->user_model->get_user($username,$password)) {  
            $user = $this->user_model->get_user($username,$password);
            $session_data = array(                
                'user_id'           => $user['user_id'],
                'user_name'         => $user['user_name'],
                'user_group_id'     => $user['user_group_id'],
                'user_group_name'   => $user['user_group_name'],
                'user_first_name'   => $user['user_first_name'],
                'user_last_name'    => $user['user_last_name'],
                'special_permission'=> $user['special_permission'],
				'anl_access' => $user['anl_access']
            );
            $this->session->set_userdata($session_data);

            $logname = $user['user_first_name'].' '.$user['user_last_name'].' ('.$user['user_group_name'].') has logged in to the CRM';
            $this->user_model->setAuditLog($logname, false);
        }
    }

    public function loginrequired()
    {
        $this->load->view('header/login');
        $this->load->view('content/login_error');
        $this->load->view('footer/login');
    }
    
    public function logout()
    {
        $this->load->view('header/login');

        if (!empty($this->session->userdata('user_id'))) {
            $user = (array)$this->user_model->getUserFullDetails($_SESSION["user_id"]);
        } else {
            redirect('/loginrequired', 'refresh');
        }
        $logname = ($user['user_first_name'] ? $user['user_first_name'] : 'Session Expired') . ' ' . ($user['user_last_name'] ? $user['user_last_name'] : 'Session Expired') . ' (' . ($user['user_group_name'] ? $user['user_group_name'] : 'Session Expired') . ') has logged out of the CRM';
        $this->user_model->setAuditLog($logname, false);

        $this->session->unset_userdata('user_id');
        $this->load->view('content/logout');
        $this->load->view('footer/login');
    }

    public function unauthorizedaccess()
    {
        $this->load->helper('url');

        $allowed_ips = $this->config->item('allowed_ips');

        if(in_array($this->getrealipaddress(), $allowed_ips) && $this->uri->segment(2) == 'unauthorizedaccess')
        {
            redirect('/login', 'refresh');
        }

        $this->load->view('header/login');
        $this->session->unset_userdata('user_id');
        $this->load->view('content/youarenotauthorized');
        $this->load->view('footer/login');
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
