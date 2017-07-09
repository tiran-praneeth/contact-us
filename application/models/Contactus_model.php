<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus_model extends CI_Model
{
	/* Save message to database */
	function save_message($message_data)
    {
    	$message_data['app_code'] =  'contactus';

	    $this->db->set('created_date', 'NOW()', FALSE);
        $this->db->insert('inquiries', $message_data);
        $result = ($this->db->affected_rows() ? TRUE : FALSE);
        
		return $result;
    }

    function get_email_fun_list($function_name)
	{
	    $this->db->select('*');
	    $this->db->from('email_function_template');
	    $this->db->where('function_name', $function_name);
	    $this->db->where('status',1);

	    $result = $this->db->get()->result_array();
	    return $result[0];
	}

	function get_primary_email_ids($id)
    {
        $this->db->select('user.email');
        $this->db->from('user_email'.' UserM');
        $this->db->join('user', 'user.id = UserM.user_id');
        $this->db->where('UserM.email_function_id',$id);
        $this->db->where('UserM.status',1);
        
        $result = $this->db->get()->result_array();
        $emails = array(); // primary email list
        foreach ($result as $email) {

            array_push($emails,$email['email']);
        }
        return $emails;
    }

    function get_all_cc_email_ids($id)
    {
        $this->db->select('user.email');
        $this->db->from('user_cc_email'.' UCC');
        $this->db->join('user', 'user.id = UCC.user_id');

        $this->db->where('UCC.email_function_id',$id);
        $this->db->where('UCC.status',1);
        
        $result = $this->db->get()->result_array();
        $emails = array(); // cc email list
        foreach ($result as $email) {

            array_push($emails,$email['email']);
        }
        return $emails;
    }

    function get_all_bcc_email_ids($id)
    {
        $this->db->select('user.email');
        $this->db->from('user_bcc_email'.' UBCC');
        $this->db->join('user', 'user.id = UBCC.user_id');

        $this->db->where('UBCC.email_function_id',$id);
        $this->db->where('UBCC.status',1);
        
        $result = $this->db->get()->result_array();
        $emails = array(); // bcc email list
        foreach ($result as $email) {

            array_push($emails,$email['email']);
        }
        return $emails;
    }

    public function set_email_queued($id)
    {
        echo $id; die();
        $data = array(
               'e_notify_status' => 1 // email queued status
            );

        $this->db->where('id', $id);
        return $this->db->update('inquiries', $data);
    }
}

/* End of file Contactus_model.php */
/* Location: ./application/models/Contactus_model.php */