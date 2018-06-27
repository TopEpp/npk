<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tax_estimate extends MY_Controller
{

    public function index()
    {
        $data = array();
        $this->load->model('Tax_estimate_model','estimate_model');

        $data['tax'] = $this->estimate_model->getTax();
        $this->config->set_item('title', 'ระบบบัญชีรายรับ - บันทึกประมานการ ภาษี');
        $this->setView('index', $data);
        $this->publish();
    }

    function saveEstimate(){
        $input = $this->input->post();

        echo '<pre>';
        print_r($input);
    }

}
