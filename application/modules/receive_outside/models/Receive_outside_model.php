<?php 

class Receive_outside_model extends CI_Model
{
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
        $query = $this->db->get('tbl_outside');
        return $query->result();
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