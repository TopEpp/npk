<?php
class service_model extends CI_Model
{
	function duplicate_project($year,$parent=''){
		$data_insert = array();
		$this->db->select('*');
		$this->db->from('tbl_project_manage');
		$this->db->where('project_year',$year);
		if($parent){
			$this->db->where('project_parent',$parent);	
		}else{
			$this->db->where('project_parent is null');
		}
		$query = $this->db->get();
		foreach ($query->result_array() as $key => $value) {
			$data_insert['project_id'] = $this->getLastProjectID();
			$data_insert['project_parent'] = $this->getNextYearManageID($value['project_parent']);
			$data_insert['project_year'] = $year+1;
			$data_insert['project_level'] = $value['project_level'];
			$data_insert['project_title'] = $value['project_title'];
			$data_insert['prj_budget'] = $value['prj_budget'];
			$data_insert['project_ref_id'] = $value['project_id'];

			$this->db->insert('tbl_project_manage',$data_insert);

			$this->duplicate_project($year,$value['project_id']);

			$this->duplicate_prj($year,$value['project_id'],$data_insert['project_id']);
		}
	}

	function duplicate_prj($year,$parent='',$prj_parent=''){
		$data_insert = array();
		$this->db->select('*');
		$this->db->from('tbl_project');
		$this->db->where('prj_year',$year);
		$this->db->where('prj_parent',$parent);
		$query = $this->db->get();
		foreach ($query->result_array() as $key => $value) {
			$data_insert['prj_id'] = $this->getLastProjectID();
			if($prj_parent){
				$data_insert['prj_parent'] = $prj_parent;
			}else{
				$data_insert['prj_parent'] = $this->getNextYearID($value['prj_parent']);
			}
			$data_insert['prj_year'] = $year+1;
			$data_insert['prj_name'] = $value['prj_name'];
			$data_insert['prj_budget'] = $value['prj_budget'];
			$data_insert['prj_owner'] = $value['prj_owner'];
			// $data_insert['prj_status'] = 0;
			$data_insert['prj_type'] = '1';
			$data_insert['prj_create'] = date('Y-m-d');
			$data_insert['prj_ref_id'] = $value['prj_id'];

			$this->db->insert('tbl_project',$data_insert);

			$this->duplicate_prj($year,$value['prj_id']);
		}
	}

	function getLastProjectID(){
		$last_id_project = $this->db->select('project_id')
            ->order_by('project_id', 'desc')
            ->limit(1)->get('tbl_project_manage')->row('project_id');
        $last_id_prj = $this->db->select('prj_id')
            ->order_by('prj_id', 'desc')
            ->limit(1)->get('tbl_project')->row('prj_id');

        if ($last_id_project > $last_id_prj) {
            return $last_id_project + 1;
        } else {
            return $last_id_prj + 1;
        }
	}

	function getNextYearManageID($id){
		if($id){
			$this->db->select('project_id');
			$this->db->where('project_ref_id',$id);
			$query = $this->db->get('tbl_project_manage');
			$row = $query->row();

			return $row->project_id;
		}else{
			return null;
		}
		
	}

	function getNextYearID($id){
		if($id){
			$this->db->select('prj_id');
			$this->db->where('prj_parent',$id);
			$query = $this->db->get('tbl_project');
			$row = $query->row();

			return $row->prj_id;
		}else{
			return null;
		}
	}

}