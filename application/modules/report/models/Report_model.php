<?php

class Report_model extends CI_Model
{
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


}
