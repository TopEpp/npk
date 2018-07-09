<?php

class export_model extends CI_Model

{
    public  function gat1($ID)
        {

       $this->db->select('tax_notice.*,tbl_individual.*,tbl_tax_type.*,tbl_tax.*');
        $this->db->from('tax_notice');
        $this->db->join('tbl_individual', 'tbl_individual.individual_id = tax_notice.individual_id');
        $this->db->join('tbl_tax_type', 'tbl_tax_type.tax_type_id = tbl_individual.individual_type');
        $this->db->join('tbl_tax', 'tbl_tax.tax_id = tax_notice.tax_id', 'left');
       $this->db->where('notice_id', $ID);
        $query = $this->db->get();
        return $query->row_array();
      }

}

