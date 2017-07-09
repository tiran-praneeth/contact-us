<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		/* Load the libraries and helpers */
		$this->load->helper(array('form', 'url', 'captcha'));
		$this->load->model('Contactus_model');
		$this->load->library('Nusoap_library');
	}

	/* Contact us form initiator */
	public function index()
	{
		//whenever someone gets to the page we will create a captcha and render the form
    	$data['image']	= $this->_create_captcha();
    	$data['insurance_type']	= array('Motor Insurance', 'Travel Insurance', 'Home Insurance', 'Health Insurance', 'All Classes of property insurance', 'Customized corporate solutions', 'Personal Life Insurance', 'Group Assurance', 'Retirement Plans');
		$this->template->set($data);
        $this->template->current_view = 'contactus';
        $this->template->render();
	}

	/* Contact us form validation */
	public function verify()
	{
		$data	= array();
    	$form   = $this->input->post('form', TRUE);
	    if($this->form_validation->run($form)===false) /* if the form validation failed */
	    {
	    	$data['result']	= FALSE;
	      	$data['image']	= $this->_create_captcha(); /* we will again call the captcha creator to recreate the captcha and the image */
	      	$data['errors']	= $this->form_validation->error_array();
	      	echo json_encode($data);
	    }
	    else
	    {	    	
	    	$message_data	= $this->input->post(array('cx_name', 'cx_mobile', 'cx_email', 'insurance_type', 'cx_message'), TRUE);
	    	$message_result	= $this->Contactus_model->save_message($message_data);

	    	if ($message_result) {
	    		$send_broker_email = $this->send_inquiry_email('INQUIRIES_BROKER', $message_data); // send email to broker
	    		$send_customer_email = $this->send_inquiry_email('INQUIRIES_CUSTOMER', $message_data, array($message_data['cx_email'])); // send email to customer
	    	}

    		$data['result']	= $message_result;
    		echo json_encode($data);
	    }
  	}

  	/**
  	 * Send Inquiry Email
  	 * 
  	 * @param  string $function_name - email function(template) name
  	 * @param  array  $email_data    - email data set
  	 * @param  array  $ex_email      - optional - primary email array
  	 * @return array                
  	 */
  	public function send_inquiry_email($function_name, $email_data, $ex_email = null)
  	{
        $function_list = $this->Contactus_model->get_email_fun_list($function_name);

        if (!empty($function_list)) {

        	if (empty($ex_email)) {
        		$primary_email = $this->Contactus_model->get_primary_email_ids($function_list['id']); // primary email list
	        } else {
	        	$primary_email = $ex_email;
	        }

	        $cc_email = $this->Contactus_model->get_all_cc_email_ids($function_list['id']); // cc email email list
	        $bcc_email = $this->Contactus_model->get_all_bcc_email_ids($function_list['id']); // bcc email email list
	        $attachments = array();

		    $input_params['input_params'] = array
			(
				/* Mandatory parameter list */
				 'app_code'       => $this->config->item('email_app_code'),
				 'email_template' => $function_name, // email template tag name
				 'primary_email'  => json_encode($primary_email),
				 'cc_email'       => json_encode($cc_email),
				 'bcc_email'      => json_encode($bcc_email),
				 'email_data'     => json_encode($email_data),
				 'attached_url'   => json_encode($attachments),
			);

			$api_key = $this->config->item('email_app_key'); // auth key for email app authentication

			$header = (
	                "<authCredentials>" .
	                "<api_key>" . htmlspecialchars($api_key) . "</api_key>" .
	                "</authCredentials>"
	                );

			$server_url = $this->config->item('email_app_url'); // live url
			$email_app_url_test = $this->config->item('email_app_url_test'); // test url
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

  	/* Force refresh captcha by user */
  	public function refresh_captcha()
  	{
  		$data			= array();
  		$data['image']	= $this->_create_captcha();
  		echo json_encode($data);
  	}

  	/* Alpha & spaces validation call back function */
  	public function alpha_dash_space($fullname)
  	{
		if (! preg_match('/^[a-zA-Z\s]+$/', $fullname))
		{
			$this->form_validation->set_message('alpha_dash_space', 'The %s field may only contain alpha characters & white spaces');
			return FALSE;
		} 
		else 
		{
			return TRUE;
		}
	}

	/* Captcha validation */
  	public function check_captcha($string)
	{
		if(strtolower($string)==$this->session->userdata('captchaword'))
		{
		  return TRUE;
		}
		else
		{
		  $this->form_validation->set_message('check_captcha', 'Wrong captcha code');
		  return FALSE;
		}
	}
	
	/* Create captcha */
	private function _create_captcha()
  	{
	    // we will set all the variables needed to create the captcha image
	    $options	= array('img_path'=>FCPATH.'assets/captcha/','img_url'=>site_url().'assets/captcha/','img_width'=>'150','img_height'=>'40','expiration'=>7200, 'word_length'=>4, 'font_size'	=> 40);
	    //now we will create the captcha by using the helper function create_captcha()
	    $cap 		= create_captcha($options);
	    // we will store the image html code in a variable
	    $image 		= $cap['image'];
	    // ...and store the captcha word in a session
	    $this->session->set_userdata('captchaword', strtolower($cap['word']));
	    // we will return the image html code
	    return $image;
  	}
}

/* End of file Contactus.php */
/* Location: ./application/controllers/Contactus.php */