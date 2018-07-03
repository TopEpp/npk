<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Report_model');

    }

    public function report_rec()
    {
        $data = array();
        $data['getrec'] = $this->Report_model->getrec();

        $this->config->set_item('title', 'รายงานรายรับ - เทศบาลตำบลหนองป่าครั่ง');
        $this->template->javascript->add('assets/modules/report/js/chart.js');
        $this->setView('report_rec', $data);
        $this->publish();
        
    }


    public function report_pay()
    {
        $data = array();
        $this->config->set_item('title', 'รายงานบัญชีรายจ่าย - เทศบาลตำบลหนองป่าครั่ง');

        $this->template->javascript->add('assets/modules/report/js/chart_pay.js');
        $this->setView('report_pay', $data);
        $this->publish();
    }

    public function report_debt()
    {
        $data = array();
        $year =  $this->session->userdata('year');
        $data['taxDebt'] = $this->Report_model->getTaxDebt($year);
        $data['person'] = $this->Report_model->getPersonDebt($year);

        $this->config->set_item('title', 'รายงานลูกหนี้ - เทศบาลตำบลหนองป่าครั่ง');
        $this->template->javascript->add('assets/modules/report/js/chart_debt.js');
        $this->setView('report_debt', $data);
        $this->publish();   
    }
   


    public function report_projectManage()
    {
        $this->config->set_item('title', 'รายงานยุทธศาสตร์ - เทศบาลตำบลหนองป่าครั่ง');
        $data = array();
        $this->load->model('project_training/project_model');
        $data['project'] = $this->project_model->getProject();
        $prj = array();
        foreach ($data['project'] as $key => $value) {
            $prj[$value->project_id] = $value;
        }
 
        // var_dump($prj[0]);die();
        $data['project'] = $this->project_model->getTreeProjectManage($prj);

        $this->template->javascript->add('assets/modules/report/js/chart_project_manage.js');
        $this->setView('report_project_manage', $data);
        $this->publish();

    }

    public function getAjaxProjectManage()
    {
        $this->load->model('project_training/project_model');
        $data = array();
        $project = $this->project_model->getProject();
        foreach ($project as $key => $value) {
            if (empty($value->project_parent)) {
                $data[] = $value;
            }
        }
        $this->json_publish($data);
    }

    function report_person($id){
        $data = array();
        $data['data'] = $this->Report_model->getPersonTax($id);

        $this->config->set_item('title', 'ทะเบียนคุมผู้ชำระภาษี');
        $this->setView('report_person', $data);
        $this->publish();   
    }


}
