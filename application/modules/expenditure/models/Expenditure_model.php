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
		$input['expenses_date'] = $this->mydate->date_thai2eng($input['expenses_date'],-543);
		$input['expenses_amount'] = str_replace(',', '', $input['expenses_amount']);
		$input['expenses_amount_vat'] = str_replace(',', '', $input['expenses_amount_vat']);
		$input['expenses_amount_disburse'] = str_replace(',', '', $input['expenses_amount_disburse']);
		$input['expenses_amount_tax'] = str_replace(',', '', $input['expenses_amount_tax']);
		$input['expenses_amount_fine'] = str_replace(',', '', $input['expenses_amount_fine']);
		$input['expenses_amount_result'] = str_replace(',', '', $input['expenses_amount_result']);
		$this->db->insert('tbl_expenses',$input);
	}

	function getExpenditure($year){
		$this->db->select('tbl_expenses.*, tbl_project.prj_name');
		$this->db->from('tbl_expenses');
		$this->db->join('tbl_project','tbl_project.prj_id = tbl_expenses.project_id');
		$this->db->where('prj_year',$year);
		$query = $this->db->get();

		return $query->result();
	}

	
}