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
             return $this->db->update('tbl_individual',$data);
         }
         return $this->db->insert('tbl_individual',$data);
     }

    //delelte data individual
    public function del_individual($id){
        $this->db->where('individual_id',$id);
        return $this->db->delete('tbl_individual');
    }

    public function getRecieveTaxAjax($param){
        $keyword = $param['keyword'];
		$this->db->select('*');
 
		$condition = "1=1";
		if(!empty($keyword)){
            // $condition .= " and (individual_number like '%{$keyword}%' or  individual_firstname '%{$keyword}%')";
            $condition .= " and (individual_number like '%{$keyword}%')";
		}
 
		$this->db->where($condition);
		$this->db->limit($param['page_size'], $param['start']);
		$this->db->order_by($param['column'], $param['dir']);
 
		$query = $this->db->get('tbl_individual');
		$data = array();
		if($query->num_rows() > 0){

			foreach($query->result_array() as $key =>  $row){
                $data[] = $row;
			}
		}
 
		$count_condition = $this->db->from('tbl_individual')->where($condition)->count_all_results();
		$count = $this->db->from('tbl_individual')->count_all_results();
		$result = array('count'=>$count,'count_condition'=>$count_condition,'data'=>$data,'error_message'=>'');
		return $result;
    }



}