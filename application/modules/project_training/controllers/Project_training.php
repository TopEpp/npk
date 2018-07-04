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
    public function insertPrj()
    {
        // $tmp = $this->input->post('data');
        // $id = $this->input->post('id');
        $edit = $this->input->post('edit');
        if ($edit == 'false') {
            // print_r( $this->input->post());die();
            $data = array();
            //check parent_id
            $data['prj_parent'] = $this->input->post('prj_parent');
            $root_prj_id = $this->input->post('prj_id');
            if ($root_prj_id != '0'){
                $data['prj_parent'] = $this->input->post('prj_id');
            }
            // foreach ($tmp as $key => $value) {
            //     $data[$value['name']] = $value['value'];
            // }
            //check type budget
            $inside = $this->input->post('prj_budget_inside');
            $convert = $this->input->post('prj_budget_convert');
            if ($inside == '1' && $convert != '1'){
                // remove comma budget
                $budget = floatval(preg_replace('/[^\d.]/', '', $this->input->post('prj_budget')));
                $data['prj_budget'] = $budget;
                $data['prj_budget_sum'] = $budget;
            }
            else if ($inside != '1' && $convert == '1'){
                $tmp = array();
                foreach ($this->input->post('prj_select') as $key => $value) {
                    $budget = floatval(preg_replace('/[^\d.]/', '', $value));
                    array_push($tmp,$budget);
                }
                $data['prj_budget'] = array_sum($tmp);
                $data['prj_budget_sum'] = array_sum($tmp);
            }else{
                $budget_in = floatval(preg_replace('/[^\d.]/', '', $this->input->post('prj_budget')));
                $tmp = array();
                foreach ($this->input->post('prj_select') as $key => $value) {
                    $budget = floatval(preg_replace('/[^\d.]/', '', $value));
                    array_push($tmp,$budget);
                }
                $budget_con = array_sum($tmp);
                
                $data['prj_budget'] = $budget_in + $budget_con;
                $data['prj_budget_sum'] = $budget_in + $budget_con;
               
            }
           

            $data['prj_name'] = $this->input->post('prj_name');
            $data['approve'] = $this->input->post('approve');
            $data['prj_type'] = $this->input->post('prj_type');
            $data['prj_type_connect'] = $this->input->post('prj_type_connect');
            $data['prj_create'] = date('Y-m-d H:i:s');
            $data['prj_owner'] = $_SESSION['user_id'] ;
            //check state prj
            $state = $this->project_model->getState();
            if ($state == 1) {
                $data['prj_new'] = '1';
                $data['state'] = '1';
            }
            $data['prj_year'] =  $this->session->userdata('year');
            //insert project to table prj
            $id_insert = $this->project_model->insertPrj($data);

            //insert log budget 
        
            if ($inside == '1') // inside budget
            {
                $data_budget = array();
                $data_budget['prj_id'] = $id_insert;
                $data_budget['prj_budget_parent'] = '0';
                $data_budget['prj_budget_type'] = '1';
                $budget = floatval(preg_replace('/[^\d.]/', '', $this->input->post('prj_budget')));
                $data_budget['prj_amount'] = $budget;
                // print_r($data_budget);die();
                $this->project_model->setLogBudget($data_budget);
            }
            // print_r($data_budget);die();
            if ( $convert == '1'){ // convert budget
                $budget_parent = array();
                foreach ($this->input->post('prj_select') as $key => $value) {
                    $data_budget = array();
                    $data_budget['prj_id'] = $id_insert;
                    $data_budget['prj_budget_parent'] = '0';
                    $data_budget['prj_ref_id'] = $key;
                    $data_budget['prj_budget_type'] = '2';
                    $budget = floatval(preg_replace('/[^\d.]/', '', $value));
                    $data_budget['prj_amount'] = $budget;
                    $bud_parent = $this->project_model->setLogBudget($data_budget);
                  
                    array_push($budget_parent,$bud_parent);

                }
   
                // convert revert prj_id
                $cout = 0;
                foreach ($this->input->post('prj_select') as $key => $value) {
                    $data_budget = array();
                    $data_budget['prj_id'] = $key;
                    $data_budget['prj_budget_parent'] = $budget_parent[$cout];
                    $data_budget['prj_ref_id'] = $id_insert;
                    $data_budget['prj_budget_type'] = '2';
                    $budget = floatval(preg_replace('/[^\d.]/', '', $value));
                    $data_budget['prj_amount'] = -abs($budget) ;
                    $this->project_model->setLogBudget($data_budget);

                    //update budget prj form convert data
                        //get budget prj_id
                    $budget = $this->project_model->getBudget($key);
                  
                    $budget_update['prj_budget_sum'] =  $budget->prj_budget_sum + $data_budget['prj_amount'];
                    $this->project_model->insertPrj($budget_update,$key);

                    $cout++;

                }


            }
           
         

            
        } else {
           //check type budget
           $inside = $this->input->post('prj_budget_inside');
           $convert = $this->input->post('prj_budget_convert');
           if ($inside == '1' && $convert != '1'){
               // remove comma budget
               $budget = floatval(preg_replace('/[^\d.]/', '', $this->input->post('prj_budget')));
            //    $data['prj_budget'] = $budget;
               $data['prj_budget_sum'] = $budget;
           }
           else if ($inside != '1' && $convert == '1'){
               $edit_tmp = array();
               foreach ($this->input->post('prj_selects') as $key => $value) {
                   $budget = floatval(preg_replace('/[^\d.]/', '', $value));
                   array_push($edit_tmp,$budget);
               }

               $tmp = array();
               foreach ($this->input->post('prj_select') as $key => $value) {
                   $budget = floatval(preg_replace('/[^\d.]/', '', $value));
                   array_push($tmp,$budget);
               }
            //    $data['prj_budget'] = (array_sum($tmp) + array_sum($edit_tmp));
               $data['prj_budget_sum'] = (array_sum($tmp) + array_sum($edit_tmp));
           }else{
               $budget_in = floatval(preg_replace('/[^\d.]/', '', $this->input->post('prj_budget')));
               
               $edit_tmp = array();
               foreach ($this->input->post('prj_selects') as $key => $value) {
                   $budget = floatval(preg_replace('/[^\d.]/', '', $value));
                   array_push($edit_tmp,$budget);
               }
               $budget_con_edit = array_sum($edit_tmp);
               $tmp = array();
               if(!empty($this->input->post('prj_select'))){
                    foreach (@$this->input->post('prj_select') as $key => $value) {
                        $budget = floatval(preg_replace('/[^\d.]/', '', $value));
                        array_push($tmp,$budget);
                    }
                }
               $budget_con = array_sum($tmp);
               
            //    $data['prj_budget'] = $budget_in ;
               $data['prj_budget_sum'] = $budget_in + $budget_con + $budget_con_edit;
              
           }
          
           $prj_id = $this->input->post('prj_id');
           $data['prj_name'] = $this->input->post('prj_name');
           $data['approve'] = $this->input->post('approve');
           $data['prj_type'] = $this->input->post('prj_type');
           $data['prj_type_connect'] = $this->input->post('prj_type_connect');
           $data['prj_owner_update'] = $_SESSION['user_id'] ;
            // update prj
            $status = $this->project_model->insertPrj($data,$prj_id);
            
             //insert log budget 

             if ($inside == '1') // inside budget
             {
                 //set update data
                 $data_update['id'] = $prj_id;
                 $data_update['ref'] = '';

                 $data_budget = array();
                 $data_budget['prj_id'] = $prj_id;
                 $data_budget['prj_budget_parent'] = '0';
                 $data_budget['prj_budget_type'] = '1';
                 $budget = floatval(preg_replace('/[^\d.]/', '', $this->input->post('prj_budget')));

                 $budget_log = $this->project_model->getBudgetLog($prj_id,'1');
            
                 //merage budget_log and check data edit
                 $sum = 0;
                 foreach ($budget_log as $key => $value) {
                    $sum = ($sum + $value->prj_amount);
                 }
                 $budget = ($budget - $sum);

                 $data_budget['prj_amount'] = $budget;
                 $this->project_model->setLogBudget($data_budget);
             }
             
             if ( $convert == '1'){ // convert budget

                 $budget_parent = array();
                 foreach ($this->input->post('prj_selects') as $key => $value) {
                    $data_update['id'] = $prj_id;
                    $data_update['ref'] = $key; 
                     $data_budget = array();
                    //  $data_budget['prj_id'] = $id_insert;
                    //  $data_budget['prj_budget_parent'] = '0';
                    //  $data_budget['prj_ref_id'] = $key;
                    //  $data_budget['prj_budget_type'] = '2';
                     $budget = floatval(preg_replace('/[^\d.]/', '', $value));
                     $data_budget['prj_amount'] = $budget;
                     $bud_parent = $this->project_model->setLogBudget($data_budget,$data_update,'2',true);
                   
                     array_push($budget_parent,$bud_parent);
 
                 }
    
                 // convert revert prj_id
                 $cout = 0;
                 foreach ($this->input->post('prj_selects') as $key => $value) {
                    $data_update['id'] = $key;
                    $data_update['ref'] = $prj_id; 
                     $data_budget = array();
                    //  $data_budget['prj_id'] = $key;
                    //  $data_budget['prj_budget_parent'] = $budget_parent[$cout];
                    //  $data_budget['prj_ref_id'] = $id_insert;
                    //  $data_budget['prj_budget_type'] = '2';
                     $budget = floatval(preg_replace('/[^\d.]/', '', $value));
                     $data_budget['prj_amount'] = -abs($budget) ;
                     $this->project_model->setLogBudget($data_budget,$data_update,'2');
 
                     //update budget prj form convert data
                         //get budget prj_id
                     $budget = $this->project_model->getBudget($key);
                   
                     $budget_update['prj_budget_sum'] =  $budget->prj_budget_sum + $data_budget['prj_amount'];
                     $this->project_model->insertPrj($budget_update,$key);
 
                     $cout++;
 
                 }
 
 
             }

             if ( $convert == '1'){ // convert budget insert 
                $budget_parent = array();
                foreach ($this->input->post('prj_select') as $key => $value) {
                    $data_budget = array();
                    $data_budget['prj_id'] = $prj_id;
                    $data_budget['prj_budget_parent'] = '0';
                    $data_budget['prj_ref_id'] = $key;
                    $data_budget['prj_budget_type'] = '2';
                    $budget = floatval(preg_replace('/[^\d.]/', '', $value));
                    $data_budget['prj_amount'] = $budget;
                    $bud_parent = $this->project_model->setLogBudget($data_budget);
                  
                    array_push($budget_parent,$bud_parent);

                }
   
                // convert revert prj_id
                $cout = 0;
                foreach ($this->input->post('prj_select') as $key => $value) {
                    $data_budget = array();
                    $data_budget['prj_id'] = $key;
                    $data_budget['prj_budget_parent'] = $budget_parent[$cout];
                    $data_budget['prj_ref_id'] = $prj_id;
                    $data_budget['prj_budget_type'] = '2';
                    $budget = floatval(preg_replace('/[^\d.]/', '', $value));
                    $data_budget['prj_amount'] = -abs($budget) ;
                    $this->project_model->setLogBudget($data_budget);

                    //update budget prj form convert data
                        //get budget prj_id
                    $budget = $this->project_model->getBudget($key);
                  
                    $budget_update['prj_budget_sum'] =  $budget->prj_budget_sum + $data_budget['prj_amount'];
                    $this->project_model->insertPrj($budget_update,$key);

                    $cout++;

                }


            }
        }

        redirect('project_training/project');


        // $this->json_publish($status);
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
            $data['rows'][$key]['budget'] = number_format($value->prj_budget_sum);
            $data['rows'][$key]['name'] = $value->project_title;

            switch ($value->project_level) {
                case '1':
                    $data['rows'][$key]['tools'] = " 
                    <div class='btn-group'><button  onClick='project_add_plan(".$value->project_id.")' class='btn btn-success btn-sm' type='button'>เพิ่ม</button>
                    <button  onClick='project_add_plan(".$value->project_id.",".'"'.$value->project_title.'"'.")' id='project_edit' class='btn btn-warning btn-sm' type='button'>แก้ไข</button>
                    <button  onClick='del_prj(".$value->project_id.")' id='project_del' class='btn btn-danger btn-sm' type='button'>ลบ</button></div>";
                    
                    break;
                case '2':
                    $data['rows'][$key]['tools'] = "
                    <div class='btn-group'><button  onClick='project_add(".$value->project_id.")' class='btn btn-success btn-sm' type='button'>เพิ่ม</button>
                    <button  onClick='project_add_plan(".$value->project_id.",".'"'.$value->project_title.'"'.")' id='project_edit' class='btn btn-warning btn-sm' type='button'>แก้ไข</button>
                    <button  onClick='del_prj(".$value->project_id.")' id='project_del' class='btn btn-danger btn-sm' type='button'>ลบ</button></div>";
                    break;
                case '3':
                    $data['rows'][$key]['name'] = $data_budget[$value->project_title];

                    $data['rows'][$key]['tools'] = "
                    <div class='btn-group'><button  onClick='project_add_cost(".$value->project_id.")' class='btn btn-success btn-sm' type='button'>เพิ่ม</button>
                    <button  onClick='project_add(".$value->project_id.",".'"'.$value->project_title.'"'.")' id='project_edit' class='btn btn-warning btn-sm' type='button'>แก้ไข</button>
                    <button  onClick='del_prj(".$value->project_id.")' id='project_del' class='btn btn-danger btn-sm' type='button'>ลบ</button></div>";
                    break;

                default:
                    $data['rows'][$key]['name'] = $data_cost[$value->project_title];

                    $data['rows'][$key]['tools'] = "
                    <div class='btn-group'><button  onClick='add_prj(".$value->project_id.")' class='btn btn-success btn-sm ' type='button'>เพิ่ม</button>
                    <button  onClick='project_add_cost(".$value->project_id.",".'"'.$value->project_title.'"'.")' id='project_edit' class='btn btn-warning btn-sm' type='button'>แก้ไข</button>
                    <button onClick='del_prj(".$value->project_id.")' id='project_del' class='btn btn-danger btn-sm' type='button'>ลบ</button></div>";

                    break;
            }


            $data['rows'][$key]['_parentId'] = $value->project_parent;


        }

        $prj = $this->project_model->getPrj();
        foreach ($prj as $key => $value) {
            $data['rows'][$data['total'] + $key]['id'] = $value->prj_id;
            $data['rows'][$data['total'] + $key]['budget'] = number_format($value->prj_budget_sum);
            $data['rows'][$data['total'] + $key]['name'] = "<p style='color:#73899f;'>" . $value->prj_name . '</p>';
            $data['rows'][$data['total'] + $key]['tools'] = "
            <div class='btn-group'><button onClick='pay_prj(" . $value->prj_id . ")' id='project_edit' class='btn btn-default btn-sm' type='button'>จ่าย</button>
            <button  onClick='add_prj(". $value->prj_parent ."," . $value->prj_id . ")' class='btn btn-success btn-sm' type='button'>เพิ่ม</button>
            <button onClick='edit_prj(" . $value->prj_parent ."," . $value->prj_id . ")' id='project_edit' class='btn btn-warning btn-sm' type='button'>แก้ไข</button>
            <button onClick='del_prj(" . $value->prj_id . "," . '"1"' . ")'  id='project_del' class='btn btn-danger btn-sm' type='button'>ลบ</button></div>";
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

    public function prjAdd($parent,$id ='0'){
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
        if (empty($data['prj_tree'])){
            $data['prj_tree'] = $this->project_model->getTitleTreeChild($parent);
            // print_r($data['prj_tree']);die();
            $num = 0;
            foreach ( $data['prj_tree'] as $key => $value) {
                if ($num == 1)
                    $data['prj_tree'][$key] = $data_cost[$data['prj_tree'][$key]];
                if ($num == 2)
                    $data['prj_tree'][$key] = $data_budget[$data['prj_tree'][$key]];
                $num++;
            }
        }
        // if (!empty($id) && $id != '0'){
        //     $data['prj_tree'] = $this->project_model->getTitleTree($parent);
        //     // $data['prj_tree_child'] = $this->project_model->getTitleTreeChild($id);
        //     // print_r($data['prj_tree_child']);die();
        // }
      

        $data['prj_tree'] = array_reverse( $data['prj_tree']);
        $data['prj_tree'] = implode("/",$data['prj_tree']);

        $data['prj_all'] = $this->project_model->getPrjArray();
        $data['prj_name'] = $this->project_model->getPrj('',true);
        $data['prj'] = $this->project_model->getPrj($id,false);

        $data['budget_log'] = $this->project_model->getBudgetLog($data['prj'][0]->prj_id);

        // print_r($data['prj']);die();

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

    public function searchPrj(){
        $val = $this->input->post('data');
        $data = $this->project_model->searchPrj($val);
        $result = array();
        foreach ($data as $key => $value) {
            $value->expenses_amount_result = number_format( $value->prj_budget - $value->expenses_amount_result,2);
            $value->prj_budget = number_format( $value->prj_budget,2);
            
            $result[$key] = $value;
        }

        $this->json_publish($result);
    }

    public function getPrjSelect(){
        $val = $this->input->post('data');
        $data = $this->project_model->getPrjSelect($val);

        $result = array();
        foreach ($data as $key => $value) {
            $value->expenses_amount_result = number_format( $value->prj_budget - $value->expenses_amount_result,2);
            $value->prj_budget = number_format( $value->prj_budget,2);
            
            $result[$key] = $value;
        }

        $this->json_publish($result);

    }


}
