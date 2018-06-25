<?php 

<<<<<<< HEAD
class Outside_model extends CI_Model
{
    public function getOutside()
    {
        $query = $this->db->get('tbl_outside_manager');
        return $query->result();
    }
    public function getOut($id = '')
=======
class outside_model extends CI_Model
{
    public function getProject()
    {
        $query = $this->db->get('tbl_outside_tax');
        return $query->result();
    }
    public function getPrj($id = '')
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
    {
        if (!empty($id)) {
            $this->db->where('out_id', $id);
        }
        $query = $this->db->get('tbl_outside');
        return $query->result();
    }

<<<<<<< HEAD
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
=======
    public function insertProject($data)
    {
    
       
         //check  last id project and prj
        $last_id_project = $this->db->select('outside_id')
            ->order_by('outside_id', 'desc')
            ->limit(1)->get('tbl_outside_tax')->row('outside_id');
        $last_id_prj = $this->db->select('outside_id')
            ->order_by('outside_id', 'desc')
            ->limit(1)->get('tbl_outside_tax')->row('outside_id');

        if ($last_id_project > $last_id_prj) {
            $data['outside_id'] = $last_id_project + 1;
            return $this->db->insert('tbl_outside_tax', $data);
        } else {
            $data['outside_id'] = $last_id_prj + 1;
            return $this->db->insert('tbl_outside_tax', $data);
        }
    }

    public function editProject($id, $data)
    {
        if (!empty($id)) {
            $this->db->where('outside_id', $id);
            return $this->db->update('tbl_outside_tax', $data);
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
        }

    }



<<<<<<< HEAD
    public function delOut($id, $state)
=======
    public function delPrj($id, $state)
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
    {
        if (!empty($state)) {
            $this->db->where('out_id', $id);
            return $this->db->delete('tbl_outside');
        } else {
            $this->db->where('outside_id', $id);
<<<<<<< HEAD
            return $this->db->delete('tbl_outside_manager');
=======
            return $this->db->delete('tbl_outside_tax');
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
        }

    }

<<<<<<< HEAD
    public function insertOut($data, $id = '')
=======
    public function insertPrj($data, $id = '')
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
    {

        if (!empty($id)) {
            $this->db->where('out_id', $id);
            return $this->db->update('tbl_outside', $data);
        }
<<<<<<< HEAD
       //check  last id outside and out
        $last_id_outside = $this->db->select('outside_id')
            ->order_by('outside_id', 'desc')
            ->limit(1)->get('tbl_outside_manager')->row('outside_id');
        $last_id_out = $this->db->select('out_id')
            ->order_by('out_id', 'desc')
            ->limit(1)->get('tbl_outside')->row('out_id');

        if ($last_id_outside > $last_id_out) {
            $data['out_id'] = $last_id_outside + 1;
            return $this->db->insert('tbl_outside', $data);
        } else {
            $data['out_id'] = $last_id_out + 1;
=======
       //check  last id project and prj
        $last_id_project = $this->db->select('outside_id')
            ->order_by('outside_id', 'desc')
            ->limit(1)->get('tbl_project_manage')->row('outside_id');
        $last_id_prj = $this->db->select('out_id')
            ->order_by('out_id', 'desc')
            ->limit(1)->get('tbl_outside')->row('out_id');

        if ($last_id_project > $last_id_prj) {
            $data['out_id'] = $last_id_project + 1;
            return $this->db->insert('tbl_outside', $data);
        } else {
            $data['out_id'] = $last_id_prj + 1;
>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
            return $this->db->insert('tbl_outside', $data);
        }

    }

<<<<<<< HEAD
=======
    public function getState()
    {
        $this->db->select('state');
        return $this->db->get('tbl_outside')->row()->state;
    }

    public function updateState($state)
    {
        if ($state == 'false') {
            return $this->db->query("UPDATE tbl_outside SET state = '1'");
        } else {
            return $this->db->query("UPDATE tbl_outside SET state = '0'");
        }

    }

>>>>>>> parent of a53cca5... Revert "Merge branch 'Dev-Branch' into Dev-art"
}