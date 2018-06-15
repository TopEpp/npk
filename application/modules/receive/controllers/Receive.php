<?php

use function GuzzleHttp\Promise\each;

defined('BASEPATH') or exit('No direct script access allowed');
ini_set('max_execution_time', 0);
ini_set('memory_limit', '2048M');

class Receive extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Receive_model');

    }
    public function receive_dashborad()
    {
        $data = array();
        $this->config->set_item('title', 'ข้อมูลการประเมินรายรับ - เทศบาลตำบลหนองป่าครั่ง');
        $data['notice'] = $this->Receive_model->read_dashborad();
        $this->setView('receive_dashborad', $data);
        $this->publish();
    }

    public function insert_receive()
    {
        $input = $this->input->post();

        $this->Receive_model->insertNotice($input);
        redirect(base_url('Receive/receive_dashborad'));
    }


    public function receive_add($id = '')
    {
        $data = array();

        $this->config->set_item('title', 'หน้าหลัก - เทศบาลตำบลหนองป่าครั่ง');

        $data['tax_notice'] = $this->Receive_model->read_receive($id);

        $query = $this->db->query("SELECT * FROM tbl_operation");
        $data['operation'] = $query->result();

        $query = $this->db->query("SELECT * FROM tbl_year");
        $data['years'] = $query->result();


        $this->setView('receive_add', $data);
        $this->publish();
    }

    public function receive_notice($id = '')
    {
        $data = array();

        if (!empty($id)) {
            $data['notice'] = $this->Receive_model->getNoticeAll($id);

        }

        $query = $this->db->query("SELECT * FROM tbl_operation");
        $data['operation'] = $query->result();

        $query = $this->db->query("SELECT * FROM tbl_year");
        $data['years'] = $query->result();

        $this->config->set_item('title', 'หน้าหลัก - เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('receive_edit', $data);
        $this->publish();

    }


        //add or edit notice to db
    public function receive_notice_save($id = '')
    {
            // check data noice tpye

        $data = array();
        $check_num = $this->input->post('notice_number');
        foreach ($check_num as $key => $value) {
            if (!empty($this->input->post('notice_number')[$key])) {
                $data['tax_id'] = $key + 8;
                $data['individual_id'] = $this->input->post('individual_id')[$key];
                $data['tax_year'] = $this->input->post('tax_year')[$key];
                $data['tax_local_year'] = $this->input->post('tax_local_year')[$key];
                $data['notice_date'] = $this->input->post('notice_date')[$key];
                $data['notice_reception'] = $this->input->post('notice_reception')[$key];
                $data['notice_number'] = $this->input->post('notice_number')[$key];
                $data['notice_no'] = $this->input->post('notice_no')[$key];
                $data['notice_deed'] = $this->input->post('notice_deed')[$key];
                $data['notice_estimate'] = $this->input->post('notice_estimate')[$key];
                $data['notice_address_number'] = $this->input->post('notice_address_number')[$key];
                $data['notice_address_moo'] = $this->input->post('notice_address_moo')[$key];
                $data['notice_address_subdistrict'] = $this->input->post('notice_address_subdistrict')[$key];
                // $data['notice_asset'] = $this->input->post('notice_asset')[$key];
                $data['notice_annual_fee'] = $this->input->post('notice_annual_fee')[$key];
                $data['noice_type_operation'] = $this->input->post('noice_type_operation')[$key];
                $data['noice_name_operation'] = $this->input->post('noice_name_operation')[$key];
                // $data['land_deed_number'] = $this->input->post('land_deed_number')[$key];
                $data['land_rai'] = $this->input->post('land_rai')[$key];
                $data['land_ngan'] = $this->input->post('land_ngan')[$key];
                $data['land_wa'] = $this->input->post('land_wa')[$key];
                $data['land_tax'] = $this->input->post('land_tax')[$key];
                // $data['banner_type'] = $this->input->post('banner_type')[$key];
                // $data['banner_width'] = $this->input->post('banner_width')[$key];
                // $data['banner_heigth'] = $this->input->post('banner_heigth')[$key];
                // $data['banner_amount'] = $this->input->post('banner_amount')[$key];


                // $status = $this->Receive_model->insertNotice($data);
                if (!empty($id)) {
                    $status = $this->Receive_model->insertNotice($data, $id);
                } else {
                    $status = $this->Receive_model->insertNotice($data);
                }

            }
        }
        redirect(base_url('receive/receive_dashborad'));


    }


    public function receive_tax()
    {
        $data = array();
        //load mudule
        $data['individual'] = $this->Receive_model->read_receive();

        $this->config->set_item('title', 'ข้อมูลผู้เสียภาษี - เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('receive_tax', $data);
                //load js 
        $this->template->javascript->add('assets/modules/receive/index.js');
        $this->publish();
    }

    //////////////////////////////// other_tax //////////////////////////

    public function other_tax()
    {
        $data = array();

        $data['tax_receive'] = $this->Receive_model->getOtherTaxAll();

        $this->config->set_item('title', 'รายการข้อมูลรายรับภาษีอื่น - เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('other_tax', $data);
        $this->publish();
    }

    public function insert_other_tax()
    {
        $input = $this->input->post();

        $this->Receive_model->insertOtherTax($input);
        redirect(base_url('Receive/other_tax'));
    }

    public function updateOtherTax()
    {
        $input = $this->input->post();
        $this->Receive_model->updateOtherTax($input);
        redirect(base_url('Receive/other_tax'));
    }

    public function other_tax_update()
    {
        $id = $this->uri->segment(3);
        $query = $this->Receive_model->read_OtherTax_update($id);

        $value = array(
            'other_tax' => $query
        );
        $this->config->set_item('title', 'แก้ไขรายการรายรับภาษี - เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('other_tax_update', $value);
        $this->publish();

    }

    public function other_tax_add()
    {
        $data = array();

        $tax_allocate = $this->db->query("SELECT * FROM tbl_tax WHERE tax_parent_id = '2' ORDER BY tax_name");
        $tax_fine = $this->db->query("SELECT * FROM tbl_tax WHERE tax_parent_id = '3' ORDER BY tax_name");
        $tax_asset = $this->db->query("SELECT * FROM tbl_tax WHERE tax_parent_id = '4' ORDER BY tax_name");
        $tax_health = $this->db->query("SELECT * FROM tbl_tax WHERE tax_parent_id = '5' ORDER BY tax_name");
        $tax_miscellaneous = $this->db->query("SELECT * FROM tbl_tax WHERE tax_parent_id = '6' ORDER BY tax_name");
        $tax_subsidy = $this->db->query("SELECT * FROM tbl_tax WHERE tax_parent_id = '7' ORDER BY tax_name");

        $data['tax_allocate'] = $tax_allocate->result();
        $data['tax_fine'] = $tax_fine->result();
        $data['tax_asset'] = $tax_asset->result();
        $data['tax_health'] = $tax_health->result();
        $data['tax_miscellaneous'] = $tax_miscellaneous->result();
        $data['tax_subsidy'] = $tax_subsidy->result();

        $this->config->set_item('title', 'บันทึกรายรับภาษีอื่น - เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('other_tax_add', $data);
        $this->publish();


    }


    //form individual  
    public function receive_taxadd_popup($id = '')
    {
        $data = array();

        if (!empty($id)) {
            $data['individual'] = $this->Receive_model->read_receive($id);
            $amphur = substr($data['individual'][0]->individual_provice, 0, 2);
            $data['amphur'] = array();
            if ($amphur) {
                $query = $this->db->query("SELECT area_code,area_name_th FROM std_area WHERE area_type = 'Amphur' AND area_code LIKE '{$amphur}%' ");
                $data['amphur'] = $query->result();
            }


            $tambon = substr($data['individual'][0]->individual_district, 0, 4);
            $data['tambon'] = array();
            if ($tambon) {
                $query = $this->db->query("SELECT area_code,area_name_th FROM std_area WHERE area_type = 'Tambon' AND area_code LIKE '{$tambon}%'  ");
                $data['tambon'] = $query->result();
            }

            $amphur = substr($data['individual'][0]->individual_send_province, 0, 2);
            $data['send_amphur'] = array();
            if ($amphur) {
                $query = $this->db->query("SELECT area_code,area_name_th FROM std_area WHERE area_type = 'Amphur' AND area_code LIKE '{$amphur}%'  ");
                $data['send_amphur'] = $query->result();
            }


            $tambon = substr($data['individual'][0]->individual_send_district, 0, 4);
            $data['send_tambon'] = array();
            if ($tambon) {
                $query = $this->db->query("SELECT area_code,area_name_th FROM std_area WHERE area_type = 'Tambon' AND area_code LIKE '{$tambon}%'  ");
                $data['send_tambon'] = $query->result();
            }


        }

        $this->config->set_item('title', 'หน้าหลัก - เทศบาลตำบลหนองป่าครั่ง');
        
        // query get prename 
        $query = $this->db->query("SELECT * FROM std_prename WHERE pren_status = 'Active'");
        $data['prename'] = $query->result();
        // query get prename 
        $query = $this->db->query("SELECT area_code,area_name_th FROM std_area WHERE area_type = 'Province' ORDER BY area_name_th ");
        $data['province'] = $query->result();



        $this->template->stylesheet->add('assets/plugins/select2/dist/css/select2.css');
        $this->template->javascript->add('assets/plugins/select2/dist/js/select2.js');

        //import smartwizard
        $this->template->javascript->add('assets/plugins/gentelella-master/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js');
        //import input mark
        $this->template->javascript->add('assets/plugins/gentelella-master/vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js');

        //load js 
        $this->template->javascript->add('assets/modules/receive/taxadd.js');
        $this->setView('receive_taxadd_popup', $data);
        $this->publish();

    }
        
    //add or edit individual to db
    public function receive_taxadd_popup_save($id = '')
    {
        // check data individual tpye

        $data = array();

        $check_num = $this->input->post('individual_number');
        foreach ($check_num as $key => $value) {
            if (!empty($this->input->post('individual_number')[$key])) {
                $data['individual_type'] = $key + 1;
                $data['individual_number'] = $this->input->post('individual_number')[$key];
                $data['individual_prename'] = $this->input->post('individual_prename')[$key];
                $data['individual_fullname'] = $this->input->post('individual_firstname')[$key] . '' . $this->input->post('individual_lastname')[$key];
                $data['individual_firstname'] = $this->input->post('individual_firstname')[$key];
                $data['individual_lastname'] = $this->input->post('individual_lastname')[$key];
                $data['individual_address'] = $this->input->post('individual_address')[$key];
                $data['individual_village'] = $this->input->post('individual_village')[$key];
                $data['individual_road'] = $this->input->post('individual_road')[$key];
                $data['individual_lane'] = $this->input->post('individual_lane')[$key];
                $data['individual_provice'] = $this->input->post('individual_provice')[$key];
                $data['individual_district'] = $this->input->post('individual_district')[$key];
                $data['individual_subdistrict'] = $this->input->post('individual_subdistrict')[$key];
                $data['individual_zipcode'] = $this->input->post('individual_zipcode')[$key];

                $data['individual_send_address'] = $this->input->post('individual_send_address')[$key];
                $data['individual_send_village'] = $this->input->post('individual_send_village')[$key];
                $data['individual_send_road'] = $this->input->post('individual_send_road')[$key];
                $data['individual_send_lane'] = $this->input->post('individual_send_lane')[$key];
                $data['individual_send_province'] = $this->input->post('individual_send_province')[$key];
                $data['individual_send_district'] = $this->input->post('individual_send_district')[$key];
                $data['individual_send_subdistrict'] = $this->input->post('individual_send_subdistrict')[$key];
                $data['individual_send_zipcode'] = $this->input->post('individual_send_zipcode')[$key];
                $data['individual_phone'] = $this->input->post('individual_phone')[$key];
                $data['individual_business_name'] = $this->input->post('individual_business_name')[$key];

                //insert data individual
                if (!empty($id)) {
                    $status = $this->Receive_model->insertIndividual($data, $id);
                } else {
                    $status = $this->Receive_model->insertIndividual($data);
                }

            }
        }
        redirect(base_url('receive/receive_tax'));


    }
    
    //delete individual 
    public function receive_tax_delete($id)
    {
        $this->Receive_model->del_individual($id);
        redirect(base_url('receive/receive_tax'));

    }

    public function receive_tax_pay()
    {
        $data = array();
        $this->config->set_item('title', 'หน้าหลัก - เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('receive_tax_pay', $data);
        $this->publish();
    }

    public function receive_save()
    {
        $data = array();
        $this->config->set_item('title', 'ข้อมูลบันทึกรายรับ - เทศบาลตำบลหนองป่าครั่ง');
        $this->setView('receive_save', $data);
        $this->publish();
    }




    //get data json district 
    public function getDistrict()
    {
        $province = $this->input->post('province');
        if (!empty($province)) {
            $province = substr($province, 0, 2);
            $query = $this->db->query("SELECT area_code,area_name_th FROM std_area WHERE area_type = 'Amphur' AND area_code LIKE '{$province}%' ");

            echo '<option value="">เลือก</option>';
            foreach ($query->result() as $value) {
                echo '<option value="' . $value->area_code . '">' . $value->area_name_th . '</option>';
            }

        }
        return false;
    }

    //get data json subdistrict 
    public function getSubDistrict()
    {
        $district = $this->input->post('district');
        if (!empty($district)) {
            $district = substr($district, 0, 4);
            $query = $this->db->query("SELECT area_code,area_name_th FROM std_area WHERE area_type = 'Tambon' AND area_code LIKE '{$district}%' ");
            // if(!empty($query->result())){
            echo '<option value="">เลือก</option>';
            foreach ($query->result() as $value) {
                echo '<option value="' . $value->area_code . '">' . $value->area_name_th . '</option>';
            }
            // }else{
            //     return false;
            // }
        }
        return false;

    }

    public function getAjaxReceiveTax()
    {
        $order_index = $this->input->get('order[0][column]');
        $param['page_size'] = $this->input->get('length');
        $param['start'] = $this->input->get('start');
        $param['draw'] = $this->input->get('draw');
        $param['keyword'] = trim($this->input->get('search[value]'));
        $param['column'] = $this->input->get("columns[{$order_index}][data]");
        $param['dir'] = $this->input->get('order[0][dir]');
        //check filter data
        $filter = array();
        foreach ($this->input->get("columns") as $key => $value) {
            $filter[] = $value['search']['value'];
        }
        $param['filter'] = $filter;
        $results = $this->Receive_model->getRecieveTaxAjax($param);

        $data['draw'] = $param['draw'];
        $data['recordsTotal'] = $results['count'];
        $data['recordsFiltered'] = $results['count_condition'];
        $data['data'] = $results['data'];
        $data['error'] = $results['error_message'];
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }
    //import users to table indevidual form data house 
    // public function import_data_house(){
    //     //import module 
    //     $this->load->model('import/import_model');
    //     $this->load->model('receive_model');

	// 	$dataTmp = $this->import_model->getTmpHouse();
    //     // change some data to type int 
	// 	foreach ($dataTmp as $key => $value) {
	// 		$provice_id = $this->import_model->getProviceID($value->tmp_province_send);
	// 		$district_id = $this->import_model->getDistrictID($provice_id,$value->tmp_district_send);
	// 		$subdistrict_id = $this->import_model->getSubDistrictID($district_id,$value->tmp_subdistrict_send);

	// 		$dataTmp[$key]->provice_id_send = $provice_id;
	// 		$dataTmp[$key]->district_id_send = $district_id;
	// 		$dataTmp[$key]->subdistrict_id_send = $subdistrict_id;
    //     }

    //     //import data to table individual
    //     $dataImport = array();
    //     foreach ($dataTmp as $key => $value) {

    //         if (strlen($value->tmp_Identification) == 12){
    //             $dataImport['individual_type'] = 2;
    //         }else{
    //             $dataImport['individual_type'] = 1;
    //         }

    //         $dataImport['individual_prename'] = $value->tmp_prename;
    //         $dataImport['individual_fullname'] = $value->tmp_firstname .' '. $value->tmp_lastname;
    //         $dataImport['individual_firstname'] = $value->tmp_firstname;
    //         $dataImport['individual_lastname'] = $value->tmp_lastname;
    //         $dataImport['individual_number'] = $value->tmp_Identification;
    //         $dataImport['individual_address'] = $value->tmp_number;
    //         $dataImport['individual_village'] = $value->tmp_village;
    //         $dataImport['individual_subdistrict'] = $value->tmp_subdistrict;
    //         $dataImport['individual_send_address'] = $value->tmp_number_send;
    //         $dataImport['individual_send_village'] = $value->tmp_village_send;
    //         $dataImport['individual_send_road'] = $value->tmp_road_send;
    //         $dataImport['individual_send_lane'] = $value->tmp_lane_send;
    //         $dataImport['individual_send_province'] = $value->provice_id_send;
    //         $dataImport['individual_send_district'] = $value->district_id_send;
    //         $dataImport['individual_send_subdistrict'] = $value->subdistrict_id_send;
    //         $dataImport['individual_send_zipcode'] = $value->tmp_zipcode_send;
    //         $dataImport['individual_business_name'] = $value->tmp_type_business;

    //         //insert data to table
    //         $status = $this->receive_model->insertData($dataImport);
            
    //     }
    //     echo $status ;
    //         die();
        
        
    // }

    public function import_data_label()
    {
        //import module 
        $this->load->model('import/import_model');
        $this->load->model('receive_model');

        $dataTmp = $this->import_model->getTmpLabel();
        echo '<pre>';
        // change some data to type int 
        foreach ($dataTmp as $key => $value) {
            $provice_id = $this->import_model->getProviceID($value->tmp_province);
            $district_id = $this->import_model->getDistrictID($provice_id, $value->tmp_district);
            $subdistrict_id = $this->import_model->getSubDistrictID($district_id, $value->tmp_subdistrict);

            $dataTmp[$key]->provice_id = $provice_id;
            $dataTmp[$key]->district_id = $district_id;
            $dataTmp[$key]->subdistrict_id = $subdistrict_id;
        }
        // print_r($dataTmp);

        //import data to table individual
        $dataImport = array();
        foreach ($dataTmp as $key => $value) {

            if (strlen($value->tmp_Identification) == 12) {
                $dataImport['individual_type'] = 2;
            } else {
                $dataImport['individual_type'] = 1;
            }

            $dataImport['individual_prename'] = $value->tmp_prename;
            $dataImport['individual_fullname'] = $value->tmp_firstname . ' ' . $value->tmp_lastname;
            $dataImport['individual_firstname'] = $value->tmp_firstname;
            $dataImport['individual_lastname'] = $value->tmp_lastname;
            $dataImport['individual_number'] = $value->tmp_Identification;
            $dataImport['individual_address'] = $value->tmp_number;
            $dataImport['individual_village'] = $value->tmp_village;
            $dataImport['individual_road'] = $value->tmp_road;
            $dataImport['individual_lane'] = $value->tmp_lane;
            $dataImport['individual_subdistrict'] = $value->subdistrict_id;
            $dataImport['individual_provice'] = $value->provice_id;
            $dataImport['individual_district'] = $value->district_id;
            $dataImport['individual_zipcode'] = $value->tmp_zipcode;
            $dataImport['individual_business_name'] = $value->tmp_name_store;

            //insert data to table
            $status = $this->receive_model->insertData($dataImport);

        }
        // echo $status ;
        //     die();


    }

    public function import_data_ward()
    {
        //import module 
        $this->load->model('import/import_model');
        $this->load->model('receive_model');

        $dataTmp = $this->import_model->getTmpWard();
        echo '<pre>';
        // change some data to type int 
        foreach ($dataTmp as $key => $value) {
            $provice_id = $this->import_model->getProviceID($value->tmp_province);
            $district_id = $this->import_model->getDistrictID($provice_id, $value->tmp_district);
            $subdistrict_id = $this->import_model->getSubDistrictID($district_id, $value->tmp_subdistrict);

            $dataTmp[$key]->provice_id = $provice_id;
            $dataTmp[$key]->district_id = $district_id;
            $dataTmp[$key]->subdistrict_id = $subdistrict_id;
        }
        // print_r($dataTmp);

        //import data to table individual
        $dataImport = array();
        foreach ($dataTmp as $key => $value) {

            if (strlen($value->tmp_Identification) == 12) {
                $dataImport['individual_type'] = 2;
            } else {
                $dataImport['individual_type'] = 1;
            }

            $dataImport['individual_prename'] = $value->tmp_prename;
            $dataImport['individual_fullname'] = $value->tmp_firstname . ' ' . $value->tmp_lastname;
            $dataImport['individual_firstname'] = $value->tmp_firstname;
            $dataImport['individual_lastname'] = $value->tmp_lastname;
            $dataImport['individual_number'] = $value->tmp_Identification;
            $dataImport['individual_address'] = $value->tmp_number;
            $dataImport['individual_village'] = $value->tmp_village;
            $dataImport['individual_road'] = $value->tmp_road;
            $dataImport['individual_lane'] = $value->tmp_lane;
            $dataImport['individual_subdistrict'] = $value->subdistrict_id;
            $dataImport['individual_provice'] = $value->provice_id;
            $dataImport['individual_district'] = $value->district_id;
            $dataImport['individual_zipcode'] = $value->tmp_zipcode;
          
            //insert data to table
            $status = $this->receive_model->insertData($dataImport);

        }
        echo $status;
        die();
    }




}
