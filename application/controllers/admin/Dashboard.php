<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('clubmodel','',TRUE);
    }

    public function index()
    {
        $this->data['page_title'] = 'Dashboard';

        $this->data['allClub'] = $this->clubmodel->countAllClub();
        $this->render('admin/dashboard_view');
    }

    public function error(){
    	$this->load->view('admin/404');
    }
}
