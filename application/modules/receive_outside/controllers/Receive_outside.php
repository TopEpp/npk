<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Receive_outside extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Receive_outside_model');

    }

    public function index()
    {
        $data = array();
        $this->config->set_item('title', 'ข้อมูลบันทึกรายรับ - เทศบาลตำบลหนองป่าครั่ง');
        $data['out_pay'] = $this->Receive_outside_model->getOutPay();
        $this->template->javascript->add('assets/modules/receive_outside/search.js');
        $this->setView('receive_save', $data);
        $this->publish();
    }

    public function outside()
    {

        $data = array();
        $this->config->set_item('title', 'ระบบรายรับนอกงบประมาณ - เทศบาลตำบลหนองป่าครั่ง');
        $this->template->javascript->add('assets/modules/receive_outside/outside.js');
        $this->setView('outside', $data);
        $this->publish();
    }

    // public function outside_prj()
    // {
   
    //     // $data['title'] = "ระบบบัญชีรายจ่าย";
    //     // $data['subtitle'] = "เทศบาลตำบลหนองป่าครั่ง";
    //     // $data['view_isi'] = "expenditure_prj";

    //     // // $this->load->view('template/template', $data);
    //     $data = array();
    //     $data['outside'] = $this->Receive_outside_model->getOut();
    //     $this->config->set_item('title', 'ระบบบัญชีรายจ่าย - เทศบาลตำบลหนองป่าครั่ง');
    //     $this->template->javascript->add('assets/modules/receive_outside/search.js');
    //     $this->setView('expenditure_prj', $data);
    //     $this->publish();
    // }

    function getPrj()
    {
        $keyword = $this->input->post('keyword');
        $data['prj'] = $this->Receive_outside_model->getPrjByKeyword($keyword);
        $data['keyword'] = $keyword;

        $this->load->view('table_prj', $data);
    }

    function search_outside_prj()
    {
        $data = array();
        $this->config->set_item('title', 'ระบบบัญชีรายจ่าย - ค้นหาโครงการ');
        $this->template->javascript->add('assets/modules/receive_outside/search.js');
        $this->setView('search_prj', $data);
        $this->publish();
    }

    // //get prj
    public function getOut()
    {
        $data = $this->input->post('data');
        $status = $this->Receive_outside_model->getOut($data);
        $this->json_publish($status);
    }

    public function outside_form($id,$pay_id = ''){

        $data = array();
        $data['out'] = $this->Receive_outside_model->getOut($id);
        $data['out_pay_all'] = array();
        if (!empty($pay_id))
        {
            $data['out_pay'] = $this->Receive_outside_model->getOutPay($id,$pay_id);
            $data['out_pay_all'] = $this->Receive_outside_model->getOutPay($id);
        }  

        $this->config->set_item('title', 'ระบบบัญชีรายจ่าย - เทศบาลตำบลหนองป่าครั่ง');
        $this->template->javascript->add('assets/modules/receive_outside/search.js');
        $this->setView('outside_form', $data);
        $this->publish();
    }

    // //insert prj
    public function insertOutside()
    {
        $data = array();
        $tmp = $this->input->post('data');
        $id = $this->input->post('id');
        $edit = $this->input->post('edit');
       
        if ($edit == 'true') {
            foreach ($tmp as $key => $value) {
                $data[$value['name']] = $value['value'];
            }
            $data['out_create'] = date('Y-m-d H:i:s');
            $status = $this->Receive_outside_model->insertOut($data, $id);
        } else {
     
            foreach ($tmp as $key => $value) {
                $data[$value['name']] = $value['value'];
            }
            $status = $this->Receive_outside_model->insertOut($data, $id);
        }



        $this->json_publish($status);
    }

    // //delete prj
    public function delOut($id, $state = '')
    {
        $this->Receive_outside_model->delOut($id, $state);
        redirect('receive_outside/outside');
    }

    public function saveOutSidePay(){
        $data = $this->input->post();

        $data['outside_pay_create'] = $this->mydate->date_thai2eng($data['outside_pay_create'],-543);
        $data['outside_pay_user'] = $_SESSION['user_id'] ;
       
        $data['outside_pay_budget'] =  floatval(preg_replace('/[^\d.]/', '', $data['outside_pay_budget']));

        $data['outside_detail'] = trim($data['outside_detail']) ;
        $status = $this->Receive_outside_model->saveOutSidePay($data);
        redirect('receive_outside');
    }


    // //get data project_traing all
    public function getOutsideJson()
    {
        $data = array();
        $out = $this->Receive_outside_model->getOut();
        // $data['total'] = count($out);

        foreach ($out as $key => $value) {

            $data['rows'][$key]['id'] = $value->out_id;
            $data['rows'][$key]['budget'] = number_format($value->out_budget,2);
            $data['rows'][$key]['account_id'] = $value->out_code;
            $data['rows'][$key]['name'] = $value->out_name;
            $data['rows'][$key]['tools'] = "<div class='btn-group'>";
            if ($value->out_parent != '0'){
                $data['rows'][$key]['_parentId'] = $value->out_parent;
                $data['rows'][$key]['tools'] .=" <button  onClick='pay_out(" . $value->out_id . ")' class='btn btn-default btn-sm' type='button'>จ่าย</button>";
            }

         
            $data['rows'][$key]['tools'] .=" <button  onClick='add_out(" . $value->out_id . ")' class='btn btn-success btn-sm' type='button'>เพิ่ม</button>
            <button onClick='edit_out(" . $value->out_id . ")' id='outside_edit' class='btn btn-warning btn-sm' type='button'>แก้ไข</button>
            <button onClick='del_out(" . $value->out_id . "," . '"1"' . ")'  id='outside_del' class='btn btn-danger btn-sm' type='button'>ลบ</button></div>";

        }
        $this->json_publish($data);
    }

    public function outSidePayDel($id){
        $this->Receive_outside_model->outSidePayDel($id);
        redirect('receive_outside');
    }

  


}