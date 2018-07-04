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
		$this->db->select('*,sum(tbl_expenses.expenses_amount) as amount');
		$this->db->from('tbl_project');
		$this->db->where('prj_id',$project_id);
		$this->db->join('tbl_expenses','tbl_expenses.project_id = tbl_project.prj_id ','left');
		$query = $this->db->get();

		return $query->row();
	}

	function getPrjExpenses($project_id = '',$expenses_id = ''){
		$this->db->select('*');
		$this->db->from('tbl_expenses');
		$this->db->like('project_id',$project_id);
		if (!empty($expenses_id)){
			$this->db->where('expenses_id',$expenses_id);
		}
		
		$query = $this->db->get();

		return $query->result();
	}

	function getPrjExpensesByPrj($project_id = '',$expenses_id = ''){
		$this->db->select('*,usrm_user.user_firstname,usrm_user.user_lastname');
		$this->db->from('tbl_expenses');
		$this->db->where('project_id',$project_id);
		$this->db->join('usrm_user','usrm_user.user_id = tbl_expenses.user_id');
		if (!empty($expenses_id)){
			$this->db->where('expenses_id',$expenses_id);
		}
		
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
		$input['user_id'] = $_SESSION['user_id'] ;
		if (!empty($input['expenses_id'])){
			$id = $input['expenses_id'];
			unset($input['expenses_id']);
			$this->db->where('expenses_id',$id);
			return $this->db->update('tbl_expenses',$input);
		}
		
		return $this->db->insert('tbl_expenses',$input);
	}

	function getExpenditure($year){
		$this->db->select('tbl_expenses.*, tbl_project.prj_name,usrm_user.user_firstname,usrm_user.user_lastname');
		$this->db->from('tbl_expenses');
		$this->db->join('tbl_project','tbl_project.prj_id = tbl_expenses.project_id');
		$this->db->join('usrm_user','usrm_user.user_id = tbl_expenses.user_id');
		$this->db->where('prj_year',$year);
		$query = $this->db->get();

		return $query->result();
	}

	public function expenditure_del($id){
		$this->db->where('expenses_id',$id);
		return $this->db->delete('tbl_expenses');
	}

	public function saveExpenditureNumber($id,$input){
		$input['expenses_date_disburse'] = $this->mydate->date_thai2eng($input['expenses_date_disburse'],-543);
		$this->db->where('expenses_id',$id);
		return $this->db->update('tbl_expenses',$input);
	

	}

	
}