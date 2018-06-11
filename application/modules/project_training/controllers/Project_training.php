<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project_training extends MY_Controller
{

    public function __construct(){
        parent::__construct();
        $this->load->model('project_model');

    }

    public function project()
    {
        $data = array();
        $this->config->set_item('title', 'ระบบบริหารโครงการ - เทศบาลตำบลหนองป่าครั่ง');

        $this->template->javascript->add('assets/modules/project_training/index.js');
        
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
        if ($edit == 'false'){
          
           
            if (!empty($id)){
                $data['project_parent'] = $id;
                $data['project_level'] = 2;
            }
            else{
                $data['project_level'] = 1;
            }
            if (!empty($hidden_level)){
                $data['project_level'] = $hidden_level;
            }

            $data['project_title'] = $this->input->post('data');

            $status = $this->project_model->insertProject($data);
        }
        else{
     
            $data['project_title'] = $this->input->post('data');
            $status = $this->project_model->editProject($id,$data);
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
        if ($edit == 'false'){
            foreach ($tmp as $key => $value) {
                $data[$value['name']] = $value['value'];
            }
            $data['prj_create'] = date('Y-m-d H:i:s');
            $status = $this->project_model->insertPrj($id,$data);
        }
        else{
           
            foreach ($tmp as $key => $value) {
                $data[$value['name']] = $value['value'];
            }
            $status = $this->project_model->insertPrj($id,$data);
        }
       
        
        
        $this->json_publish($status);
    }

    //delete prj 
    public function delPrj($id,$state = ''){
        $this->project_model->delPrj($id,$state);
        redirect('project_training/project');
    }


    //get data project_traing all
    public function getProjectJson(){
        $data = array();
        $data_budget =['','งบบุคลากร','งบดำเนินงาน','งบลงทุน','งบเงินอุดหนุน','งบกลาง'];
        $data_cost = [
            '','เงินเดือน (ฝ่ายการเมือง)','เงินเดือน (ฝ่ายประจำ)','ค่าตอบแทน','ค่าใช้สอย','ค่าวัสดุ','ค่าสาธารณูปโภค',
            'ค่าครุภัณฑ์','ค่าที่ดินและสิ่งก่อสร้าง','เงินอุดหนุน','งบกลาง'
        ];
        $values = $this->project_model->getProject();
        $data['total'] = count($values);
       
        foreach ($values as $key => $value) {
            $data['rows'][$key]['id'] = $value->project_id;
            $data['rows'][$key]['budget'] = '';
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
            $data['rows'][$data['total']+$key]['id'] = '';
            $data['rows'][$data['total']+$key]['budget'] = number_format($value->prj_budget);
            $data['rows'][$data['total']+$key]['name'] = "<p style='color:#73899f;'>".$value->prj_name.'</p>';
            $data['rows'][$data['total']+$key]['tools'] = "
            <button disabled onClick='add_prj(".$value->prj_id.")' class='btn btn-success' type='button'><i class='fa fa-plus'></i></button>
            <button onClick='edit_prj(".$value->prj_id.")' id='project_edit' class='btn btn-warning' type='button'><i class='fa fa-edit'></i></button>
            <button onClick='del_prj(".$value->prj_id.",".'"1"'.")'  id='project_del' class='btn btn-danger' type='button'><i class='fa fa-trash'></i></button>";
            $data['rows'][$data['total']+$key]['_parentId'] = $value->prj_parent;
            $data['rows'][$data['total']+$key]['iconCls'] = 'icon-ok';
             
        }
    
        $this->json_publish($data);
    }


}
