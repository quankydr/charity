<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Statistic extends Admin_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('categorymodel','',TRUE);
        $this->load->model('providermodel','',TRUE);
        $this->load->model('groupmodel','',TRUE);
        $this->load->model('productmodel','',TRUE);
    }

    public function index()
    {
    	$this->data['page_title'] = 'Application Statistic';
    	$this->data['page_js'] = 'statistic';
        $this->data['all_product'] = $this->productmodel->getAllProduct();
        $this->data['all_brand'] = $this->providermodel->getAllProviders();
        $this->data['all_category'] = $this->categorymodel->getAllCategory();
        $this->data['all_group'] = $this->groupmodel->getAllGroup();
        $this->render('admin/statistic/statistic_view');
    }

}