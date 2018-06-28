<?php
class expenditure_model extends CI_Model
{

	public function getPrjByKeyword($keyword)
	{
		$this->db->select('*');
		$this->db->from('tbl_project');
		$this->db->like('prj_name',$keyword);
		$this->db->where('prj_year',$this->session->userdata('year'));
		$query = $this->db->get();

		return $query->result();
	}

	function getPrjById($project_id){
		$this->db->select('*');
		$this->db->from('tbl_project');
		$this->db->where('prj_id',$project_id);
		$query = $this->db->get();

		return $query->row();
	}

	function getPrjExpenses($project_id){
		$this->db->select('*');
		$this->db->from('tbl_expenses');
		$this->db->like('project_id',$project_id);
		$query = $this->db->get();

		return $query->result();
	}

	function saveExpenditure($input){
		$this->db->insert('tbl_expenses',$input);
	}

	
}