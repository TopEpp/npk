<?php
class admin_model extends CI_Model
{

	function getYear(){
		$this->db->select('tbl_year.*, SUM(tbl_tax_estimate.tax_estimate) AS tax_estimate, SUM(tbl_project.prj_budget_sum) as prj_budget');
		$this->db->from('tbl_year');
		$this->db->join('tbl_tax_estimate','tbl_tax_estimate.year_id = tbl_year.year_id','left');
		$this->db->join('tbl_project','tbl_project.prj_year = tbl_year.year_id','left');
		$this->db->group_by('tbl_year.year_id');
		$query = $this->db->get();
		return $query->result();
	}

	function getMaxYear(){
		$query = $this->db->from('tbl_year')->order_by('year_id','DESC')->limit(1)->get();
		$row =  $query->row();

		return $row->year_id;
	}

	function create_year($year_id){
		$this->db->set('year_id',($year_id+1));
		$this->db->set('year_label',($year_id+1+543));
		$this->db->insert('tbl_year');
	}

}