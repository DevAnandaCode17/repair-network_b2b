<?php
class Permission_model extends CI_Model
{
    public function getPermissions()
    {
        $this->db->select('permission_value, permission_user_groups');
        $this->db->from('tbl_permissions');
        $this->db->where('permission_status', '1');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function getnotifications()
    {
    	$this->db->from('tbl_quote_details');
        $this->db->where('viewed', '0');
        $query = $this->db->get();
        $data['RN'] = $query->num_rows();

        $this->db->from('tbl_sc_quotes');
        $this->db->where('viewed', '0');
        $query = $this->db->get();
        $data['SC'] = $query->num_rows();

        $this->db->from('tbl_gc_he_quotes');
        $this->db->where('viewed', '0');
        $query = $this->db->get();
        $data['GC'] = $query->num_rows();

        $this->db->from('tbl_fb_leads');
        $this->db->where('viewed', '0');
        $query = $this->db->get();
        $data['FB'] = $query->num_rows();

        $this->db->from('tbl_mbd_customers');
        $this->db->where('viewed', '0');
        $query = $this->db->get();
        $data['MBD'] = $query->num_rows();

        $this->db->from('tbl_enquiries');
        $this->db->where('enq_delete', '0');
        $this->db->where('viewed', '0');
        $query = $this->db->get();
        $data['VE'] = $query->num_rows();
        $this->db->from('tbl_fb_leads');
        $this->db->where('viewed', '0');
        $this->db->where('fb_form_id', '641302029872138');
        $query = $this->db->get();
        $data['CC-FB'] = $query->num_rows();

        $this->db->from('tbl_fb_leads');
        $this->db->where('viewed', '0');
        $this->db->where('fb_form_id', '1356535348022786');
        $query = $this->db->get();
        $data['RN-FB'] = $query->num_rows();

        /**************AK Edited 16-04-2021 *************** */
        $this->db->from('tbl_fb_leads');
        $this->db->where('viewed', '0');
        $this->db->where('fb_form_id', '493244948533028');
        $query_PD = $this->db->get();
        $data['SC-FB'] = $query_PD->num_rows();
        /**************AK Edited ends 16-04-2021 *************** */

        $this->db->from('tbl_cmg_quotes');
        $this->db->where('viewed', '0');
        $query = $this->db->get();
        $data['CMG'] = $query->num_rows();

        $this->db->from('tbl_cc_quotes');
        $this->db->where('viewed', '0');
        $query = $this->db->get();
        $data['CC'] = $query->num_rows();

        $this->db->from('tbl_fb_leads');
        $this->db->where('viewed', '0');
        $query_PD = $this->db->get();
        $data['FB'] = $query_PD->num_rows();

        return $data;
    }
}

