<?php
class user_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
    }

    public function get_user($username, $password)
    {        
        $this->db->where('user_name', $username); //username check
        $query = $this->db->get('tbl_users');
        if($query->num_rows() > 0)
        {   
            $this->db->select('user_active');
            $this->db->select('user_group_active');
            $this->db->from('tbl_users a');
            $this->db->join('tbl_user_groups b', 'b.user_group_id=a.user_group_id');
            $this->db->where('a.user_name', $username);
            $this->db->where('a.user_pass', $password);
            $query = $this->db->get();
            
            if($query->num_rows() > 0)
            {
                $user_status= (array)$query->row();

                if(($user_status['user_active'])!=1)
                {
                    echo "Not an active user"; die;
                }
                elseif (($user_status['user_group_active'])!=1) 
                {
                    echo "Not from an active user groupe"; die;
                }
                else
                {
                    $this->db->select('a.user_name, a.user_first_name, a.user_last_name, a.user_id, a.user_group_id, b.user_group_name,a.special_permission, a.anl_access, a.user_active');
                    $this->db->from('tbl_users a');
                    $this->db->join('tbl_user_groups b', 'b.user_group_id=a.user_group_id','left');
                    $this->db->where('a.user_name', $username);
                    $this->db->where('a.user_pass', $password);
                    $this->db->where('a.user_active', 1);
                    $this->db->where('b.user_group_active',1);
                    $query = $this->db->get();
                    $user_status= (array)$query->row();
                    if($query->num_rows() > 0)
                    {
                        return $user_status;
                    }
                }
            }
            else
            {
               echo "Invalid password"; exit;
            }         
        }
        else
        {
           echo "Invalid Username Given"; exit;
        }
    }

    public function getUserdetailsbyId($user_id)
    {
        $this->db->where('user_id',$user_id);
        $query = $this->db->get('tbl_users');
        return $query->row();
    }

    public function getUserFullDetails($user_id){
        $this->db->select('user.user_name, user.user_first_name, user.user_last_name, user.user_active, user.user_registered, user.user_email, user.user_phone, group.user_group_name');
        $this->db->from('tbl_users user');
        $this->db->join('tbl_user_groups group', 'group.user_group_id = user.user_group_id', 'left');
        $this->db->where('user.user_id', $user_id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getusergroups()
    {
        $this->db->select('user_group_id, user_group_name');
        $this->db->from('tbl_user_groups');
        $this->db->where('user_group_active', '1');
        $this->db->where_not_in('user_group_id', 'A');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getusers($search_key, $fetchcount = false, $pagesize = '', $offset = '')
    {
        $query = 'SELECT usr.user_id, usr.user_name, usr.user_first_name, usr.user_last_name, usr.user_active, usr.user_registered, usr.user_email, usr.user_phone, grp.user_group_name, grp.user_group_order FROM tbl_users usr LEFT JOIN tbl_user_groups grp ON grp.user_group_id = usr.user_group_id WHERE (grp.user_group_order > (SELECT grp.user_group_order FROM tbl_users usr LEFT JOIN tbl_user_groups grp ON grp.user_group_id = usr.user_group_id WHERE usr.user_id = \''.($_SESSION["user_id"]).'\')) ';
        
        if(
            (isset($search_key['search_name']) && $search_key['search_name'] != '') || 
            (isset($search_key['user_group_id']) && $search_key['user_group_id'] != '')
        )
        {
            $where = 'AND (';
            if($search_key['search_name'] != '')
            {
                $where.= 'usr.user_name like "%'.$search_key['search_name'].'%" OR ';
                $where.= 'usr.user_first_name like "%'.$search_key['search_name'].'%" OR ';
                $where.= 'usr.user_last_name like "%'.$search_key['search_name'].'%" OR ';
                $where = rtrim($where, ' OR ');
                
            }
            if($search_key['search_name'] != '' && $search_key['user_group_id'] != '')
            {
                $where.= ') AND (';
            }
            if($search_key['user_group_id'] != '')
                $where.= 'usr.user_group_id like "%'.$search_key['user_group_id'].'%" ';

            $where.= ')';            

            $query.= $where; 
        }

        if($fetchcount == true)
        {
            $result = $this->db->query($query);
            return $result->num_rows();
        }

        $order = ' ORDER BY grp.user_group_order ASC, usr.user_id DESC ';
        $query.= $order; 
        if($pagesize != '' && $offset !== '')
        {
            $limit = ' LIMIT '.$offset.', '.$pagesize.' ';
            $query.= $limit; 
        }

        $result = $this->db->query($query);

        /*var_dump($this->db->last_query());exit;*/

        if($result->num_rows() != 0)
        {
            return $result->result();
        }
        else
        {
            return false;
        }
    }

    public function deleteuser($user_id)
    {
        $user1 = (array)$this->getUserFullDetails($_SESSION["user_id"]);
        $user2 = (array)$this->getUserFullDetails($user_id);

        $result = $this->db->delete('tbl_users', array('user_id' => $user_id));

        $logname = $user1['user_first_name'].' '.$user1['user_last_name'].' ('.$user1['user_group_name'].') has deleted the user '.$user2['user_first_name'].' '.$user2['user_last_name'].' ('.$user2['user_group_name'].')';
        $this->setAuditLog($logname);

        return $result;
    }

    public function createuser($user)
    {
        $user1 = (array)$this->getUserFullDetails($_SESSION["user_id"]);

        $querydata = array(
            'user_name' => $user['user_name'],
            'user_first_name' => $user['user_first_name'],
            'user_last_name' => $user['user_last_name'],
            'user_pass' => md5($user['user_pass']),
            'user_group_id' => $user['user_group_id'],
            'user_active' => 1,
            'user_registered' => date('Y-m-d H:i:s'),
            'user_email' => $user['user_email'],
            'user_phone' => $user['user_phone'],
            'user_first_log' => 1
        );

        $result = $this->db->insert('tbl_users', $querydata);

        $last_query = $this->db->last_query();

        $insert_id = $this->db->insert_id();

        $user2 = (array)$this->getUserFullDetails($insert_id);

        $logname = $user1['user_first_name'].' '.$user1['user_last_name'].' ('.$user1['user_group_name'].') has created the user '.$user2['user_first_name'].' '.$user2['user_last_name'].' ('.$user2['user_group_name'].')';

        $this->setAuditLog($logname, false, $last_query);

        if($result == false)
            return false;
        else
            return $insert_id;
    }

    public function checkuserexists($user_name)
    {
        $this->db->where('user_name',$user_name);
        $query = $this->db->get('tbl_users');
        
        if($query->num_rows() != 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    public function editProfile($editProfile)
    {
        $user1 = (array)$this->getUserFullDetails($_SESSION["user_id"]);
        $user2 = (array)$this->getUserFullDetails($editProfile['user_id']);

        $data = array(
            'user_first_name'   => $editProfile['first_name'],
            'user_last_name'    => $editProfile['last_name'],
            'user_email'        => $editProfile['email'],
            'user_phone'        => $editProfile['phone'],
        );

        $this->db->where('user_id', $editProfile['user_id']);
        $result = $this->db->update('tbl_users', $data);

        if($_SESSION["user_id"] != $editProfile['user_id'])
            $logname = $user1['user_first_name'].' '.$user1['user_last_name'].' ('.$user1['user_group_name'].') has updated the details of the user '.$user2['user_first_name'].' '.$user2['user_last_name'].' ('.$user2['user_group_name'].')';
        else
            $logname = $user1['user_first_name'].' '.$user1['user_last_name'].' ('.$user1['user_group_name'].') has updated the user details';

        $this->setAuditLog($logname);

        return $result;
    }

    public function editPassword($editPassword)
    {
        $user1 = (array)$this->getUserFullDetails($_SESSION["user_id"]);

        $data = array(
            'user_pass'  => md5($editPassword['new_password']),
        );

        $this->db->where('user_id', $editPassword['user_id']);
        $result = $this->db->update('tbl_users', $data);

        $logname = $user1['user_first_name'].' '.$user1['user_last_name'].' ('.$user1['user_group_name'].') has updated the password';

        $this->setAuditLog($logname);

        return $result;
    }
    public function getuserdatawithusergroup($user_id)
    {
        $this->db->select('user.user_id, user.user_name, user.user_first_name, user.user_last_name, user.user_active, user.user_registered, user.user_email, user.user_phone, user.user_group_id, group.user_group_name');
        $this->db->from('tbl_users user');
        $this->db->join('tbl_user_groups group', 'group.user_group_id = user.user_group_id', 'left');
        $this->db->where('user_id',$user_id);
        $query = $this->db->get();
        return $query->row();
    }

    public function check_user_id_edit($user_id)
    {
        $this->db->where('user_id', $user_id);
        $num_rows = $this->db->count_all_results('tbl_users');
        return $num_rows;
    }

    public function save_user_details($data)
    {
        $user1 = (array)$this->getUserFullDetails($_SESSION["user_id"]);
        $user2 = (array)$this->getUserFullDetails($data[0]);

         $ins = array(
            'user_name'         => $data[1],
            'user_first_name'   => $data[2],
            'user_last_name'    => $data[3],
            'user_email'        => $data[4],
            'user_phone'        => $data[5],
            'user_group_id'     => $data[6]
         );

         $this->db->where('user_id',$data[0]);
         $this->db->update('tbl_users',$ins); 

         if($_SESSION["user_id"] != $data[0])
            $logname = $user1['user_first_name'].' '.$user1['user_last_name'].' ('.$user1['user_group_name'].') has updated the details of the user '.$user2['user_first_name'].' '.$user2['user_last_name'].' ('.$user2['user_group_name'].')';
        else
            $logname = $user1['user_first_name'].' '.$user1['user_last_name'].' ('.$user1['user_group_name'].') has updated the user details';

        $this->setAuditLog($logname);
    }	

    public function updatePassword($data,$user_id)
    {
       
        $pass = array('user_pass' => $data);
        $this->db->where('user_id', $user_id);
        return $this->db->update('tbl_users', $pass);
        
    }
    public function deactive_user($user_id,$status){
        $data = array(
            'user_active' => $status,
        );

        $this->db->where('user_id', $user_id);
        return $this->db->update('tbl_users', $data);
    }
    public function updateUserStatus($user_id, $status)
    {
        $data = array(
            'user_active' => $status,
        );

        $this->db->where('user_id', $user_id);
        return $this->db->update('tbl_users', $data);
    }
    public function checkUserActive($user_id){
        $this->db->select('user.user_id');
        $this->db->from('tbl_users user');
        $this->db->where('user.user_id', $user_id)->where('user.user_active',1);
        $query = $this->db->get();
        return $query->row();
    }
}
