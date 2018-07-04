<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Expenditure extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('expenditure_model');

    }
    public function expenditure_menu()
    {
        $data = array();
        $this->config->set_item('title', 'บันทึกรายจ่าย - เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('expenditure_menu', $data);
        $this->publish();
    }


    public function expenditure_prj()
    {
        // $data['title'] = "ระบบบัญชีรายจ่าย";
        // $data['subtitle'] = "เทศบาลตำบลหนองป่าครั่ง";
        // $data['view_isi'] = "expenditure_prj";

        // $this->load->view('template/template', $data);
        $data = array();
        $year = $this->session->userdata('year');
        $data['expenditure'] = $this->expenditure_model->getExpenditure($year);
        $this->config->set_item('title', 'ระบบบัญชีรายจ่าย - เทศบาลตำบลหนองป่าครั่ง');
        $this->template->javascript->add('assets/modules/expenditure/search.js');
        $this->setView('expenditure_prj', $data);
        $this->publish();
    }

    function search_prj()
    {
        $data = array();
        $this->config->set_item('title', 'ระบบบัญชีรายจ่าย - ค้นหาโครงการ');
        $this->template->javascript->add('assets/modules/expenditure/search.js');
        $this->setView('search_prj', $data);
        $this->publish();
    }

    function getPrj()
    {
        $keyword = $this->input->post('keyword');
        $data['prj'] = $this->expenditure_model->getPrjByKeyword($keyword);
        $data['keyword'] = $keyword;

        $this->load->view('table_prj', $data);
    }

    function expenditure_form($project_id = '',$expenses = '')
    {
        $data = array();
        if ($project_id == '') {
            redirect(base_url('expenditure/search_prj'));
        }

        $this->config->set_item('title', 'ระบบบัญชีรายจ่าย - บันทึกการเบิกจ่าย');
        $data['prj'] = $this->expenditure_model->getPrjById($project_id);

        $data['expenses'] = $this->expenditure_model->getPrjExpenses($project_id,$expenses);

        $data['project_id'] = $project_id;
        $this->template->javascript->add('assets/modules/expenditure/form.js');
        $this->setView('expenditure_form', $data);
        $this->publish();
    }

    function saveExpenditure()
    {
        $input = $this->input->post();
        $this->expenditure_model->saveExpenditure($input);

        redirect(base_url('expenditure/expenditure_prj'));

    }

    public function expenditure_del($id){
        $this->expenditure_model->expenditure_del($id);
        redirect(base_url('expenditure/expenditure_prj'));
    }

    public function saveExpenditureNumber(){
        $id = $this->input->post('id');
        $input['expenses_number'] = $this->input->post('expenses_number');
        $input['expenses_date_disburse'] = $this->input->post('expenses_date_disburse');
        $result = $this->expenditure_model->saveExpenditureNumber($id,$input);
		$this->json_publish($result);
	}



}
