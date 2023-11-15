<?php
class Rnsb_model extends CI_Model
{

    public function setOpenLog($job_id)
    {
        $user1 = (array)$this->getUserFullDetails($_SESSION["user_id"]);
        $quote_log_desc = $user1['user_first_name'] . ' ' . $user1['user_last_name'] . ' (' . $user1['user_group_name'] . ') has opened the job (' . $job_id . ')';
        $this->setQuoteLog(array('job_log_desc' => $quote_log_desc, 'job_id' => str_replace(['RNSB', '00'], '', $job_id), 'job_log_query' => ''));
    }

    public function getJobs($search_key, $fetchcount = false, $pagesize = '', $offset = '')
    {
        $select = 'quo.job_id, quo.full_name, quo.phone_number, quo.alternate_phone_number, quo.post_code, quo.address, quo.email, job_type.job_type, boiler_type.boiler_type, boiler_make.boiler_make,
        quo.fuel_type, quo.job_status_id, quo.created_at as job_created,quo.reference_number,status.job_status';
        $status_log = 'SELECT job_status_id, job_id FROM tbl_job_status_log WHERE id IN ( SELECT MAX(id) FROM tbl_job_status_log WHERE status=1 GROUP BY job_id)';
        if ($fetchcount == false) {
            $select .= ', (SELECT notes.note_desc FROM tbl_notes notes WHERE notes.job_id = quo.job_id ORDER BY notes.created_at DESC LIMIT 0,1) as notes';
        }
        $this->db->select($select);
        $this->db->from('tbl_job_details quo');
        $this->db->join('tbl_job_type job_type', 'job_type.id = quo.job_type', 'left');
        $this->db->join('tbl_boiler_make boiler_make', 'boiler_make.id = quo.boiler_make', 'left');
        $this->db->join('tbl_boiler_type boiler_type', 'boiler_type.id = quo.boiler_type', 'left');
        $this->db->join('('.$status_log.') status_log', 'status_log.job_id = quo.job_id', 'left');
        $this->db->join('tbl_job_status status', 'status.job_status_id = status_log.job_status_id', 'left');
        if (!empty($search_key)) {
            if (isset($search_key['job_id_int']) && $search_key['job_id_int'] != '') {
                $this->db->where('quo.job_id', $search_key['job_id_int']);
            } else {

                if ((isset($search_key['received_on_from']) && $search_key['received_on_from'] != '') && (isset($search_key['received_on_to']) && $search_key['received_on_to'] != '')) {
                    $this->db->where('quo.created_at >=', $search_key['received_on_from']);
                    $this->db->where('quo.created_at <=', date('Y-m-d', strtotime('+1 day', strtotime($search_key['received_on_to']))));
                }
                $group = false;
                if (
                    (isset($search_key['phone_number']) && $search_key['phone_number'] != '')
                    ||
                    (isset($search_key['full_name']) && $search_key['full_name'] != '')
                    ||
                    (isset($search_key['post_code']) && $search_key['post_code'] != '')
                    ||
                    (isset($search_key['job_type']) && $search_key['job_type'] != '')
                    ||
                    (isset($search_key['boiler_type']) && $search_key['boiler_type'] != '')
                    ||
                    (isset($search_key['boiler_make']) && $search_key['boiler_make'] != '')
                    ||
                    (isset($search_key['received_on']) && $search_key['received_on'] != '')
                    ||
                    (isset($search_key['search_keyword']) && $search_key['search_keyword'] != '')
                    ||
                    (isset($search_key['job_status']) && $search_key['job_status'] != '')
                ) {
                    $group = true;
                }
                if ($group == true) $this->db->group_start();
                if (isset($search_key['phone_number']) && $search_key['phone_number'] != '') $this->db->where('quo.phone_number', $search_key['phone_number']);
                if (isset($search_key['full_name']) && $search_key['full_name'] != '') $this->db->like('quo.full_name', $search_key['full_name']);
                if (isset($search_key['post_code']) && $search_key['post_code'] != '') $this->db->like("replace(quo.post_code, ' ', '')", $search_key['post_code']);
                if (isset($search_key['job_type']) && $search_key['job_type'] != '') $this->db->where("quo.job_type", $search_key['job_type']);
                if (isset($search_key['boiler_type']) && $search_key['boiler_type'] != '') $this->db->where("quo.boiler_type", $search_key['boiler_type']);
                if (isset($search_key['boiler_make']) && $search_key['boiler_make'] != '') $this->db->where("quo.boiler_make", $search_key['boiler_make']);
                if (isset($search_key['job_status']) && $search_key['job_status'] != '') $this->db->where("status_log.job_status_id", $search_key['job_status']);
                if (isset($search_key['search_keyword']) && $search_key['search_keyword'] != '') {
                    $search = $search_key['search_keyword'];
                    $search_first = substr($search, 0, 3);
                    if (strtoupper($search_first) == 'RNSB') {
                        $search = explode('RNSB', strtoupper($search));
                        if (!empty($search)) {
                            $search = $search[1];
                            $search = (int)$search;
                        }
                        $jobid_search = "";
                        if (substr(strtolower($search_key['search_keyword']), 0, 3) === "rnsb") {
                            $job_id_split = explode('rnsb', strtolower($search_key['search_keyword']));
                            if (!empty($job_id_split)) {
                                if (isset($job_id_split[1]) && $job_id_split[1] != '') {
                                    $job_id = $job_id_split[1];
                                    $jobid_search = (int)$job_id;
                                }
                            }
                        }
                        if ($jobid_search) {
                            $this->db->where('quo.job_id', $jobid_search);
                        }
                    } else {
                        $this->db->group_start();
                        $this->db->or_like('quo.phone_number', $search_key['search_keyword']);
                        $this->db->or_like('quo.full_name', $search_key['search_keyword']);
                        $this->db->or_like("quo.post_code", str_replace(" ", "", $search_key['search_keyword']));
                        $this->db->or_like("quo.post_code", $search_key['search_keyword']);
                        $this->db->group_end();
                    }
                }
                if (isset($search_key['received_on']) && $search_key['received_on'] != '') $this->db->like('quo.created_at', $search_key['received_on']);
                if ($group == true) $this->db->group_end();
            }
        }
        if ($fetchcount == true) return $this->db->get()->num_rows();
        $this->db->order_by('quo.created_at', 'desc');
        if ($pagesize != '' && $offset !== '') $this->db->limit($pagesize, $offset);
        $query = $this->db->get();
        if ($query->num_rows() != 0) return $query->result();
        else return false;
    }

