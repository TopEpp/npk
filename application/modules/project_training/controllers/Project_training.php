<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project_training extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('project_model');

    }

    public function project()
    {
        $data = array();
        $this->config->set_item('title', 'ระบบบริหารโครงการ - เทศบาลตำบลหนองป่าครั่ง');

        //get state prj 
        $data['state'] = $this->project_model->getState();
        $data['user'] = $this->project_model->getUser();
        $this->template->javascript->add('assets/modules/project_training/index.js');

        $this->template->stylesheet->add('assets/plugins/gentelella-master/vendors/switchery/dist/switchery.css');
        $this->template->javascript->add('assets/plugins/gentelella-master/vendors/switchery/dist/switchery.js');

        $this->setView('project', $data);
        $this->publish();
    }

    //get prj
    public function getPrj()
    {
        $data = $this->input->post('data');
        $status = $this->project_model->getPrj($data);
        $this->json_publish($status);
    }

    //insert project manage
    public function insertProjectPlan()
    {

        $data = array();
        $id = $this->input->post('id');
        $hidden_level = $this->input->post('level');
        $edit = $this->input->post('edit');  
   
        // $data['project_create'] = date('Y-m-d H:i:s');
        if ($edit == 'false') {


            if (!empty($id)) {
                $data['project_parent'] = $id;
                $data['project_level'] = 2;
            } else {
                $data['project_level'] = 1;
            }
            if (!empty($hidden_level)) {
                $data['project_level'] = $hidden_level;
            }

            $data['project_year'] =  $this->session->userdata('year');

            $data['project_title'] = $this->input->post('data');

            $status = $this->project_model->insertProject($data);
        } else {

            $data['project_title'] = $this->input->post('data');
            $status = $this->project_model->editProject($id, $data);
        }


        $this->json_publish($status);
    }

    //insert prj
    public function insertProject()
    {
        $data = array();
        $tmp = $this->input->post('data');
        $id = $this->input->post('id');
        $edit = $this->input->post('edit');
        if ($edit == 'false') {
            foreach ($tmp as $key => $value) {
                $data[$value['name']] = $value['value'];
            }
            $data['prj_create'] = date('Y-m-d H:i:s');
            $data['prj_owner_update'] = $_SESSION['user_id'] ;
            //check state prj
            $state = $this->project_model->getState();
            if ($state == 1) {
                $data['prj_new'] = '1';
                $data['state'] = '1';
            }
            $data['prj_year'] =  $this->session->userdata('year');
            $status = $this->project_model->insertPrj($data);
        } else {

            foreach ($tmp as $key => $value) {
                $data[$value['name']] = $value['value'];
            }
            //update owner edit
            $data['prj_owner_update'] = $_SESSION['user_id'] ;
            $status = $this->project_model->insertPrj($data,$id);
        }



        $this->json_publish($status);
    }

    //delete prj 
    public function delPrj($id,$state = ''){
        $this->project_model->delPrj($id,$state);

        redirect('project_training/project');
    }


    //get data project_traing all
    public function getProjectJson()
    {
        $data = array();
        $data_budget = ['', 'งบบุคลากร', 'งบดำเนินงาน', 'งบลงทุน', 'งบเงินอุดหนุน', 'งบกลาง'];
        $data_cost = [
            '', 'เงินเดือน (ฝ่ายการเมือง)', 'เงินเดือน (ฝ่ายประจำ)', 'ค่าตอบแทน', 'ค่าใช้สอย', 'ค่าวัสดุ', 'ค่าสาธารณูปโภค',
            'ค่าครุภัณฑ์', 'ค่าที่ดินและสิ่งก่อสร้าง', 'เงินอุดหนุน', 'งบกลาง'
        ];
        $values = $this->project_model->getProject();
        $data['total'] = count($values);

        foreach ($values as $key => $value) {
            $data['rows'][$key]['id'] = $value->project_id;
            $data['rows'][$key]['budget'] = number_format($value->prj_budget);
            $data['rows'][$key]['name'] = $value->project_title;

            switch ($value->project_level) {
                case '1':
                    $data['rows'][$key]['tools'] = "
                    <button  onClick='project_add_plan(".$value->project_id.")' class='btn btn-success' type='button'><i class='fa fa-plus'></i></button>
                    <button  onClick='project_add_plan(".$value->project_id.",".'"'.$value->project_title.'"'.")' id='project_edit' class='btn btn-warning' type='button'><i class='fa fa-edit'></i></button>
                    <button  onClick='del_prj(".$value->project_id.")' id='project_del' class='btn btn-danger' type='button'><i class='fa fa-trash'></i></button>";

                    break;
                case '2':
                    $data['rows'][$key]['tools'] = "
                    <button  onClick='project_add(".$value->project_id.")' class='btn btn-success' type='button'><i class='fa fa-plus'></i></button>
                    <button  onClick='project_add_plan(".$value->project_id.",".'"'.$value->project_title.'"'.")' id='project_edit' class='btn btn-warning' type='button'><i class='fa fa-edit'></i></button>
                    <button  onClick='del_prj(".$value->project_id.")' id='project_del' class='btn btn-danger' type='button'><i class='fa fa-trash'></i></button>";
                    break;
                case '3':
                    $data['rows'][$key]['name'] = $data_budget[$value->project_title];

                    $data['rows'][$key]['tools'] = "
                    <button  onClick='project_add_cost(".$value->project_id.")' class='btn btn-success' type='button'><i class='fa fa-plus'></i></button>
                    <button  onClick='project_add(".$value->project_id.",".'"'.$value->project_title.'"'.")' id='project_edit' class='btn btn-warning' type='button'><i class='fa fa-edit'></i></button>
                    <button  onClick='del_prj(".$value->project_id.")' id='project_del' class='btn btn-danger' type='button'><i class='fa fa-trash'></i></button>";
                    break;

                default:
                    $data['rows'][$key]['name'] = $data_cost[$value->project_title];

                    $data['rows'][$key]['tools'] = "
                    <button  onClick='add_prj(".$value->project_id.")' class='btn btn-success' type='button'><i class='fa fa-plus'></i></button>
                    <button  onClick='project_add_cost(".$value->project_id.",".'"'.$value->project_title.'"'.")' id='project_edit' class='btn btn-warning' type='button'><i class='fa fa-edit'></i></button>
                    <button onClick='del_prj(".$value->project_id.")' id='project_del' class='btn btn-danger' type='button'><i class='fa fa-trash'></i></button>";

                    break;
            }


            $data['rows'][$key]['_parentId'] = $value->project_parent;


        }

        $prj = $this->project_model->getPrj();
        foreach ($prj as $key => $value) {
            $data['rows'][$data['total'] + $key]['id'] = $value->prj_id;
            $data['rows'][$data['total'] + $key]['budget'] = number_format($value->prj_budget);
            $data['rows'][$data['total'] + $key]['name'] = "<p style='color:#73899f;'>" . $value->prj_name . '</p>';
            $data['rows'][$data['total'] + $key]['tools'] = "
            <button onClick='pay_prj(" . $value->prj_id . ")' id='project_edit' class='btn btn-default' type='button'><i class='fa fa-paypal'></i></button>
            <button  onClick='add_prj(". $value->prj_parent ."," . $value->prj_id . ")' class='btn btn-success' type='button'><i class='fa fa-plus'></i></button>
            <button onClick='edit_prj(" . $value->prj_id . ")' id='project_edit' class='btn btn-warning' type='button'><i class='fa fa-edit'></i></button>
            <button onClick='del_prj(" . $value->prj_id . "," . '"1"' . ")'  id='project_del' class='btn btn-danger' type='button'><i class='fa fa-trash'></i></button>";
            $data['rows'][$data['total'] + $key]['_parentId'] = $value->prj_parent;
            // $data['rows'][$data['total']+$key]['iconCls'] = 'icon-ok';

        }

        $this->json_publish($data);
    }

    //update state 
    public function updateState()
    {
        $status = $this->project_model->updateState($this->input->post('data'));
        $this->json_publish($status);

    }

    public function prjAdd($parent,$id){
        $data_budget = ['', 'งบบุคลากร', 'งบดำเนินงาน', 'งบลงทุน', 'งบเงินอุดหนุน', 'งบกลาง'];
        $data_cost = [
            '', 'เงินเดือน (ฝ่ายการเมือง)', 'เงินเดือน (ฝ่ายประจำ)', 'ค่าตอบแทน', 'ค่าใช้สอย', 'ค่าวัสดุ', 'ค่าสาธารณูปโภค',
            'ค่าครุภัณฑ์', 'ค่าที่ดินและสิ่งก่อสร้าง', 'เงินอุดหนุน', 'งบกลาง'
        ];

        $this->config->set_item('title', 'ระบบบริหารโครงการ - เทศบาลตำบลหนองป่าครั่ง');
        
        $data['prj_tree'] = $this->project_model->getTitleTree($parent);
        $num = 0;
        foreach ( $data['prj_tree'] as $key => $value) {
            if ($num == 0)
                $data['prj_tree'][$key] = $data_cost[$data['prj_tree'][$key]];
            if ($num == 1)
                $data['prj_tree'][$key] = $data_budget[$data['prj_tree'][$key]];
            $num++;
        }

        $data['prj_tree'] = array_reverse( $data['prj_tree']);
        $data['prj_tree'] = implode("/",$data['prj_tree']);
        $data['user'] = $this->project_model->getUser();
        $data['prj'] = $this->project_model->getPrj();

        // $this->project_model->getPrjRespon();

        $this->template->stylesheet->add('assets/plugins/gentelella-master/vendors/nprogress/nprogress.css');
        $this->template->stylesheet->add('assets/plugins/gentelella-master/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css');
        $this->template->javascript->add('assets/plugins/gentelella-master/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js');

        // <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        // <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        $this->template->stylesheet->add('assets/plugins/select2/dist/css/select2.css');

        $this->template->javascript->add('assets/plugins/gentelella-master/vendors/jquery.easy-pie-chart/dist/jquery.easypiechart.min.js');
        // <script src=".."></script>
        $this->template->javascript->add('assets/plugins/select2/dist/js/select2.js');
        $this->template->javascript->add('assets/modules/project_training/prj_add.js');

        $this->setView('prj', $data);
        $this->publish();
    }

    public function getPrjRespon(){
        $data = array();
        $this->project_model->getPrjRespon();
    }


}
