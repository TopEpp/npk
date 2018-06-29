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

        $data['report'] = $this->Report_model->getReport_rec_All();

        $tax8 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '8' ");
        $tax9 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '9' ");
        $tax10 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '10' ");
        $tax11 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '11' ");
        $tax12 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '12' ");
        $tax13 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '13' ");
        $tax14 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '14' ");
        $tax15 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '15' ");
        $tax16 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '16' ");
        $tax17 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '17' ");
        $tax18 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '18' ");
        $tax19 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '19' ");
        $tax20 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '20' ");
        $tax21 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '21' ");
        $tax22 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '22' ");
        $tax23 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '23' ");
        $tax24 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '24' ");
        $tax25 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '25' ");
        $tax26 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '26' ");
        $tax27 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '27' ");
        $tax28 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '28' ");
        $tax29 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '29' ");
        $tax30 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '30' ");
        $tax31 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '31' ");
        $tax32 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '32' ");
        $tax33 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '33' ");
        $tax34 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '34' ");
        $tax35 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '35' ");
        $tax36 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '36' ");
        $tax37 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '37' ");
        $tax38 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '38' ");
        $tax39 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '39' ");
        $tax40 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '40' ");
        $tax41 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '41' ");
        $tax42 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '42' ");
        $tax43 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '43' ");
        $tax44 = $this->db->query("SELECT SUM(`receive_amount`) as sum_amount FROM tax_receive WHERE tax_id = '44' ");

        $data['tax8'] = $tax8->result();
        $data['tax9'] = $tax9->result();
        $data['tax10'] = $tax10->result();
        $data['tax11'] = $tax11->result();
        $data['tax12'] = $tax12->result();
        $data['tax13'] = $tax13->result();
        $data['tax14'] = $tax14->result();
        $data['tax15'] = $tax15->result();
        $data['tax16'] = $tax16->result();
        $data['tax17'] = $tax17->result();
        $data['tax18'] = $tax18->result();
        $data['tax19'] = $tax19->result();
        $data['tax20'] = $tax20->result();
        $data['tax21'] = $tax21->result();
        $data['tax22'] = $tax22->result();
        $data['tax23'] = $tax23->result();
        $data['tax24'] = $tax24->result();
        $data['tax25'] = $tax25->result();
        $data['tax26'] = $tax26->result();
        $data['tax27'] = $tax27->result();
        $data['tax28'] = $tax28->result();
        $data['tax29'] = $tax29->result();
        $data['tax30'] = $tax30->result();
        $data['tax31'] = $tax31->result();
        $data['tax32'] = $tax32->result();
        $data['tax33'] = $tax33->result();
        $data['tax34'] = $tax34->result();
        $data['tax35'] = $tax35->result();
        $data['tax36'] = $tax36->result();
        $data['tax37'] = $tax37->result();
        $data['tax38'] = $tax38->result();
        $data['tax39'] = $tax39->result();
        $data['tax40'] = $tax40->result();
        $data['tax41'] = $tax41->result();
        $data['tax42'] = $tax42->result();
        $data['tax42'] = $tax43->result();
        $data['tax44'] = $tax44->result();




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

        $this->load->database();
        $this->load->model('Report_model');
        $data['parentTax'] = $this->Report_model->getparentTax();
        $data['parentTax1'] = $this->Report_model->getparentTax1();
        $this->config->set_item('title', 'รายงานลูกหนี้ - เทศบาลตำบลหนองป่าครั่ง');
        $this->template->javascript->add('assets/modules/report/js/chart_debt.js');
        $this->setView('report_debt', $data);
        $this->publish();

   
    }
   


    public function report_projectManage(){
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

    public function getAjaxProjectManage(){
        $this->load->model('project_training/project_model');
        $data = array();
        $project= $this->project_model->getProject();
        foreach ($project as $key => $value) {
            if (empty($value->project_parent)){
                $data[] = $value;
            }
        }
        $this->json_publish($data);
    }


}
