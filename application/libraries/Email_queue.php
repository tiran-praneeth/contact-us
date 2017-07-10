<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email_queue
{
	protected $CIM;

	public function __construct()
	{
        $this->CIM =& get_instance();
        $this->CIM->load->model('Contactus_model');
		$this->CIM->load->library('Nusoap_library');
	}

	/**
  	 * Send Email
  	 * 
  	 * @param  string $function_name - email function(template) name
  	 * @param  array  $email_data    - formatted email data set
  	 * @param  array  $ex_email      - (optional) primary email array
  	 * @param  array  $attachments   - (optional) email attachments array
  	 * @return boolean                
  	 */
  	public function send_instant_email($function_name, $email_data, $ex_email = null, $attachments = null)
  	{
        $function_list = $this->CIM->Contactus_model->get_email_fun_list($function_name);

        if (!empty($function_list)) {

        	if (empty($ex_email)) {
        		$primary_email = $this->CIM->Contactus_model->get_primary_email_ids($function_list['id']); // primary email list
	        } else {
	        	$primary_email = $ex_email;
	        }

	        $cc_email = $this->CIM->Contactus_model->get_all_cc_email_ids($function_list['id']); // cc email email list
	        
	        $bcc_email = $this->CIM->Contactus_model->get_all_bcc_email_ids($function_list['id']); // bcc email email list

		    $input_params['input_params'] = array
			(
				/* Mandatory parameter list */
				 'app_code'       => $this->CIM->config->item('email_app_code'),
				 'email_template' => $function_name, // email template tag name
				 'primary_email'  => json_encode($primary_email),
				 'cc_email'       => json_encode($cc_email),
				 'bcc_email'      => json_encode($bcc_email),
				 'email_data'     => json_encode($email_data),
				 'attached_url'   => json_encode($attachments),
			);

			$api_key = $this->CIM->config->item('email_app_key'); // auth key for email app authentication

			$header = (
	                "<authCredentials>" .
	                "<api_key>" . htmlspecialchars($api_key) . "</api_key>" .
	                "</authCredentials>"
	                );

			$server_url = $this->CIM->config->item('email_app_url'); // live url
			// $email_app_url_test = $this->CIM->config->item('email_app_url_test'); // test url
	        $client = new nusoap_client($server_url);

			$client->setHeaders($header);

	        $ws_response = $client->call('instant_email_queue', $input_params); // call instant email queue web service

	        if (!isset($ws_response['error'])) {
	        	return 1;
	        } else {
	        	return 0;
	        }
	        
	        /* ----- Debug Option ----- */

			// echo "<h2>Request</h2>";
			// echo "<pre>" . htmlspecialchars($client->request, ENT_QUOTES) . "</pre>";
			// echo "<h2>Responses</h2>";
			// echo "<pre>" . htmlspecialchars($client->response, ENT_QUOTES) . "</pre>";
			// echo '<h2>Debug</h2><pre>' . htmlspecialchars($client->debug_str, ENT_QUOTES) . '</pre>';
			
        } else {
        	return 0;
        }
        
  	}

}

/* End of file Email_queue.php */
/* Location: ./application/libraries/Email_queue.php */
