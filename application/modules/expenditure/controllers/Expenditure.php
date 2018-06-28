<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Expenditure extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('expenditure_model');

    }

    public function expenditure_prj()
    {
        // $data['title'] = "ระบบบัญชีรายจ่าย";
        // $data['subtitle'] = "เทศบาลตำบลหนองป่าครั่ง";
        // $data['view_isi'] = "expenditure_prj";

        // $this->load->view('template/template', $data);
        $data = array();
        $this->config->set_item('title', 'ระบบบัญชีรายจ่าย - เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('expenditure_prj', $data);
        $this->publish();
    }

    function search_prj(){
        $data = array();
        $this->config->set_item('title', 'ระบบบัญชีรายจ่าย - ค้นหาโครงการ');
        $this->template->javascript->add('assets/modules/expenditure/search.js');
        $this->setView('search_prj', $data);
        $this->publish();
    }

    function getPrj(){
        $keyword = $this->input->post('keyword');
        $data['prj'] = $this->expenditure_model->getPrjByKeyword($keyword);
        $data['keyword'] = $keyword;

        $this->load->view('table_prj',$data);
    }

    function expenditure_form($project_id=''){
        $data = array();
        if($project_id==''){
            redirect(base_url('expenditure/search_prj'));
        }

        $this->config->set_item('title', 'ระบบบัญชีรายจ่าย - บันทึกการเบิกจ่าย');
        $data['prj'] = $this->expenditure_model->getPrjById($project_id);
        $data['expenses'] = $this->expenditure_model->getPrjExpenses($project_id);

        $data['project_id'] = $project_id;
        $this->setView('expenditure_form', $data);
        $this->publish();
    }

    function saveExpenditure(){
        $input = $this->input->post();
        $this->expenditure_model->saveExpenditure($input);

        redirect(base_url('expenditure/expenditure_prj'));

    }

    

}
