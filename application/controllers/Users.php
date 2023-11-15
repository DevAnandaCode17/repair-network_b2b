<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() 
    {
        parent::__construct();
        $this->load->model('user_model');

        $uri = uri_string();

        if (strpos($uri, 'ajax') !== false && ($this->session->userdata('user_id'))==null) {
            echo 'sessionout';exit;
        }

        if (!isset($_SESSION["user_id"])) {
            redirect('loginrequired', 'refresh');
        }

        $this->load->helper('form');
        $this->load->helper('security');
    }

	public function index()
	{
        if (!in_array($_SESSION['user_group_id'] ,array('A','B'))) {
            redirect('/jobdetails', 'refresh');
        }
        $permissions = $this->getpermissions();
        $data['usergroups'] = $this->user_model->getusergroups();
        $this->load->view('header/common', $permissions);
		$this->load->view('content/viewusers', $data);
		$this->load->view('footer/common');
	}

    public function add()
    {
        if (!in_array($_SESSION['user_group_id'] ,array('A','B'))) {
            redirect('/jobdetails', 'refresh');
        }
        $permissions = $this->getpermissions();
        $data['usergroups'] = $this->user_model->getusergroups();  
        $this->load->view('header/common', $permissions);
        $this->load->view('content/adduser', $data);
        $this->load->view('footer/common');
    }

    public function ajaxviewuserspage()
    {
        $pages      = '';
        $search     = isset($_REQUEST['search'])?$_REQUEST['search']:'';
        $page       = isset($_REQUEST['page'])?$_REQUEST['page']:0;
        $pagecount  = isset($_REQUEST['pagecount'])?$_REQUEST['pagecount']:10;
        $offset     = $page*$pagecount;
        $search_key = '';
        $search_key = array(
            "search_name" => isset($_REQUEST['search_name'])?$_REQUEST['search_name']:'', 
            "user_group_id" => isset($_REQUEST['user_group_id'])?$_REQUEST['user_group_id']:''
        );
        
        $totalrecords   = $this->user_model->getusers($search_key, true);  

        if($totalrecords > 0)
        {
            $users = $this->user_model->getusers($search_key, false, $pagecount, $offset);
            $pages = ceil($totalrecords/$pagecount);            
        }        

        $html = '<div class="box-header with-border">';
        $html.= '<h3 class="box-title">View users</h3>';
        $html.= '</div>';

        $html.= '<div class="box-body">';
        $html.= '<table class="table table-bordered">';
        $html.= '<tr>';
        $html.= '<th style="width: 10px">#</th>';
        $html.= '<th>User Name</th>';
        $html.= '<th>First Name</th>';
        $html.= '<th>Last Name</th>';
        $html.= '<th>User Group</th>';
        $html.= '<th>User Active</th>';
        $html.= '<th>User Registered</th>';
        $html.= '<th>Manage</th>';
        $html.= '</tr>';
       
        if(!empty($users))
        {
            //$delete_user = $this->getPermission('delete_user');
            $delete_user = true;
            foreach ($users as $key => $user) 
            {        
                $html.= '<tr>';
                $html.= '<td>'.($offset+$key+1).'</td>';
                $html.= '<td>';
                $html.= (isset($user->user_name)?$user->user_name:'');
                $html.= '</td>';
                $html.= '<td>';
                $html.= (isset($user->user_first_name)?$user->user_first_name:'');
                $html.= '</td>';
                $html.= '<td>';
                $html.= (isset($user->user_last_name)?$user->user_last_name:'');
                $html.= '</td>';
                $html.= '<td>';
                $html.= (isset($user->user_group_name)?$user->user_group_name:'');
                $html.= '</td>';
                $html.= '<td>';
                if($user->user_active==1){
                    $html.= '<small class="label bg-green">Active</small>';}
                else{
                    $html.= '<small class="label bg-red">Inactive</small>';}
                $html.= '</td>';
                $html.= '<td>'.$user->user_registered.'</td>';
                $html.= '<td style="width: 150px">';
                if($delete_user == true){
                    $html.= '<a href=" '.base_url().'users/viewuser/'.$user->user_id.' " > <button type="button" class="btn btn-xs btn-flat btn-primary">View</button> <a/>&nbsp';
                }
                 
                if ($user->user_active == 1) {
                    $html.='<button type="button" class="btn btn-xs btn-flat btn-danger" onclick="userStatusUpdate('.$user->user_id.', 0, this)">DEACTIVATE</button>'; 
                } 

                if ($user->user_active == 0) {
                    $html.='<button type="button" class="btn btn-xs btn-flat btn-success" onclick="userStatusUpdate('.$user->user_id.', 1, this)">ACTIVATE</button>';
                } 
                // if($delete_user == true){
                //     $html.= '<button type="button" class="btn btn-xs btn-flat btn-danger" onclick="deleteuser('.$user->user_id.', this)">Delete</button>';
                // }
                $html.= '</td>';
                $html.= '</tr>';
            }
        }
        else
        {
            $html.= '<tr>';
            $html.= '<td colspan="11" style="text-align: center">No Users Found</td>';
            $html.= '</tr>';              
        }

        $html.= '</table>';
        $html.= '</div>';

        $html.= '<div class="box-footer clearfix">';   

        if($pages > 0)
        {
            $html.= '<ul class="pagination pagination-sm no-margin pull-right">';
            $loadpaginationprev = '';
            if(($page+1) == 1)
                $loadpaginationprev = '';
            else
                $loadpaginationprev = 'onclick="viewusers('.$pagecount.','.($page-1).');"';
            $html.= '<li><a href="javascript:void(0)" '.$loadpaginationprev.'>&laquo;</a></li>';

            for($i=1; $i<=$pages; $i++)
            {
                $showlink=false;
                $showlink=$this->paginationforhugerecords($pages,$i,$page+1);
                if($showlink==true)    
                {
                    if($i == ($page+1))
                        $active = ' class="active"';
                    else
                        $active = '';
                    $html.= '<li><a class="'.$active.'" href="javascript:void(0)" onclick="viewusers('.$pagecount.','.($i-1).',\'\');">'.$i.'</a></li>';
                }
            }
            $loadpaginationnext = '';
            if(($page+1) == $pages)
                $loadpaginationnext = '';
            else
                $loadpaginationnext = 'onclick="viewusers('.$pagecount.','.($page+1).');"';
            $html.= '<li><a href="javascript:void(0)" '.$loadpaginationnext.'>&raquo;</a></li>';
            $html.= '</ul>';
        }        

        $html.= '</div>';

        echo $html; 
    }

    public function createuser()
    {
        $this->load->library('Custom_security');
        $security = new Custom_security();

        $userdata   = $_POST;

        $user_name = $this->input->post('user_name');
        $user_name = $this->security->xss_clean($user_name);
        $user_name = $security->sanitize_string($user_name);
        $userdata['user_name'] = $user_name;

        $user_first_name = $this->input->post('user_first_name');
        $user_first_name = $this->security->xss_clean($user_first_name);
        $user_first_name = $security->sanitize_string($user_first_name);
        $userdata['user_first_name'] = $user_first_name;

        $user_last_name = $this->input->post('user_last_name');
        $user_last_name = $this->security->xss_clean($user_last_name);
        $user_last_name = $security->sanitize_string($user_last_name);
        $userdata['user_last_name'] = $user_last_name;

        $user_email = $this->input->post('user_email');
        $user_email = $this->security->xss_clean($user_email);
        $user_email = $security->sanitize_string($user_email);
        $userdata['user_email'] = $user_email;

        $user_phone = $this->input->post('user_phone');
        $user_phone = $this->security->xss_clean($user_phone);
        $user_phone = $security->sanitize_string($user_phone);
        $userdata['user_phone'] = $user_phone;

        $user_group_id = $this->input->post('user_group_id');
        $user_group_id = $this->security->xss_clean($user_group_id);
        $user_group_id = $security->sanitize_string($user_group_id);
        $userdata['user_group_id'] = $user_group_id;

        $user_pass = $this->input->post('user_pass');
        $user_pass = $this->security->xss_clean($user_pass);
        $user_pass = $security->sanitize_string($user_pass);
        $userdata['user_pass'] = $user_pass;

        $exists     = $this->user_model->checkuserexists($userdata['user_name']);

        if($exists == false)
        {
            $users      = $this->user_model->createuser($userdata);

            if($users != false)
                echo 'inserted';
            else
                echo 'failed';
        }
        else
        {
            echo 'exists';
        }
    }



    public function paginationforhugerecords($pagecount,$i,$currentpage)
    {
        $showlink=false;
        
        if($currentpage>$i && ($currentpage-$i)>10000)
        {
            if($i%10000==0)
                $showlink=true;
        }
        elseif($currentpage<$i && ($i-$currentpage)>10000)
        {
            if($i%10000==0)
                $showlink=true;
        }
        elseif($currentpage>$i && ($currentpage-$i)>5000)
        {
            if($i%5000==0)
                $showlink=true;                    
        }
        elseif($currentpage<$i && ($i-$currentpage)>5000)
        {
            if($i%5000==0)
                $showlink=true;
        }
        elseif($currentpage>$i && ($currentpage-$i)>1000)
        {
            if($i%1000==0)
                $showlink=true;                    
        }
        elseif($currentpage<$i && ($i-$currentpage)>1000)
        {
            if($i%1000==0)
                $showlink=true;
        }
        elseif($currentpage>$i && ($currentpage-$i)>500)
        {
            if($i%500==0)
                $showlink=true;                    
        }
        elseif($currentpage<$i && ($i-$currentpage)>500)
        {
            if($i%500==0)
                $showlink=true;
        }
        /*elseif($currentpage>$i && ($currentpage-$i)>200)
        {
            if($i%200==0)
                $showlink=true;                    
        }
        elseif($currentpage<$i && ($i-$currentpage)>200)
        {
            if($i%200==0)
                $showlink=true;
        }*/
        elseif($currentpage>$i && ($currentpage-$i)>100)
        {
            if($i%100==0)
                $showlink=true;                    
        }
        elseif($currentpage<$i && ($i-$currentpage)>100)
        {
            if($i%100==0)
                $showlink=true;
        }
        elseif($currentpage>$i && ($currentpage-$i)>75)
        {
            if($i%75==0)
                $showlink=true;                    
        }
        elseif($currentpage<$i && ($i-$currentpage)>75)
        {
            if($i%75==0)
                $showlink=true;
        }
        elseif($currentpage>$i && ($currentpage-$i)>50)
        {
            if($i%50==0)
                $showlink=true;                    
        }
        elseif($currentpage<$i && ($i-$currentpage)>50)
        {
            if($i%50==0)
                $showlink=true;
        }
        elseif($currentpage>$i && ($currentpage-$i)>5)
        {
            if($i%10==0)
                $showlink=true;                    
        }
        elseif($currentpage<$i && ($i-$currentpage)>5)
        {
            if($i%10==0)
                $showlink=true;
        }
        elseif((($currentpage-$i)<=5 && ($currentpage-$i)>0) || (($i-$currentpage)<=5 && ($i-$currentpage)>=0))
        {
            $showlink=true;
            
        }
        return $showlink;
    }

    public function deleteuser()
    {
        $user_id = isset($_REQUEST['user_id'])?$_REQUEST['user_id']:'';

        if($user_id != '')
        {
            $status = $this->user_model->deleteuser($user_id);

            if($status === true)
            {
                echo 'deleted';
            }
        }
    }

    public function profile()
    {
        $data['user'] = $this->user_model->getUserFullDetails($_SESSION["user_id"]);
        $permissions = $this->getpermissions();
        $this->load->view('header/common', $permissions);
        $this->load->view('content/profile',$data);
        $this->load->view('footer/common');
    }

    public function changepassword()
    {   
        if (!in_array($_SESSION['user_group_id'] ,array('A','B'))) {
            redirect('/jobdetails', 'refresh');
        }
        $data['user'] = $this->user_model->getUserdetailsbyId($_SESSION["user_id"]);
        $permissions = $this->getpermissions();
        $this->load->view('header/common', $permissions);
        $this->load->view('content/changepassword',$data);
        $this->load->view('footer/common');
    }

    public function updateUser($user_id)
    {
        $data['user'] = $this->user_model->getUserFullDetails($user_id);
        $permissions = $this->getpermissions();
        $this->load->view('header/common', $permissions);
        $this->load->view('content/updateProfile',$data);
        $this->load->view('footer/common');
    }

    public function ajaxUpdateProfile()
    {
        $editProfile = array(
            'first_name'  => $this->input->post('firstname'),
            'last_name'   => $this->input->post('lastname'),
            'email'       => $this->input->post('email'),
            'phone'       => $this->input->post('phone'),
            'user_id'     => $_SESSION['user_id'],
        );

        $return = $this->user_model->editProfile($editProfile);

        if($return == true)
            echo 'success##';
        else
            echo 'failed';
    }

    public function ajaxUpdatePassword()
    {
        $editPassword = array(
            'new_password'  => $this->input->post('confirm_password'),
            'user_id'       => $_SESSION['user_id'],
        );

        $return = $this->user_model->editPassword($editPassword);

        if($return == true)
            echo 'success##';
        else
            echo 'failed';
    }
    
    public function viewuser($user_id)
    {
        if (!in_array($_SESSION['user_group_id'] ,array('A','B'))) {
            redirect('/jobdetails', 'refresh');
        }
        $data['user'] = $this->user_model->getuserdatawithusergroup($user_id);
        $data['user_group'] = $this->user_model->getusergroups();
        $permissions = $this->getpermissions();
        $this->load->view('header/common', $permissions);
        $this->load->view('content/viewuser', $data);
        $this->load->view('footer/common');
    }


    public function update_userdetails()
    {
        $user_id = $user_name = $user_fname = $user_lname = $email = $phone = $user_group = $error = "";
        $user_id       = $this->validate_user_data( $this->input->post('user_id') );
        $user_name     = $this->validate_user_data( $this->input->post('user_name') );
        $user_fname    = $this->validate_user_data( $this->input->post('user_first_name') );
        $user_lname    = $this->validate_user_data( $this->input->post('user_last_name') );
        $email         = $this->validate_user_data( $this->input->post('user_email') );
        $phone         = $this->validate_user_data( $this->input->post('user_phone') );
        $user_group    = $this->validate_user_data( $this->input->post('user_group_id') );

        $errorflag = 0;

        $error ='<ul>';

        if( 
            empty($user_id) || 
            empty($user_name) || 
            empty($user_fname) || 
            empty($user_group) 
        )
        {
            $errorflag = 1;
            $error.='<li> Field cannot be null</li>';
        }

        if($this->user_model->check_user_id_edit($user_id) == 0)
        {
            $errorflag = 1;
            $error.='<li> Invalid User ID </li>';
        }

        if(preg_match('/[0-9]+/', $user_fname))
        {
            $errorflag = 1;
            $error.='<li> Enter a valid first name </li>';
        }

        if(preg_match('/[0-9]+/', $user_lname))
        {
            $errorflag = 1;
            $error.='<li> Enter a valid last name </li>';
        }

        if($email && !filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $errorflag = 1;
            $error.= '<li>Invalid email format</li>'; 
        }

        if($phone && !preg_match('/[0-9]{10}+/', $phone))
        {
            $errorflag = 1;
            $error.= '<li>Enter a valid Phone Number </li>';
        }

        $error.= '</ul>';

        if($errorflag != 1)
        {
            $data_array = array($user_id,$user_name,$user_fname,$user_lname,$email,$phone,$user_group);
            $this->user_model->save_user_details($data_array); 
            echo 'success'; 
        }
        else 
        {
            echo $error; 
        } 
    }


    function validate_user_data($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    public function updatePassword()
    {  
        if (!in_array($_SESSION['user_group_id'] ,array('A','B'))) {
            redirect('/jobdetails', 'refresh');
        }
        $res = new \stdClass();
        $user_id = $this->validate_user_data($this->input->post('user_id'));
        $editPassword =  $this->input->post('user_pass');
        $data =md5($editPassword);
        $response = $this->user_model->updatePassword($data,$user_id);

        if ($response) {
            $res->status = "success";
			$res->message = "Your password updated successfully.";
			print_r(json_encode($res));
			exit;
        } else {
            $res->status = "error";
			$res->message = "Something went wrong.Please try again";
			print_r(json_encode($res));
			exit;
        }
    }
    public function deactive_user(){
        if (!in_array($_SESSION['user_group_id'] ,array('A','B'))) {
            redirect('/jobdetails', 'refresh');
        }
         $user_id = $this->input->post('user_id');
         $status =  $this->input->post('status');
        if($status==0){
            $statusvalue = 1;
         }
         else{
            $statusvalue = 0;
         }
        $return = $this->user_model->deactive_user($user_id,$statusvalue);
        if($return ){
            echo 'success'; exit;
        }else{
            echo 'error'; exit;
        } 
    }
    public function updateStatus()
    {
        if (!in_array($_SESSION['user_group_id'] ,array('A','B'))) {
            redirect('/jobdetails', 'refresh');
        }

        $user_id = $this->input->post('user_id');
        $status =  $this->input->post('status');

        $return = $this->user_model->updateUserStatus($user_id, $status);

        if ($return ) {
            echo 'success'; 
            exit;
        } else {
            echo 'error'; 
            exit;
        } 
    }
}

