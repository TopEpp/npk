<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
        $this->load->model('service/service_model','service');

    }

    function index(){
    	$data = array();
    	$data['year'] = $this->admin_model->getYear();

    	$this->config->set_item('title', 'จัดการปีงบประมาณ');
        $this->template->javascript->add('assets/modules/admin/index.js');
        $this->setView('index', $data);
        $this->publish();
    }

    function create_year(){
    	$maxYear = $this->admin_model->getMaxYear();
    	$this->admin_model->create_year($maxYear);

    	$this->service->removeProjectYear($maxYear);
    	$this->service->duplicate_project($maxYear);
    	$this->service->duplicate_estimate($maxYear);
    	$this->service->duplicate_estimate_tax($maxYear);

    	redirect(base_url('admin'));

    }
}