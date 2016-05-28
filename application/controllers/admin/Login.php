<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('loginmodel','',TRUE);
    }

    public function index()
    {
        if($this->session->userdata('adminName') && $this->session->userdata('adminName') != ""){
            redirect(site_url('/admin/dashboard'));
        } else{
            $this->load->view('admin/login');
        }
    }

    public function doLogin(){
    	$username = $this->input->post('user');
    	$password = $this->input->post('pass');
      $result = $this->loginmodel->doAdminLogin($username, $password);
    	if($result){
    		$data = array(
                    'status' => true,
                    'href'=> site_url('/admin/dashboard')
                        );
	        echo json_encode($data);
    	} else{
			$data = array(
                    'status' => false,
                    'error'=>'Wrong username or password'
                        );
	        echo json_encode($data);
    	}
    }

    public function doLogOut(){
        $this->session->sess_destroy();
        redirect(site_url('admin/login'));
    }


}
