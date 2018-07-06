<?php 

class Receive_outside_model extends CI_Model
{

    public function getPrjByKeyword($keyword)
	{
		$this->db->select('*');
        $this->db->from('tbl_outside');
        $this->db->where("out_parent != '0' ",null,false);
		$this->db->like('out_name',$keyword);
		// $this->db->where('prj_year',$this->session->userdata('year'));
		$query = $this->db->get();

		return $query->result();
    }
    
    public function getOutside()
    {
        $query = $this->db->get('tbl_outside_manager');
        return $query->result();
    }
    public function getOut($id = '')
    {
        if (!empty($id)) {
            $this->db->where('out_id', $id);
        }
        // $this->db->where("out_parent != '0' ",null,false);
        $this->db->where('out_year',$this->session->userdata('year'));
        $query = $this->db->get('tbl_outside');
        return $query->result();
    }

    public function getOutPay($id ='',$pay_id = ''){
        if (!empty($id)) {
            $this->db->where('outside_id', $id);
        }
        if (!empty($pay_id)) {
            $this->db->where('outside_pay_id', $pay_id);
        }
        $this->db->select('tbl_outside_pay.*,usrm_user.user_firstname,usrm_user.user_lastname,tbl_outside.out_name');
        $this->db->from('tbl_outside_pay');
        $this->db->join('tbl_outside','tbl_outside.out_id = tbl_outside_pay.outside_id','inner');
        $this->db->join('usrm_user','usrm_user.user_id = tbl_outside_pay.outside_pay_user');
        // $this->db->join('tbl_outside','tbl_outside.out_id = tbl_outside_pay.out_id');
        $query = $this->db->get();
        return $query->result();
    }

    public function saveOutSidePay($data){

        if (!empty($data['outside_pay_id'])){
			$id = $data['outside_pay_id'];
            unset($data['outside_pay_id']);
            unset($data['outside_pay_create']);
			$this->db->where('outside_pay_id',$id);
			return $this->db->update('tbl_outside_pay',$data);
		}
        return $this->db->insert('tbl_outside_pay', $data);
    }

    public function insertOutside($data)
    {
    
       
         //check  last id outside and out
        $last_id_outside = $this->db->select('outside_id')
            ->order_by('outside_id', 'desc')
            ->limit(1)->get('tbl_outside_manager')->row('outside_id');
        $last_id_out = $this->db->select('out_id')
            ->order_by('out_id', 'desc')
            ->limit(1)->get('tbl_outside')->row('out_id');

        if ($last_id_outside > $last_id_out) {
            $data['outside_id'] = $last_id_outside + 1;
            return $this->db->insert('tbl_outside_manager', $data);
        } else {
            $data['outside_id'] = $last_id_outside + 1;
            return $this->db->insert('tbl_outside_manager', $data);
        }
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

    public function outSidePayDel($id){
        $this->db->where('outside_pay_id', $id);
        return $this->db->delete('tbl_outside_pay');
        
    }

    public function insertOut($data, $id = '')
    {

        if (!empty($id)) {
            $this->db->where('out_id', $id);
            return $this->db->update('tbl_outside', $data);
        }else{
            return $this->db->insert('tbl_outside', $data);
        }

    }

    function getAllOutSideID($out_id,&$OutBudget=array()){
        $PrjManage[] = $out_id;
        $this->db->select('out_id');
        $this->db->from('tbl_outside');
        $this->db->where('out_parent',$out_id);
        $query = $this->db->get();
        foreach ($query->result() as $key => $value) {
            $this->getAllPrjManageID($value->out_id,$OutBudget);
        }

        return $PrjManage;
    }

}