<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Receive_outside extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Receive_outside_model');

    }

    public function outside()
    {

        $data = array();
        $this->config->set_item('title', 'ระบบรายรับนอกงบประมาณ - เทศบาลตำบลหนองป่าครั่ง');
        $this->template->javascript->add('assets/modules/receive_outside/outside.js');
        $this->setView('outside', $data);
        $this->publish();
    }

    // //get prj
    public function getOut()
    {
        $data = $this->input->post('data');
        $status = $this->Receive_outside_model->getOut($data);
        $this->json_publish($status);
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
            $data['rows'][$key]['tools'] = "
            <div class='btn-group'><button  onClick='add_out(" . $value->out_id . ")' class='btn btn-success btn-sm' type='button'><i class='fa fa-plus'></i></button>
            <button onClick='edit_out(" . $value->out_id . ")' id='outside_edit' class='btn btn-warning btn-sm' type='button'><i class='fa fa-edit'></i></button>
            <button onClick='del_out(" . $value->out_id . "," . '"1"' . ")'  id='outside_del' class='btn btn-danger btn-sm' type='button'><i class='fa fa-trash'></i></button></div>";

            if ($value->out_parent != '0')
                $data['rows'][$key]['_parentId'] = $value->out_parent;


        }

        // $out = $this->Receive_outside_model->getOut();
        // foreach ($out as $key => $value) {
        //     $data['rows'][$data['total'] + $key]['id'] = $value->out_id;
        //     $data['rows'][$data['total'] + $key]['budget'] = number_format($value->out_budget);
        //     $data['rows'][$data['total'] + $key]['name'] = "<p style='color:#73899f;'>" . $value->out_name . '</p>';
        //     $data['rows'][$data['total'] + $key]['tools'] = "
        //     <button  onClick='add_out(" . $value->out_id . ")' class='btn btn-success' type='button'><i class='fa fa-plus'></i></button>
        //     <button onClick='edit_out(" . $value->out_id . ")' id='outside_edit' class='btn btn-warning' type='button'><i class='fa fa-edit'></i></button>
        //     <button onClick='del_out(" . $value->out_id . "," . '"1"' . ")'  id='outside_del' class='btn btn-danger' type='button'><i class='fa fa-trash'></i></button>";
        //     $data['rows'][$data['total'] + $key]['_parentId'] = $value->out_parent;
        //     // $data['rows'][$data['total']+$key]['iconCls'] = 'icon-ok';

        // }

        $this->json_publish($data);
    }

  


}