    public function saveJobs($data)
    {
        $data['post_code'] = isset($data['post_code']) ? str_replace(" ", "", $data['post_code']) : "";
        $result = $this->db->insert('tbl_job_details', $data);
        $last_query = $this->db->last_query();
        $insert_id = $this->db->insert_id();

        if ($data['received_data'] != 'manual_creation_no_data') {
            $logname = 'A Job (' . sprintf('RNSB%05d', $insert_id) . ') has been generated from the website';
        } else {
            $user1 = (array)$this->getUserFullDetails($_SESSION["user_id"]);
            $logname = $user1['user_first_name'] . ' ' . $user1['user_last_name'] . ' (' . $user1['user_group_name'] . ') has created a new job (' . sprintf('RNSB%05d', $insert_id) . ')';
        }
        $this->setAuditLog($logname, false, $last_query);
        if ($insert_id > 0) return $insert_id;
        else return false;
    }
    public function addjobnotes($data)
    {
        $result = $this->db->insert('tbl_notes', $data);
        $last_query = $this->db->last_query();
        $note_id = $this->db->insert_id();
        $user = (array)$this->getUserFullDetails($_SESSION["user_id"]);
        $logname = $user['user_first_name'] . ' ' . $user['user_last_name'] . ' (' . $user['user_group_name'] . ') has added a note for the job(' . sprintf('RNSB%05d', $data['job_id']) . ')';
        $this->setAuditLog($logname, false, $last_query);
        $this->setQuoteLog(array('job_log_desc' => $logname, 'job_id' => $data['job_id'], 'job_log_query' => $last_query));
        if ($result) return $note_id;
        else return false;
    }
    public function saveJobsComments($data)
    {
        $result = $this->db->insert('tbl_job_comments', $data);
        $comment_id = $this->db->insert_id();
        if ($comment_id > 0) return true;
        else return false;
    }
    public function getUserFullDetails($user_id)
    {
        $this->db->select('user.user_name, user.user_first_name, user.user_last_name, user.user_active, user.user_registered, user.user_email, user.user_phone, group.user_group_name');
        $this->db->from('tbl_users user');
        $this->db->join('tbl_user_groups group', 'group.user_group_id = user.user_group_id', 'left');
        $this->db->where('user.user_id', $user_id);
        $query = $this->db->get();
        return $query->row();
    }

