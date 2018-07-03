<?php

class Report_model extends CI_Model

{
    public $_dataTax;

    public function getReport_rec_All()
    {
        $query = $this->db->get('tax_receive');
        return $query->result();
    }

    public  function getTaxDebt($year){
        $data = array();
        $this->db->select('tbl_tax.*,
                           SUM(notice_estimate) AS notice_estimate');
        $this->db->from('tbl_tax');
        $this->db->JOIN('tax_notice','tbl_tax.tax_id= tax_notice.tax_id');
        $this->db->where('tax_notice.tax_year', $year);
        $this->db->GROUP_BY('tbl_tax.tax_id');

        $query = $this->db->get();
        foreach ($query->result() as $key => $value) {
            @$data[$value->tax_id]->tax_name = $value->tax_name;
            @$data[$value->tax_id]->notice_estimate = $value->notice_estimate;
        }

        $this->db->select('tbl_tax.*,
                           SUM(receive_amount) AS receive_amount,
                           SUM(interest) as interest');
        $this->db->from('tbl_tax');
        $this->db->JOIN('tax_notice','tbl_tax.tax_id= tax_notice.tax_id');
        $this->db->JOIN('tax_receive','tax_notice.notice_id= tax_receive.notice_id');
        $this->db->where('tbl_tax.tax_parent_id',1);
        $this->db->where('tax_notice.tax_year', $year);
        $this->db->GROUP_BY('tbl_tax.tax_id');

        $query = $this->db->get();
        foreach ($query->result() as $key => $value) {
            @$data[$value->tax_id]->receive_amount = $value->receive_amount;
            @$data[$value->tax_id]->interest = $value->interest;
        }

        return $data;
    }

    function getPersonDebt($year){
        $data = array();
        $this->db->select('tbl_tax.*, tbl_individual.*,
                            SUM(notice_estimate) AS notice_estimate,
                            SUM(receive_amount) AS receive_amount,
                            SUM(interest) as interest');
        $this->db->from('tbl_tax');
        $this->db->JOIN('tax_notice','tbl_tax.tax_id= tax_notice.tax_id');
        $this->db->JOIN('tax_receive','tax_notice.notice_id= tax_receive.notice_id','left');
        $this->db->join('tbl_individual','tbl_individual.individual_id = tax_notice.individual_id','left');
        $this->db->where('tbl_tax.tax_parent_id',1);
        $this->db->where('tax_notice.tax_year', $year);
        $this->db->GROUP_BY('tbl_individual.individual_id,tbl_tax.tax_id');
        // $this->db->having('notice_estimate > receive_amount');
        $query = $this->db->get();
        foreach ($query->result() as $key => $value) {

            @$data[$value->individual_id]['name'] = $value->individual_firstname.' '.$value->individual_lastname;
            @$data[$value->individual_id]['idcard'] = $value->individual_number;

            @$data[$value->individual_id][$value->tax_id]['notice_estimate'] = $value->notice_estimate; 
            @$data[$value->individual_id][$value->tax_id]['receive_amount'] = $value->receive_amount;
            @$data[$value->individual_id][$value->tax_id]['interest'] = $value->interest;
        }

        return $data;
    }



    public  function getrec($parent=0)
    {
        $year =  $this->session->userdata('year');
         $this->db->select('tbl_tax.*,SUM(receive_amount) AS receive_amount , SUM(tbl_tax_estimate.tax_estimate) as tax_estimate');
         $this->db->from('tbl_tax');
         $this->db->join('tax_receive','tbl_tax.tax_id= tax_receive.tax_id','left');
         $this->db->join('tbl_tax_estimate',"tbl_tax_estimate.tax_id = tbl_tax.tax_id and tbl_tax_estimate.year_id = '{$year}' ",'left');
         $this->db->where('tax_parent_id',$parent);
         $this->db->GROUP_BY('tbl_tax.tax_id');

         $query = $this->db->get();
         foreach ($query->result() as $key => $value) {
            @$this->_dataTax[$value->tax_parent_id][$value->tax_id] = $value;
            $this->getrec($value->tax_id);
          }
          
          return $this->_dataTax;

    }


    function getTax1($parent=0){
        $year =  $this->session->userdata('year');
        $this->db->select('tbl_tax.*,tbl_tax_estimate.tax_estimate');
        $this->db->from('tbl_tax');
        $this->db->join('tbl_tax_estimate',"tbl_tax_estimate.tax_id = tbl_tax.tax_id and tbl_tax_estimate.year_id = '{$year}' ",'left');
        $this->db->where('tax_parent_id',$parent);
        $query = $this->db->get();
        foreach ($query->result() as $key => $value) {
            @$this->_dataTax[$value->tax_parent_id][$value->tax_id] = $value;

            $this->getTax1($value->tax_id);
        }
        
        return $this->_dataTax;
    }

    function getPersonTax($id){
        $data = array();
        $this->db->select('tbl_tax.*, 
                            tbl_individual.*,
                            tax_notice.*');
        $this->db->from('tbl_tax');
        $this->db->join('tax_notice','tbl_tax.tax_id= tax_notice.tax_id');
        // $this->db->join('tax_receive','tax_notice.notice_id= tax_receive.notice_id','left');
        $this->db->join('tbl_individual','tbl_individual.individual_id = tax_notice.individual_id','left');
        $this->db->where('tbl_tax.tax_parent_id',1);
        $this->db->where('tbl_individual.individual_id', $id);
        // $this->db->GROUP_BY('tbl_individual.individual_id,tbl_tax.tax_id,tax_notice.tax_year,tax_notice.notice_id');
        // $this->db->having('notice_estimate > receive_amount');
        $query = $this->db->get();
        foreach ($query->result() as $key => $value) {


            @$data['person']['name'] = $value->individual_firstname.' '.$value->individual_lastname;
            @$data['person']['idcard'] = $value->individual_number;
            @$data['person']['address'] = $value->individual_address;
            @$data['person']['village'] = $value->individual_village;
            @$data['person']['phone'] = $value->individual_phone;
            @$data['person']['fax'] = '';

            @$data['tax'][$value->tax_year][$value->tax_id][$value->notice_id]['notice_estimate'] = $value->notice_estimate; 
        }

        return $data;
    }

}
