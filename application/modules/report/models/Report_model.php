<?php

class Report_model extends CI_Model

{
    public $_dataTax;

    public function getReport_rec_All()
    {
        // $this->db->select('tax_receive.*,tbl_individual.*,tbl_tax.*');
        // $this->db->from('tax_receive');
        // $this->db->join('tbl_individual', 'tbl_individual.individual_id = tax_receive.individual_id', 'left');
        // $this->db->join('tbl_tax', 'tbl_tax.tax_id = tax_receive.tax_id', 'left');

        // $query = $this->db->get();
        // return $query->result();

        $query = $this->db->get('tax_receive');
        return $query->result();
    }

        public  function getparentTax()
        {

        $this->db->select('tbl_tax.tax_id, tax_notice.tax_id,tbl_tax.tax_name,SUM(notice_estimate) AS notice_estimate');
        $this->db->from('tbl_tax');
        $this->db->JOIN('tax_notice','tbl_tax.tax_id= tax_notice.tax_id');
        $this->db->GROUP_BY('tbl_tax.tax_id');

        $query = $this->db->get();
        return  $query->result();
        }



        public  function getparentTax1()

              {
                 $this->db->select('tbl_tax.tax_id, tax_receive.tax_id,tbl_tax.tax_name,tax_receive.interest,SUM(receive_amount) AS receive_amount');
                 $this->db->from('tbl_tax');
                 $this->db->JOIN('tax_receive','tbl_tax.tax_id= tax_receive.tax_id');
                 $this->db->where('tax_parent_id','1');
                 $this->db->GROUP_BY('tbl_tax.tax_id');

                $query = $this->db->get();
                return  $query->result();


        
              }

              public  function getrec($parent=0)

              {
                 $this->db->select('tbl_tax.*,SUM(receive_amount) AS receive_amount');
                 $this->db->from('tbl_tax');
                 $this->db->JOIN('tax_receive','tbl_tax.tax_id= tax_receive.tax_id','left');
                 $this->db->where('tax_parent_id',$parent);
                 $this->db->GROUP_BY('tbl_tax.tax_id');

                 $query = $this->db->get();
                 foreach ($query->result() as $key => $value) {
                 @$this->_dataTax[$value->tax_parent_id][$value->tax_id] = $value;
                  $this->getrec($value->tax_id);
                  }
                  
                  return $this->_dataTax;
        
              }


             function getTax1($parent=0)
    {
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

              




}
