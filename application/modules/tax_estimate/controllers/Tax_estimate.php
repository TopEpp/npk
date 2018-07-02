<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tax_estimate extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Tax_estimate_model', 'estimate_model');

    }

    public function index()
    {
        $data = array();

        $data['tax'] = $this->estimate_model->getTax();
        $this->config->set_item('title', 'ระบบบัญชีรายรับ - บันทึกประมานการ ภาษี');
        $this->setView('index', $data);
        $this->publish();
    }

    function saveEstimate()
    {
        $input = $this->input->post();

        $year = $this->session->userdata('year');
        $this->estimate_model->saveEstimate($year, $input);

        redirect(base_url('tax_estimate'));
    }

}
