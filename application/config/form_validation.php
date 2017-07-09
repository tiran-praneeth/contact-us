<?php
/*
 * This is to create the validation rules in the whole system
 */
$config = array(
    'contactus' => array(
        array(
            'field' => 'cx_name',
            'label' => 'Name',
            'rules' => 'trim|required|min_length[5]|max_length[50]|callback_alpha_dash_space'
        ),
        array(
            'field' => 'cx_mobile',
            'label' => 'Mobile No',
            'rules' => 'trim|required|exact_length[10]|numeric'
        ),
        array(
            'field' => 'cx_email',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email|max_length[50]'
        ),
        array(
            'field' => 'insurance_type',
            'label' => 'Insurance type',
            'rules' => 'trim|required'
        ),
        array(
            'field' => 'cx_message',
            'label' => 'Message',
            'rules' => 'trim|required|min_length[5]|max_length[200]'
        ),
        array(
            'field' => 'cx_captcha',
            'label' => 'Captcha',
            'rules' => 'trim|callback_check_captcha[cx_captcha]|required'
        ),        
    )
);