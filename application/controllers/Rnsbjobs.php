<?php
require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'vendor/phpoffice/phpspreadsheet/src/PhpSpreadsheet/IOFactory.php';
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
defined('BASEPATH') OR exit('No direct script access allowed');
class Rnsbjobs extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('Rnsb_model');
        $this->load->helper(array('form','security','crm_helper'));
        $this->load->library('pagination');
        if (!isset($_SESSION["user_id"])) {
            redirect('loginrequired', 'refresh');
        }
        if(!isActive()) redirect('loginrequired', 'refresh');
    }

    public function index($status = '') {
        $this->load->helper('form');
        $permissions = $this->getpermissions();
        $data['status'] = $status;
        $data['job_status'] = $this->Rnsb_model->getJobStatus();
        $data['job_type'] = $this->Rnsb_model->getJobType();
        $data['boiler_type'] = $this->Rnsb_model->getBoilerType();
        $data['boiler_make'] = $this->Rnsb_model->getBoilerMake();
        $this->load->view('header/common', $permissions);
        $this->load->view('content/rnsb/jobs', $data);
        $this->load->view('footer/common');
    }

    public function ajaxviewjobspage() {
        $this->load->library('Custom_encryption');
        $encryption = new Custom_encryption();
        $data['job_type'] = $this->Rnsb_model->getJobType();
        $data['boiler_type'] = $this->Rnsb_model->getBoilerType();
        $data['boiler_make'] = $this->Rnsb_model->getBoilerMake();
        $jobs = [];
        $pages = '';
        $search = ($this->input->post('search', TRUE) != '') ? trim($this->input->post('search', TRUE)) : '';
        $page = ($this->input->post('page', TRUE) != '') ? $this->input->post('page', TRUE) : 0;
        $pagecount = ($this->input->post('pagecount', TRUE) != '') ? $this->input->post('pagecount', TRUE) : 20;
        $forcesearch = ($this->input->post('forcesearch', TRUE) != '') ? $this->input->post('forcesearch', TRUE) : 0;
        $offset = $page * $pagecount;
        $status_key = '';
        if ($_REQUEST['search_status'] != '') {
            $status_key = $this->input->post('search_status');
            $search_status = ucwords(str_replace("_", " ", $this->input->post('search_status')));
        }
        $received_on = (($this->input->post('received_on', TRUE) != '') ? $this->input->post('received_on', TRUE) : '');
        $received_on_from = $received_on_to = '';
        if ($received_on != '' && $forcesearch == 1) {
            $split = explode(' - ', $received_on);
            $received_on_from = new DateTime($split[0]);
            $received_on_from = $received_on_from->format('Y-m-d H:i:s');
            $received_on_to = new DateTime($split[1]);
            $received_on_to = $received_on_to->format('Y-m-d H:i:s');

            if ($received_on_from == $received_on_to) {
                $received_on = new DateTime($split[0]);
                $received_on = $received_on->format('Y-m-d');
                $received_on_from = $received_on_to = '';
            }
            else{
                $received_on = '';
            }
        } else {
            $received_on = '';
            $received_on_from = $received_on_to = '';
        }
        $search_key = '';
       $search_key = array(
        "job_id" => ($this->input->post('job_id', TRUE) != '') ? trim($this->input->post('job_id', TRUE)) : '', 
        "phone_number" => ($this->input->post('phone_number', TRUE) != '') ? trim($this->input->post('phone_number', TRUE)) : '', 
        "full_name" => ($this->input->post('full_name', TRUE) != '') ? trim($this->input->post('full_name', TRUE)) : '',
        "job_type" => ($this->input->post('job_type', TRUE) != '') ? trim($this->input->post('job_type', TRUE)) : '', 
        "boiler_type" => ($this->input->post('boiler_type', TRUE) != '') ? trim($this->input->post('boiler_type', TRUE)) : '',
        "boiler_make" => ($this->input->post('boiler_make', TRUE) != '') ? trim($this->input->post('boiler_make', TRUE)) : '',
        "job_status" => ($this->input->post('job_status', TRUE) != '') ? trim($this->input->post('job_status', TRUE)) : '',
        "post_code" => ($this->input->post('post_code', TRUE) != '') ? str_replace(" ", "", $this->input->post('post_code', TRUE)) : '',
        "received_on_from" => $received_on_from, 
        "received_on_to" => $received_on_to, 
        "received_on" => $received_on,
        "search_keyword" => $search,
    );
       if ($search_key['job_id'] != '') {
        $job_id_split = explode('RNSB', strtoupper($search_key['job_id']));
            if (!empty($job_id_split)) {
                $job_id = $job_id_split[1];
                $search_key['job_id_int'] = (int)$job_id;
            }
        }
        $totalrecords = $this->Rnsb_model->getJobs($search_key, true);
        if ($totalrecords > 0) {
            $jobs = $this->Rnsb_model->getJobs($search_key, false, $pagecount, $offset);
            $pages = ceil($totalrecords / $pagecount);
        }
        if (!empty($jobs)) {
            foreach ($jobs as $key => $job) {
                $job->job_created = date("d F Y H:i:s", strtotime($job->job_created));
                $job->job_del_id = $encryption->encrypt(sprintf('RNSB%05d', $job->job_id));
            }
        }

        $html= '<div class="box-footer clearfix">';
        if ($pages > 0) {
            $html.= '<ul class="pagination pagination-sm no-margin pull-right">';
            $html.= '<li><a href="javascript:void(0)" onclick="viewjobs(' . $pagecount . ',0,' . $forcesearch . ')">First</a></li>';
            $loadpaginationprev = '';
            if (($page + 1) == 1) $loadpaginationprev = '';
            else $loadpaginationprev = 'onclick="viewjobs(' . $pagecount . ',' . ($page - 1) . ',' . $forcesearch . ');"';
            $html.= '<li><a href="javascript:void(0)" ' . $loadpaginationprev . '>&laquo;</a></li>';
            for ($i = 1;$i <= $pages;$i++) {
                $showlink = false;
                $showlink = $this->paginationforhugerecords($pages, $i, $page + 1);
                if ($showlink == true) {
                    if ($i == ($page + 1)) $active = ' class="active"';
                    else $active = '';
                    $html.= '<li><a ' . $active . ' href="javascript:void(0)" onclick="viewjobs(' . $pagecount . ',' . ($i - 1) . ',' . $forcesearch . ');">' . $i . '</a></li>';
                }
            }
            $loadpaginationnext = '';
            if (($page + 1) == $pages) $loadpaginationnext = '';
            else $loadpaginationnext = 'onclick="viewjobs(' . $pagecount . ',' . ($page + 1) . ',' . $forcesearch . ');"';
            $html.= '<li><a href="javascript:void(0)" ' . $loadpaginationnext . '>&raquo;</a></li>';
            $html.= '<li><a href="javascript:void(0)" onclick="viewjobs(' . $pagecount . ',' . ($pages - 1) . ',' . $forcesearch . ')">Last</a></li>';
            $html.= '</ul>';
        }
        $html.= '</div>';
        $list = array('jobs' => $jobs, 'pagination' => $html, 'offset' => $offset);
        $htmls = $this->load->view('content/rnsb/joblist', $list,true);
        echo $htmls;
    }

    public function jobsingle($quote_id = '', $pstatus = '') {
        $this->load->helper('form');
        $this->load->library('Custom_encryption');
        $encryption = new Custom_encryption();
        $data['quote_en'] = $encryption->encrypt($quote_id);
        $data['pay_env'] = $this->config->item('barclay_env');
        $permissions = $this->getpermissions();
        $data['job_id'] = $quote_id;
        $split = explode('RNSB', $quote_id);
        $job_id = (int)$split[1];
        $this->Rnsb_model->setOpenLog($job_id);
        $data['job_details'] = $this->Rnsb_model->getJobDetails($job_id,false);
        $data['job_status_log'] = $this->Rnsb_model->getjobstatuslog($job_id, true);
        $data['assignedengineers'] = array();
        $data['logs'] = $this->Rnsb_model->getJobLogs($job_id);
        $this->Rnsb_model->makeJobViewed($quote_id);
        $data['job_type'] = $this->Rnsb_model->getJobType();
        $data['boiler_type'] = $this->Rnsb_model->getBoilerType();
        $data['boiler_make'] = $this->Rnsb_model->getBoilerMake();
        $data['job_status'] = $this->Rnsb_model->getJobStatus();
        $data['pstatus'] = $pstatus;
        $data['edit_job'] = false;
        $this->load->view('header/common', $permissions);
        $this->load->view('content/rnsb/jobsingle', $data);
        $this->load->view('footer/common');
    }

    public function createjob() {
        $this->load->helper('form');
        $permissions = $this->getpermissions();
        $data['job_type'] = $this->Rnsb_model->getJobType();
        $data['boiler_type'] = $this->Rnsb_model->getBoilerType();
        $data['boiler_make'] = $this->Rnsb_model->getBoilerMake();
        $this->load->view('header/common', $permissions);
        $this->load->view('content/rnsb/createjob',$data);
        $this->load->view('footer/common');
    }

    public function getaddresspostcode() {
        $client_post_code = $this->input->post('client_post_code');
        $api_key = $this->config->item('address_api_key');
        $post_code = str_replace(' ', '', $client_post_code);
        // $uri = 'https://api.getaddress.io/find/' . (string)$post_code . '?api-key=' . trim($api_key);
        $uri = 'https://api-ddpayment.smart-cover.co.uk/api/services/get-address';
        $data = json_encode(array('postcode' => $post_code));
        $curl = curl_init($uri);
        // curl_setopt($curl, CURLOPT_URL, $uri);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $result = curl_exec($curl);
        curl_close($curl);

        $addresses = $this->process_Address($result);
        $html = '';
        if ($addresses != false) {
            $html.= '<select id="client_address" name="client_address" class="form-control">';
            foreach ($addresses as $key => $address) {
                $html.= '<option value="' . $address . '">' . $address . '</option>';
            }
            $html.= '</select>';
            $html.= '<input type="text" name="client_address_edit" id="client_address_edit" class="form-control">';
            $html.= '<a class="btn btn-xs btn-primary" id="edit_address" style="margin-top:5px">Edit</a><a class="btn btn-xs btn-danger" id="cancel_address" style="display:none;margin-top:5px">Cancel</a>';
        }
        echo $html;
    }

    private function process_Address($json_data) {
        $decode = (array)json_decode($json_data);
        // if (empty($decode['addresses'])) {
        //     return false;
        // }
        if (empty($decode['result'])) {
            return false;
        }
        // $addresses = $decode['addresses'];
        $addresses = $decode['result']->addresses;

        $addressesprocessed = array();
        foreach ($addresses as $key => $address) {
            $expstrings = explode(',', $address);
            $newstring = '';
            $newaddresssinglearray = array();
            foreach ($expstrings as $key => $expstring) {
                $trimmed = trim($expstring);
                if ($trimmed != '') {
                    $newaddresssinglearray[] = $trimmed;
                }
                $newaddresssingle = implode(', ', $newaddresssinglearray);
            }
            $addressesprocessed[] = $newaddresssingle;
        }
        return $addressesprocessed;
    }

    public function addjobmanual() {
        $this->load->library('Custom_security');
        $security = new Custom_security();
        $data = array();
        $dataposted = $_POST;
        $data['reference_number'] = $this->input->post('job_reference_number');
        $data['full_name'] = $this->input->post('client_full_name');
        $data['phone_number'] = $this->input->post('client_phone_number');
        $data['alternate_phone_number'] = $this->input->post('client_alternate_phone_number');
        $data['post_code'] = $this->input->post('client_post_code');
        $data['address'] = $this->input->post('client_address');
        $data['email'] = $this->input->post('client_email');
        $data['job_type'] = $this->input->post('job_type');
        $data['boiler_type'] = $this->input->post('boiler_type');
        $data['boiler_make'] = $this->input->post('boiler_make');
        $data['fuel_type'] = $this->input->post('fuel_type');
        $data['job_comments'] = $this->input->post('job_comments');
        $data['address_edit'] = $this->input->post('client_address_edit');
        $data['address_edit'] = $security->sanitize_string($data['address_edit']);
        $data1['reference_number'] = $security->sanitize_string($data['reference_number']);
        $data1['full_name'] = $security->sanitize_string($data['full_name']);
        $data1['phone_number'] = $security->sanitize_string($data['phone_number']);
        $data1['alternate_phone_number'] = $security->sanitize_string($data['alternate_phone_number']);
        $data1['post_code'] = $security->sanitize_string($data['post_code']);
        $data1['address'] = $security->sanitize_string($data['address']);
        $data1['email'] = $security->sanitize_email($data['email']);
        $data1['job_type'] = $security->sanitize_string($data['job_type']);
        $data1['boiler_type'] = $security->sanitize_string($data['boiler_type']);
        $data1['boiler_make'] = $security->sanitize_string($data['boiler_make']);
        $data1['fuel_type'] = $security->sanitize_string($data['fuel_type']);
        $data1['received_data'] = 'manual_creation_no_data';
        $data1['job_status_id'] = 0;
        if($data1['address'] != $data['address_edit'])
        $data1['address'] = $data['address_edit'];
        $data2['job_comments'] = $security->sanitize_string($data['job_comments']);
        $data2['job_comment_datetime'] = date('Y-m-d H:i:s');
        $checkExists = $this->Rnsb_model->checkExist($data['reference_number']);
        if($checkExists){
            echo 'duplicate';
            exit;
        }
        $this->db->trans_begin();
        $job_id = $this->Rnsb_model->saveJobs($data1);
        $data3 = array(
            'note_desc' => $data2['job_comments'] ,
            'job_id' =>  $job_id,
            'user_id' => $_SESSION["user_id"],
            'created_at' => date('Y-m-d H:i:s'),
        );
        $note = $this->Rnsb_model->addjobnotes($data3);
        if ($job_id != false) {
            $data2['job_id'] = $job_id;
            $result = $this->Rnsb_model->saveJobsComments($data2);
            if ($result) {
                $this->db->trans_commit();
                echo sprintf('RNSB%05d', $job_id);
                $this->sendjobcreationmail($data1['email'], $job_id);
            } else {
                $this->db->trans_rollback();
                echo 'failed';
                exit;
            }
        } else {
            $this->db->trans_rollback();
            echo 'failed';
            exit;
        }
    }

    private function sendjobcreationmail($customer_email, $job_id) {
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->CharSet = 'UTF-8';
            $mail->Host = $this->config->item('smtp_host');
            $mail->SMTPAuth = $this->config->item('smtp_auth');
            $mail->Username = $this->config->item('smtp_username');
            $mail->Password = $this->config->item('smtp_password');
            $mail->SMTPSecure = $this->config->item('smtp_secure');
            $mail->Port = $this->config->item('smtp_port');
            $mail->ssl = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
            $mail->setFrom($this->config->item('smtp_setfrom'), 'Mailer');
            $mail->addAddress($this->config->item('job_mail_to'));

            $mail->isHTML(true);
            $mail->Subject = 'Repair Network - Service Box Job Creation';
            $job = $this->Rnsb_model->getJobDetails($job_id,false);
            $job_types = $this->Rnsb_model->getJobType();
            $boiler_types = $this->Rnsb_model->getBoilerType();
            $boiler_makes = $this->Rnsb_model->getBoilerMake();
            foreach($job_types as $type){
                if($type['id'] == $job['job_type']) $job_type = $type['job_type'];
            }
            foreach($boiler_types as $btype){
                if($btype['id'] == $job['boiler_type']) $boiler_type = $btype['boiler_type'];
            }
            foreach($boiler_makes as $bmake){
                if($bmake['id'] == $job['boiler_make']) $boiler_make = $bmake['boiler_make'];
            }
            $body = file_get_contents(APPPATH . "views/content/sendjobmail.php");
            $body = str_replace('{fullname}', $job['full_name'], $body);
            $body = str_replace('{job_id}', sprintf('RNSB%05d', $job['job_id']), $body);
            $body = str_replace('{reference_number}', $job['reference_number'], $body);
            $body = str_replace('{job_type}', $job_type, $body);
            $body = str_replace('{boiler_type}', $boiler_type, $body);
            $body = str_replace('{boiler_make}', $boiler_make, $body);
            $body = str_replace('{fuel_type}', $job['fuel_type'], $body);
            $body = str_replace('{date_now}', date("d F Y", strtotime($job['created_at'])), $body);
            $mail->Body = $body;
            $mail->send();
        }
        catch(Exception $e) {
        }
    }


    public function paginationforhugerecords($pagecount, $i, $currentpage) {
        $showlink = false;
        if ($currentpage > $i && ($currentpage - $i) > 10000) {
            if ($i % 10000 == 0) $showlink = true;
        } elseif ($currentpage < $i && ($i - $currentpage) > 10000) {
            if ($i % 10000 == 0) $showlink = true;
        } elseif ($currentpage > $i && ($currentpage - $i) > 5000) {
            if ($i % 5000 == 0) $showlink = true;
        } elseif ($currentpage < $i && ($i - $currentpage) > 5000) {
            if ($i % 5000 == 0) $showlink = true;
        } elseif ($currentpage > $i && ($currentpage - $i) > 1000) {
            if ($i % 1000 == 0) $showlink = true;
        } elseif ($currentpage < $i && ($i - $currentpage) > 1000) {
            if ($i % 1000 == 0) $showlink = true;
        } elseif ($currentpage > $i && ($currentpage - $i) > 500) {
            if ($i % 500 == 0) $showlink = true;
        } elseif ($currentpage < $i && ($i - $currentpage) > 500) {
            if ($i % 500 == 0) $showlink = true;
        } elseif ($currentpage > $i && ($currentpage - $i) > 100) {
            if ($i % 100 == 0) $showlink = true;
        } elseif ($currentpage < $i && ($i - $currentpage) > 100) {
            if ($i % 100 == 0) $showlink = true;
        } elseif ($currentpage > $i && ($currentpage - $i) > 75) {
            if ($i % 75 == 0) $showlink = true;
        } elseif ($currentpage < $i && ($i - $currentpage) > 75) {
            if ($i % 75 == 0) $showlink = true;
        } elseif ($currentpage > $i && ($currentpage - $i) > 50) {
            if ($i % 50 == 0) $showlink = true;
        } elseif ($currentpage < $i && ($i - $currentpage) > 50) {
            if ($i % 50 == 0) $showlink = true;
        } elseif ($currentpage > $i && ($currentpage - $i) > 5) {
            if ($i % 10 == 0) $showlink = true;
        } elseif ($currentpage < $i && ($i - $currentpage) > 5) {
            if ($i % 10 == 0) $showlink = true;
        } elseif ((($currentpage - $i) <= 5 && ($currentpage - $i) > 0) || (($i - $currentpage) <= 5 && ($i - $currentpage) >= 0)) {
            $showlink = true;
        }
        return $showlink;
    }

    public function exportjobexcelauth() {
        if (!in_array($_SESSION['user_group_id'], array('A', 'B', 'C', 'F'))) {
            echo 'not_authorised_to_download_the_data';
            exit;
        } else {
            $_SESSION['download_authorised'] = true;
            $search = ($this->input->post('search', TRUE) != '') ? $this->input->post('search', TRUE) : '';
            $page = ($this->input->post('page', TRUE) != '') ? $this->input->post('page', TRUE) : 0;
            $pagecount = ($this->input->post('pagecount', TRUE) != '') ? $this->input->post('pagecount', TRUE) : 10;
            $forcesearch = ($this->input->post('forcesearch', TRUE) != '') ? $this->input->post('forcesearch', TRUE) : 0;
            $offset = $page * $pagecount;
            $status_key = '';
            if (isset($_REQUEST['search_status']) != '') {
                $status_key = $this->input->post('search_status');
                $search_status = ucwords(str_replace("_", " ", $this->input->post('search_status')));
            }
            $received_on = (($this->input->post('received_on', TRUE) != '') ? $this->input->post('received_on', TRUE) : '');
            $received_on_from = $received_on_to = '';
            if ($received_on != '') {
                $split = explode(' - ', $received_on);
                $received_on_from = new DateTime($split[0]);
                $received_on_from = $received_on_from->format('Y-m-d H:i:s');
                $received_on_to = new DateTime($split[1]);
                $received_on_to = $received_on_to->format('Y-m-d H:i:s');
                if ($received_on_from == $received_on_to) {
                    $received_on = new DateTime($split[0]);
                    $received_on = $received_on->format('Y-m-d');
                    $received_on_from = $received_on_to = '';
                }
                else{
                    $received_on = '';
                }
            } else {
                $received_on = '';
                $received_on_from = $received_on_to = '';
            }
            $search_key = '';
           
           $search_key = array(
            "job_id" => ($this->input->post('job_id', TRUE) != '') ? $this->input->post('job_id', TRUE) : '', 
            "phone_number" => ($this->input->post('phone_number', TRUE) != '') ? $this->input->post('phone_number', TRUE) : '', 
            "full_name" => ($this->input->post('full_name', TRUE) != '') ? $this->input->post('full_name', TRUE) : '', 
            "post_code" => ($this->input->post('post_code', TRUE) != '') ? str_replace(" ", "", $this->input->post('post_code', TRUE)) : '',
            "job_type" => ($this->input->post('job_type', TRUE) != '') ? trim($this->input->post('job_type', TRUE)) : '', 
            "boiler_type" => ($this->input->post('boiler_type', TRUE) != '') ? trim($this->input->post('boiler_type', TRUE)) : '',
            "boiler_make" => ($this->input->post('boiler_make', TRUE) != '') ? trim($this->input->post('boiler_make', TRUE)) : '',
            "job_status" => ($this->input->post('job_status', TRUE) != '') ? trim($this->input->post('job_status', TRUE)) : '',
            "received_on_from" => $received_on_from, 
            "received_on_to" => $received_on_to, 
            "received_on" => $received_on, 
            "search_keyword" => $search,
        );
        if ($search_key['job_id'] != '') {
            $job_id_split = explode('RNSB', $search_key['job_id']);
            if (!empty($job_id_split)) {
                $job_id = $job_id_split[1];
                $search_key['job_id_int'] = (int)$job_id;
            }
        }
        $jobs = $this->Rnsb_model->getJobs($search_key, false, '','');
        if(!$jobs){
            echo 'no data found';
            exit;
        }
            $serialized = serialize($search_key);
            $encoded = $this->encrypt($serialized);
            $_SESSION['export_post_data'] = $encoded;
            echo 'authorized';
        }
    }

    public function exportjobexcel() {
        if (!isset($_SESSION['export_post_data'])) {
            echo 'Cannot generate the data';
            exit;
        }
        $session_value = $_SESSION['export_post_data'];
        $decrypted = $this->decrypt($session_value);
        $status = unserialize($decrypted);
        $flag = 0;
        if (!isset($_SESSION['download_authorised'])) {
            $flag = 1;
        }
        if ($flag == 1) {
            echo 'Cannot generate the data';
            exit;
        } else {
            $spreadsheet = new Spreadsheet();
            $Excel_writer = new Xlsx($spreadsheet);
            $spreadsheet->setActiveSheetIndex(0);
            $activeSheet = $spreadsheet->getActiveSheet();
            $styleArray1 = ['font' => ['bold' => true, ], 'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, ], 'borders' => ['allBorders' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, ], ], ];
            $styleArray2 = ['alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT, ], 'borders' => ['allBorders' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, ], ]];
            $styleArray3 = ['alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER, ], 'borders' => ['allBorders' => ['borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN, ], ]];
            $activeSheet->mergeCells('A1:M1');
            $activeSheet->setCellValue('A1', (isset($status['search_status']) ? ucwords(str_replace('%20', ' ', $status['search_status'])) : '') . ' RN-B2B Job Details Generated on ' . date('d-M-Y H:i'));
            $activeSheet->getStyle('A1:M1')->applyFromArray($styleArray1);
            $activeSheet->setCellValue('A2', 'Job ID')->getStyle('A2')->getFont()->setBold(true);
            $activeSheet->setCellValue('B2', 'Job Reference Number')->getStyle('B2')->getFont()->setBold(true);
            $activeSheet->setCellValue('C2', 'Client Name')->getStyle('C2')->getFont()->setBold(true);
            $activeSheet->setCellValue('D2', 'Client Phone')->getStyle('D2')->getFont()->setBold(true);
            $activeSheet->setCellValue('E2', 'Client Email')->getStyle('E2')->getFont()->setBold(true);
            $activeSheet->setCellValue('F2', 'Client Postcode')->getStyle('F2')->getFont()->setBold(true);
            $activeSheet->setCellValue('G2', 'Client Address')->getStyle('G2')->getFont()->setBold(true);
            $activeSheet->setCellValue('H2', 'Job Type')->getStyle('H2')->getFont()->setBold(true);
            $activeSheet->setCellValue('I2', 'Boiler Type')->getStyle('I2')->getFont()->setBold(true);
            $activeSheet->setCellValue('J2', 'Boiler Make')->getStyle('J2')->getFont()->setBold(true);
            $activeSheet->setCellValue('K2', 'Fuel Type')->getStyle('K2')->getFont()->setBold(true);
            $activeSheet->setCellValue('L2', 'Comments')->getStyle('L2')->getFont()->setBold(true);
            $activeSheet->setCellValue('M2', 'Date Added')->getStyle('M2')->getFont()->setBold(true);
            foreach ($this->excelColumnRange('A', 'M') as $columnID) {
                $activeSheet->getColumnDimension($columnID)->setAutoSize(true); 
            }
            $search_key = (isset($status) && $status != '' ? $status : '');
            $jobs = $this->Rnsb_model->getJobs($search_key, false, '','');
            $i = 0;
            if (!empty($jobs)) {
                foreach ($jobs as $key => $job) {
                    $i = $key + 3;
                    $job->email = (trim($job->email) == '0') ? '' : trim($job->email);
                    $job->address = (trim($job->address) == 'No Records Found') ? '' : trim($job->address);
                    $activeSheet->setCellValue('A' . $i, sprintf('RNSB%05d', $job->job_id));
                    $activeSheet->setCellValue('B' . $i, $job->reference_number);
                    $activeSheet->setCellValue('C' . $i, ucwords($job->full_name));
                    $activeSheet->setCellValue('D' . $i, $job->phone_number);
                    $activeSheet->setCellValue('E' . $i, $job->email);
                    $activeSheet->setCellValue('F' . $i, strtoupper($job->post_code));
                    $activeSheet->setCellValue('G' . $i, $job->address);
                    $activeSheet->setCellValue('H' . $i, $job->job_type);
                    $activeSheet->setCellValue('I' . $i, $job->boiler_type);
                    $activeSheet->setCellValue('J' . $i, $job->boiler_make);
                    $activeSheet->setCellValue('K' . $i, $job->fuel_type);
                    $activeSheet->setCellValue('L' . $i, $job->notes);
                    $activeSheet->setCellValue('M' . $i, date("d F Y H:i:s", strtotime($job->job_created)));      
                }
                $activeSheet->getStyle('A2:M' . $i)->applyFromArray($styleArray2);
            } else {
                $activeSheet->mergeCells('A3:M3');
                $activeSheet->setCellValue('A3', 'No ' . ucwords(str_replace('%20', ' ', $status['search_status'])) . ' Job Details');
                $activeSheet->getStyle('A3:M3')->applyFromArray($styleArray3);
            }
            $filename = ($status['search_status'] != '' ? $status['search_status'] . '_' : ' ') . 'RN_jobs_' . date('Y_m_d_H_i');
            ob_end_clean();
            header('Content-Type: application/vnd.ms-excel');
            header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
            header('Cache-Control: max-age=0');
            $Excel_writer->save('php://output');
            unset($_SESSION['download_authorised']);
            unset($_SESSION['export_post_data']);
        }
    }

    /****** export to excel RN */
    private function excelColumnRange($lower, $upper) {
        ++$upper;
        for ($i = $lower; $i !== $upper; ++$i) {
            yield $i;
        }
    }

    private function encrypt($data) {
        $method = 'AES-256-CBC';
        $key = hash('sha256', 'qJB0rGtIn5UB1fa_yyefyCp');
        $ivSize = openssl_cipher_iv_length($method);
        $iv = openssl_random_pseudo_bytes($ivSize);
        $encrypted = openssl_encrypt($data, $method, $key, OPENSSL_RAW_DATA, $iv);
        $encrypted = base64_encode($iv . $encrypted);
        return $encrypted;
    }
    private function decrypt($data) {
        $method = 'AES-256-CBC';
        $key = hash('sha256', 'qJB0rGtIn5UB1fa_yyefyCp');
        $data = base64_decode($data);
        $ivSize = openssl_cipher_iv_length($method);
        $iv = substr($data, 0, $ivSize);
        $data = openssl_decrypt(substr($data, $ivSize), $method, $key, OPENSSL_RAW_DATA, $iv);
        return $data;
    }

    public function addjobnotes() {
        $this->load->library('Custom_security');
        $security = new Custom_security();
        $this->load->library('Custom_encryption');
        $encryption = new Custom_encryption();
        $job_id = $encryption->decrypt($this->input->post('quote_en'));
        $split = explode('RNSB', $job_id);
        $job_id = (int)$split[1];
        $data['job_notes'] = $this->input->post('job_notes');
        $data1['job_id'] = $job_id;
        $data1['note_desc'] = $security->sanitize_string($data['job_notes']);
        $data1['user_id'] = $_SESSION["user_id"];
        $data1['created_at'] = date('Y-m-d H:i:s');
        $return = $this->Rnsb_model->addjobnotes($data1);

        /**------File Uplaods---------*/

        $fileUploadPath = 'uploads/jobs';

        if(!empty($_FILES['files']['name']) && count(array_filter($_FILES['files']['name'])) > 0){
            
            if (!is_dir($fileUploadPath)) {
                mkdir('./'.$fileUploadPath, 0777, TRUE);
            }

            $upload_Data =array();
            $filesCount = count($_FILES['files']['name']); 
            $_FILES['file']['name']     = $_FILES['files']['name'][0];
            $_FILES['file']['type']     = $_FILES['files']['type'][0];
            $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][0];
            $_FILES['file']['error']     = $_FILES['files']['error'][0];
            $_FILES['file']['size']     = $_FILES['files']['size'][0];
            $uploadPath = $fileUploadPath.'/';
            $config['upload_path'] = $uploadPath;
            $config['allowed_types'] = 'pdf|jpg|jpeg|png';
            $config['max_size'] = $this->config->item('file_size');
            $max_file_size = $config['max_size'] * 1024;
            if($_FILES['file']['size'] > $max_file_size){
                echo 'exceeds'; exit;
            }
            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if($this->upload->do_upload('file')){
                $fileData = $this->upload->data();
                $upload_Data[0]['file'] = $fileData['file_name'];
                $upload_Data[0]['status'] = 1;
                $upload_Data[0]['job_id'] = $data1['job_id'];
                $upload_Data[0]['note_id'] = $return;

            }else{
                $errorUploadType = $_FILES['file']['name'].' | ';
            } 
            if(!empty($upload_Data)){  
                $upload_file = $this->Rnsb_model->upload_file($upload_Data);
            }   
        }
        else{ 
            $statusMsg = 'Please select files to upload.'; 
        } 


        if ($return > 0) echo 'added';
        else echo 'failed';
    }

    public function showjobnotes() {
        $this->load->library('Custom_security');
        $security = new Custom_security();
        $this->load->library('Custom_encryption');
        $encryption = new Custom_encryption();
        $job_id = $encryption->decrypt($this->input->post('quote_en'));
        $split = explode('RNSB', $job_id);
        $job_id = (int)$split[1];
        $notes = $this->Rnsb_model->getjobnotes($job_id);
        $html = '';
        $html.= '<thead>';
        $html.= '<tr>';
        $html.= '<th colspan="5">Notes Added</th>';
        $html.= '</tr>';
        $html.= '<tr>';
        $html.= '<th>Sl No.</th>';
        $html.= '<th>Note</th>';
        $html.= '<th>Added By</th>';
        $html.= '<th>File</th>';
        $html.= '<th>Added On</th>';
        if(in_array($_SESSION['user_group_id'] ,array('A')))
        $html.= '<th>Manage</th>';
        $html.= '</tr>';
        $html.= '</thead>';
        $html.= '<tbody>';
        if (!empty($notes)) {
            $i = 1;
            foreach ($notes as $key => $note) {
                $html.= '<tr>';
                $html.= '<td>' . ($i++) . '</td>';
                $html.= '<td>' . $note['note_desc'] . '</td>';
                $html.= '<td>' . $note['user_first_name'] . ' ' . $note['user_last_name'] . '</td>';
                $html .= '<td><a target="_blank" href="' . base_url() . 'uploads/jobs/'.$note['file'] .'"download>'.$note['file'].'</a></td>';
                $html.= '<td>' . date("d F Y H:i:s", strtotime($note['created_at'])) . '</td>';
                if(in_array($_SESSION['user_group_id'] ,array('A')))
                $html.= '<td><button type="button" class="btn btn-xs btn-flat btn-danger" onclick="deletejobnotes(' . $note['id'] . ')">Delete</button></td>';
                $html.= '</tr>';
            }
        } else {
            $html.= '<tr>';
            $html.= '<td colspan="5">No Notes added</td>';
            $html.= '</tr>';
        }
        $html.= '</tbody>';
        echo $html;
    }

    public function deletejobnotes() {
        $this->load->library('Custom_security');
        $security = new Custom_security();
        $this->load->library('Custom_encryption');
        $encryption = new Custom_encryption();
        $job_id = $encryption->decrypt($this->input->post('quote_en'));
        $split = explode('RNSB', $job_id);
        $job_id = (int)$split[1];
        $note_id = $this->input->post('note_id');
        $result = $this->Rnsb_model->deletejobnotes($note_id, $job_id);
        if ($result) echo 'success';
        else echo 'failed';
    }

    public function ajaxdeletejob() {
        $this->load->library('Custom_security');
        $security = new Custom_security();
        $this->load->library('Custom_encryption');
        $encryption = new Custom_encryption();
        $dataposted = $_POST;
        $job_id = $encryption->decrypt($this->input->post('job_id'));
        $split = explode('RNSB', $job_id);
        $job_id = (int)$split[1];
        $result = $this->Rnsb_model->deletejob($job_id);
        if ($result) echo 'success';
        else echo 'failed';
    }

    public function addjobstatus()
    {
        $this->load->library('Custom_security');
        $security = new Custom_security();
        $this->load->library('Custom_encryption');
        $encryption = new Custom_encryption();
        $job_id = $encryption->decrypt($this->input->post('quote_en'));
        $split = explode('RNSB', $job_id);
        $job_id = (int)$split[1];
        $data['job_status'] = $this->input->post('job_status');
        $data1['job_id'] = $job_id;
        $data1['job_status_id'] = $data['job_status'];
        $data1['user_id'] = $_SESSION["user_id"];
        $return = $this->Rnsb_model->addjobstatus($data1);
        if ($return > 0) echo 'added';
        else echo 'failed';
    }

    public function showjobstatus()
    {
        $this->load->library('Custom_security');
        $security = new Custom_security();
        $this->load->library('Custom_encryption');
        $encryption = new Custom_encryption();
        $job_id = $encryption->decrypt($this->input->post('quote_en'));
        $split = explode('RNSB', $job_id);
        $job_id = (int)$split[1];
        $job_status = $this->Rnsb_model->getjobstatuslog($job_id);
        $html = '';
        $html .= '<thead>';
        $html .= '<tr>';
        $html .= '<th colspan="6">Job Status</th>';
        $html .= '</tr>';
        $html .= '<tr>';
        $html .= '<th>Sl No.</th>';
        $html .= '<th>Job Status</th>';
        $html .= '<th>Added By</th>';
        $html .= '<th>Added On</th>';
        if(in_array($_SESSION['user_group_id'] ,array('A')))
        $html .= '<th>Manage</th>';
        $html .= '</tr>';
        $html .= '</thead>';
        $html .= '<tbody>';
        if (!empty($job_status)) {
            $i = 1;
            $k = 0;
            foreach ($job_status as $key => $status) {
                $html .= '<tr>';
                $html .= '<td>' . ($i++) . '</td>';
                $html .= '<td>' . $status['job_status'] . '</td>';
                $html .= '<td>' . $status['user_first_name'] . ' ' . $status['user_last_name'] . '</td>';
                $html .= '<td>' . date("d F Y H:i:s", strtotime($status['created_at'])) . '</td>';
                if(in_array($_SESSION['user_group_id'] ,array('A')))
                $html .= '<td><button type="button" class="btn btn-xs btn-flat btn-danger" onclick="deletejobstatus(' . $status['id'] . ')">Delete</button></td>';
                $html .= '</tr>';
                $k++;
            }
        } else {
            $html .= '<tr>';
            $html .= '<td colspan="6">No Attempts added</td>';
            $html .= '</tr>';
        }
        $html .= '</tbody>';
        echo $html;
    }

    public function deletejobstatus()
    {
        $this->load->library('Custom_security');
        $security = new Custom_security();
        $this->load->library('Custom_encryption');
        $encryption = new Custom_encryption();
        $job_id = $encryption->decrypt($this->input->post('quote_en'));
        $split = explode('RNSB', $job_id);
        $job_id = (int)$split[1];
        $status_id = $this->input->post('status_id');
        $result = $this->Rnsb_model->deletejobstatus($status_id,$job_id);
        if ($result) echo 'success';
        else echo 'failed';
    }

    public function ajaxeditjob()
    {
        $this->load->library('Custom_encryption');
        $encryption = new Custom_encryption();
        $job_id = $encryption->decrypt($this->input->post('quote_en'));
        $split = explode('RNSB', $job_id);
        $data['job_id'] = (int)$split[1];
        $data['job_details'] = $this->Rnsb_model->getJobDetails($data['job_id'],false);
        $data['job_status_log'] = $this->Rnsb_model->getjobstatuslog($data['job_id'], true);
        $assignedengineers = array();
        $data['logs'] = $this->Rnsb_model->getJobLogs($job_id);
        $data['job_type'] = $this->Rnsb_model->getJobType();
        $data['boiler_type'] = $this->Rnsb_model->getBoilerType();
        $data['boiler_make'] = $this->Rnsb_model->getBoilerMake();
        $data['job_status'] = $this->Rnsb_model->getJobStatus();
        $data['edit_job'] =true;
        $html = '';
        $html .= $this->load->view('content/rnsb/jobview',$data,true);
        echo $html;
    }

    public function ajaxsavejob()
    {
        $this->load->library('Custom_security');
        $security = new Custom_security();
        $this->load->library('Custom_encryption');
        $encryption = new Custom_encryption();
        $dataposted = $_POST;
        $job_id = $encryption->decrypt($this->input->post('quote_en'));
        $split = explode('RNSB', $job_id);
        $job_id = (int)$split[1];
        $check = $this->Rnsb_model->checkJobIdExists($job_id);
        $data['full_name'] = $this->input->post('client_full_name');
        $data['phone_number'] = $this->input->post('client_phone_number');
        $data['alternate_phone_number'] = $this->input->post('client_alternate_phone_number');
        $data['post_code'] = $this->input->post('client_post_code');
        $data['address'] = $this->input->post('client_address');
        $data['email'] = $this->input->post('client_email');
        $data1['full_name'] = $security->sanitize_string($data['full_name']);
        $data1['phone_number'] = $security->sanitize_string($data['phone_number']);
        $data1['alternate_phone_number'] = $security->sanitize_string($data['alternate_phone_number']);
        $data1['post_code'] = $security->sanitize_string($data['post_code']);
        $data1['address'] = $security->sanitize_string($data['address']);
        $data1['email'] = $security->sanitize_email($data['email']);
        if ($check != false) {
            $job_id = $check['job_id'];
            $return = $this->Rnsb_model->updateJobAlt($data1, $job_id);
            if ($return == true) {
                echo 'success';
                exit;
            } else {
                echo 'unable_to_update_the_job';
                exit;
            }
        } else {
            echo 'unable_to_find_the_job';
            exit;
        }
    }

    public function jobDetails($job_id = '') {
        $this->load->library('Custom_encryption');
        $encryption = new Custom_encryption();
        $dataposted = $_POST;
        $job_id = $encryption->decrypt($this->input->post('quote_en'));
        $data['quote_en'] = $encryption->encrypt($job_id);
        $split = explode('RNSB', $job_id);
        $data['job_id'] = (int)$split[1];
        $data['job_details'] = $this->Rnsb_model->getJobDetails($data['job_id'],false);
        $data['job_status_log'] = $this->Rnsb_model->getjobstatuslog($data['job_id'], true);
        $assignedengineers = array();
        $data['logs'] = $this->Rnsb_model->getJobLogs($job_id);
        $data['job_type'] = $this->Rnsb_model->getJobType();
        $data['boiler_type'] = $this->Rnsb_model->getBoilerType();
        $data['boiler_make'] = $this->Rnsb_model->getBoilerMake();
        $data['job_status'] = $this->Rnsb_model->getJobStatus();
        $data['edit_job'] =false;
        $html = '';
        $html .= $this->load->view('content/rnsb/jobview',$data,true);
        echo $html;
    }

    public function statusUpdates(){
        $this->load->library('Custom_security');
        $security = new Custom_security();
        $this->load->library('Custom_encryption');
        $encryption = new Custom_encryption();
        $job_id = $encryption->decrypt($this->input->post('quote_en'));
        $split = explode('RNSB', $job_id);
        $job_id = (int)$split[1];
        $job_status_log = $this->Rnsb_model->getjobstatuslog($job_id, true);
        $html = '<tr>
            <th>Sl no.</th>
            <th>Status</th>
            <th>User</th>
            <th>Status Changed On</th>
            </tr>';
        if($job_status_log){
            foreach ($job_status_log as $key => $status_log){
                $html .=   '<tr>
                    <td>1</td>
                    <td>'.$status_log['job_status'].'</td>
                    <td>'.$status_log['user_first_name'].' '.$status_log['user_last_name'].'</td>
                    <td>'. date("d F Y H:i:s", strtotime($status_log['created_at'])).'</td></tr>';
            }
        } else {
            $html .= '<tr><th colspan="4" style="text-align: center;">No Status Updates</th></tr>';
        }
        echo $html;
    }
}
