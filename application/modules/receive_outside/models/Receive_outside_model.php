<?php

class Receive_outside_model extends CI_Model
{

    public function getPrjByKeyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tbl_outside');
        // $this->db->where("out_parent != '0' ", null, false);
        $this->db->like('out_name', $keyword);
        $this->db->where('out_year', $this->session->userdata('year'));
        $query = $this->db->get();

        return $query->result();
    }

    public function getOutside()
    {
        $query = $this->db->get('tbl_outside_manager');
        return $query->result();
    }

    public function getOuts($id =''){
        if (!empty($id)) {
            $this->db->where('out_id', $id);
        }
        $this->db->select('tbl_outside.*');
        // $this->db->where("out_parent != '0' ",null,false);
        $this->db->where('out_year', $this->session->userdata('year'));
        $this->db->from('tbl_outside');
        $query = $this->db->get();
        return $query->result();
    }
    
    public function getOut($id = '')
    {
        if (!empty($id)) {
            $this->db->where('out_id', $id);
        }
        $this->db->select('tbl_outside.*,sum(tbl_outside_pay.outside_pay_budget_sum) as budget');
        // $this->db->where("out_parent != '0' ",null,false);
        $this->db->where('out_year', $this->session->userdata('year'));
        $this->db->from('tbl_outside');
        $this->db->join('tbl_outside_pay', 'tbl_outside.out_id = tbl_outside_pay.outside_id', 'inner');
        $query = $this->db->get();
        return $query->result();
    }

    public function getOutPay($id = '', $pay_id = '')
    {
        if (!empty($id)) {
          
            $this->db->where('outside_id', $id);
        }
        if (!empty($pay_id)) {
    
            $this->db->where('outside_pay_id', $pay_id);
        }
        $this->db->where('tbl_outside.out_year', $this->session->userdata('year'));
        $this->db->select('tbl_outside_pay.*,usrm_user.user_firstname,usrm_user.user_lastname,tbl_outside.out_name');
        $this->db->from('tbl_outside_pay');
        $this->db->join('tbl_outside', 'tbl_outside.out_id = tbl_outside_pay.outside_id', 'inner');
        $this->db->join('usrm_user', 'usrm_user.user_id = tbl_outside_pay.outside_pay_user');
        // $this->db->join('tbl_outside','tbl_outside.out_id = tbl_outside_pay.out_id');
        $this->db->order_by('tbl_outside_pay.outside_pay_id DESC');
        $query = $this->db->get();
        return $query->result();
    }

    public function getOutRec($id = '', $pay_id = '')
    {
        if (!empty($id)) {
          
            $this->db->where('outside_id', $id);
        }
        if (!empty($pay_id)) {
    
            $this->db->where('outside_pay_id', $pay_id);
        }
        $this->db->select('tbl_outside_in_log.*,usrm_user.user_firstname,usrm_user.user_lastname,tbl_outside.out_name');
        $this->db->from('tbl_outside_in_log');
        $this->db->join('tbl_outside', 'tbl_outside.out_id = tbl_outside_in_log.outside_id', 'inner');
        $this->db->join('usrm_user', 'usrm_user.user_id = tbl_outside_in_log.outside_pay_user');
        // $this->db->join('tbl_outside','tbl_outside.out_id = tbl_outside_pay.out_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function saveOutSidePay($data)
    {

        if (!empty($data['outside_pay_id'])) {
            $id = $data['outside_pay_id'];

            unset($data['outside_pay_id']);
            unset($data['out_id']);
            unset($data['outside_pay_create']);

            $this->db->where('outside_pay_id', $id);
            return $this->db->update('tbl_outside_pay', $data);
        }
        return $this->db->insert('tbl_outside_pay', $data);
    }

    public function saveOutSideIn($data)
    {
        $query = $this->db->query('select sum(out_budget_sum) as budget from tbl_outside where out_id  = ' . $data['outside_id'])->row();
        $id = $data['outside_id'];
        $sum['out_budget_sum'] = $query->budget + $data['outside_pay_budget'];
        $this->updateOutSide($id,$sum);
        return $this->db->insert('tbl_outside_in_log', $data);
    }
    public function updateOutSide($id,$data){

        $this->db->where('out_id',$id);
        $this->db->update('tbl_outside',$data);
    }

  

    public function editOutside($id, $data)
    {
        if (!empty($id)) {
            $this->db->where('outside_id', $id);
            return $this->db->update('tbl_outside_manager', $data);
        }

    }

    public function delOut($id, $state)
    {
        if (!empty($state)) {
            $this->db->where('out_id', $id);
            return $this->db->delete('tbl_outside');
        } else {
            $this->db->where('outside_id', $id);
            return $this->db->delete('tbl_outside_manager');
        }

    }

    public function outSidePayDel($id)
    {
        $this->db->where('outside_pay_id', $id);
        return $this->db->delete('tbl_outside_pay');

    }

    public function insertOut($data, $id = '')
    {

        if (!empty($id)) {
            $this->db->where('out_id', $id);
            $data['out_budget_sum'] = $data['out_budget'];
            return $this->db->update('tbl_outside', $data);
        } else {

            $data['out_budget_sum'] = $data['out_budget'];
            return $this->db->insert('tbl_outside', $data);
        }

    }

    public function getAllOutSideID($out_id, &$OutBudget = array())
    {
        $PrjManage[] = $out_id;
        $this->db->select('out_id');
        $this->db->from('tbl_outside');
        $this->db->where('out_parent', $out_id);
        $query = $this->db->get();
        foreach ($query->result() as $key => $value) {
            $this->getAllPrjManageID($value->out_id, $OutBudget);
        }

        return $PrjManage;
    }

    public function getIdTaxPay(){
        $this->db->like('out_name','ภาษีหัก ณ ที่จ่าย');
        return $this->db->get('tbl_outside')->row();
    }

    //ajax index
	public function getOutsideAjax($param)
    {
        $keyword = $param['keyword'];
        $this->db->select('*');

        $condition = "1=1";

        if (!empty($param['filter'])) {
			$filter = $param['filter'];
			// print_r($filter);die();
		
			if (!empty($filter[0])) {
                $this->db->like('outside_pay_create', $this->mydate->date_thai2eng($filter[0],-543));
            }
            if (!empty($filter[2])) {
                $this->db->like('outside_detail', $filter[2]);
            }
            if (!empty($filter[1])) {
                $this->db->like('tbl_outside.out_name', $filter[1]);
            }

        }

        $this->db->where('tbl_outside.out_year', $this->session->userdata('year'));
        $this->db->select('tbl_outside_pay.*,usrm_user.user_firstname,usrm_user.user_lastname,tbl_outside.out_name');
        $this->db->from('tbl_outside_pay');
        $this->db->join('tbl_outside', 'tbl_outside.out_id = tbl_outside_pay.outside_id', 'inner');
        $this->db->join('usrm_user', 'usrm_user.user_id = tbl_outside_pay.outside_pay_user');
        // $this->db->join('tbl_outside','tbl_outside.out_id = tbl_outside_pay.out_id');
        $this->db->where($condition);
        $this->db->limit($param['page_size'], $param['start']);
		$this->db->order_by($param['column'], $param['dir']);
		
	
		$query = $this->db->get();
		// $this->db->order_by('expenses_id DESC','expenses_date_disburse DESC');
        $data = array();
        if ($query->num_rows() > 0) {

            foreach ($query->result_array() as $key => $row) {
				$row['outside_pay_budget_sum'] = number_format($row['outside_pay_budget_sum'],2);
				$row['outside_pay_create'] = $this->mydate->date_eng2thai($row['outside_pay_create'],543,'S');
                $data[] = $row;
            }
        }

        $count_condition = $this->db->from('tbl_expenses')->where($condition)->count_all_results();
        $count = $this->db->from('tbl_expenses')->count_all_results();
        $result = array('count' => $count, 'count_condition' => $count_condition, 'data' => $data, 'error_message' => '');
        return $result;

    }

}