    public function getJobDetails($job_id)
    {
        $this->db->select('quo.job_id, 
            quo.reference_number, 
            quo.full_name, 
            quo.phone_number, 
            quo.post_code,
            quo.address,
            quo.alternate_phone_number, 
            quo.email,
            quo.job_type, 
            quo.boiler_type,
            quo.boiler_make,
            quo.fuel_type,
            quo.received_data, 
            quo.job_status_id, 
            quo.created_at,
            quo_comments.job_comments,
            ');
        $this->db->from('tbl_job_details quo');
        $this->db->join('tbl_job_comments quo_comments', 'quo_comments.job_id = quo.job_id', 'left');
        $this->db->where('quo.job_id', $job_id);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function getJobLogs($quote_id)
    {
        $this->db->order_by('job_log_timestamp', 'desc');
        $this->db->where(array("job_id" => $quote_id));
        $query = $this->db->get('tbl_job_log');
        if ($query->num_rows() != 0) return $query->result_array();
        else return false;
    }

    public function makeJobViewed($job_id)
    {
        $data = array('viewed' => 1);
        $this->db->where('job_id', $job_id);
        $result = $this->db->update('tbl_job_details', $data);
    }

    public function upload_file($uploadData)
    {
        $this->db->insert_batch('tbl_job_note_files', $uploadData);
        return $this->db->insert_id(); 
    }

    public function getjobnotes($job_id)
    {
        $this->db->select('note.*, user.user_first_name,file.file, user.user_last_name');
        $this->db->from('tbl_notes note');
        $this->db->join('tbl_users user', 'user.user_id = note.user_id', 'left');
        $this->db->join('tbl_job_note_files file', 'file.note_id = note.id', 'left');
        $this->db->where('note.job_id', $job_id);
        $this->db->order_by('note.created_at', 'DESC');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function deletejobnotes($note_id, $job_id)
    {
        $this->db->where(array('id' => $note_id));
        $result = $this->db->delete('tbl_notes');
        $last_query = $this->db->last_query();
        $user = (array)$this->getUserFullDetails($_SESSION["user_id"]);
        $logname = $user['user_first_name'] . ' ' . $user['user_last_name'] . ' (' . $user['user_group_name'] . ') has deleted a note for the job(' . sprintf('RNSB%05d', $job_id) . ')';
        $this->setAuditLog($logname, false, $last_query);
        $this->setQuoteLog(array('job_log_desc' => $logname, 'job_id' => $job_id, 'job_log_query' => $last_query));
        if ($result) return true;
        else return false;
    }
    public function deletejob($job_id)
    {
        $this->db->where(array('job_id' => $job_id));
        $result = $this->db->delete('tbl_job_details');
        $last_query = $this->db->last_query();
        $user = (array)$this->getUserFullDetails($_SESSION["user_id"]);
        $logname = $user['user_first_name'] . ' ' . $user['user_last_name'] . ' (' . $user['user_group_name'] . ') has deleted the job (' . sprintf('RNSB%05d', $job_id) . ')';
        $this->setAuditLog($logname, false, $last_query);
        $this->setQuoteLog(array('job_log_desc' => $logname, 'job_id' => $job_id, 'job_log_query' => $last_query));
        if ($result) return true;
        else return false;
    }

    public function getJobType()
    {
        $result = $this->db->where('status', 1)->get('tbl_job_type')->result_array();
        return $result;
    }
    public function getBoilerType()
    {
        $result = $this->db->where('status', 1)->get('tbl_boiler_type')->result_array();
        return $result;
    }
    public function getBoilerMake()
    {
        $result = $this->db->where('status', 1)->get('tbl_boiler_make')->result_array();
        return $result;
    }
    public function getJobStatus()
    {
        $result = $this->db->get('tbl_job_status')->result_array();
        return $result;
    }

    public function addjobstatus($data)
    {
        $result = $this->db->insert('tbl_job_status_log', $data);
        $last_query = $this->db->last_query();
        $attempt_id = $this->db->insert_id();
        $user = (array)$this->getUserFullDetails($_SESSION["user_id"]);
        $logname = $user['user_first_name'] . ' ' . $user['user_last_name'] . ' (' . $user['user_group_name'] . ') has added the job status for the job(' . sprintf('RNSB%05d', $data['job_id']) . ')';
        $this->setAuditLog($logname, false, $last_query);
        $this->setQuoteLog(array('job_log_desc' => $logname, 'job_id' => $data['job_id'], 'job_log_query' => $last_query));
        if ($result) return $attempt_id;
        else return false;
    }

    public function getjobstatuslog($job_id, $limit = false)
    {
        $this->db->select('status_log.*, status.job_status, user.user_first_name, user.user_last_name');
        $this->db->from('tbl_job_status_log status_log');
        $this->db->join('tbl_job_status status', 'status.job_status_id = status_log.job_status_id', 'left');
        $this->db->join('tbl_users user', 'user.user_id = status_log.user_id', 'left');
        $this->db->where('status_log.job_id', $job_id)->where('status_log.status', 1);
        $this->db->order_by('status_log.created_at', 'DESC');
        if ($limit == true) $this->db->limit(1, 0);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function deletejobstatus($status_id, $job_id)
    {
        $data = array('status' => 0);
        $this->db->where(array('id' => $status_id));
        $result = $this->db->update('tbl_job_status_log', $data);
        $last_query = $this->db->last_query();
        $user = (array)$this->getUserFullDetails($_SESSION["user_id"]);
        $logname = $user['user_first_name'] . ' ' . $user['user_last_name'] . ' (' . $user['user_group_name'] . ') has deleted the job status for the job(' . sprintf('RNSB%05d', $job_id) . ')';
        $this->setAuditLog($logname, false, $last_query);
        $this->setQuoteLog(array('job_log_desc' => $logname, 'job_id' => $job_id, 'job_log_query' => $last_query));
        if ($result) return true;
        else return false;
    }

    public function checkJobIdExists($job_id) {
        $this->db->where(array('job_id' => $job_id));
        $query = $this->db->get('tbl_job_details');
        if ($query->num_rows() != 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }

    public function updateJobAlt($data, $job_id) {
        $this->db->where(array('job_id' => $job_id));
        $result = $this->db->update('tbl_job_details', $data);
        $last_query = $this->db->last_query();
        $user = (array)$this->getUserFullDetails($_SESSION["user_id"]);
        $logname = $user['user_first_name'] . ' ' . $user['user_last_name'] . ' (' . $user['user_group_name'] . ') has updated the job details of ' . sprintf('RNSB%05d', $job_id);
        $this->setAuditLog($logname, false, $last_query);
        $this->setQuoteLog(array('job_log_desc' => $logname, 'job_id' => $job_id, 'job_log_query' => $last_query));

        if ($result) return true;
        else return false;
    }

    public function checkExist($reference_no) {
        $this->db->where(array('reference_number' => $reference_no));
        $query = $this->db->get('tbl_job_details');
        if ($query->num_rows() != 0) {
            return $query->row_array();
        } else {
            return false;
        }
    }
}
