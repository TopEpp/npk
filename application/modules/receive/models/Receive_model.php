<?php 

class Receive_model extends CI_Model
{
    public function read_receive($id = '')
    {
        if (!empty($id)){
            $this->db->where('individual_id',$id);
        }
        $this->db->select('tbl_individual.*,tbl_tax_type.*');

        $this->db->from('tbl_individual');
        $this->db->join('tbl_tax_type', 'tbl_tax_type.tax_type_id = tbl_individual.individual_type', 'left');

        $query = $this->db->get();
        return $query->result();
    }

    public function read_dashborad()
    {
        $this->db->select('tax_notice.*,tbl_individual.*,tbl_tax_type.*,tbl_tax.*');
        $this->db->from('tax_notice');
        $this->db->join('tbl_individual', 'tbl_individual.individual_id = tax_notice.individual_id', 'left');
        $this->db->join('tbl_tax_type', 'tbl_tax_type.tax_type_id = tbl_individual.individual_type', 'left');
        $this->db->join('tbl_tax', 'tbl_tax.tax_id = tax_notice.tax_id', 'left');

        $query = $this->db->get();
        return $query->result_array();
    }

    public function insertDataImport($data){
        return  $this->db->insert('tbl_individual',$data);
     }
 
     //get individual all
     public function getIndividualAll(){
         $query =$this->db->get('tbl_individual');
         return $query->result();   
     }
 
     //insert data individual
     public function insertIndividual($data,$id = ''){
         if (!empty($id)){
             $this->db->where('individual_id',$id);
             $this->db->update('tbl_individual',$data);
         }
         return $this->db->insert('tbl_individual',$data);
     }

    //delelte data individual
    public function del_individual($id){
        $this->db->where('individual_id',$id);
        return $this->db->delete('tbl_individual');
    }



}