<?php 

class project_model extends CI_Model
{
    public function getProject()
    {
        $query = $this->db->get('tbl_project_manage');
        return $query->result();
    }
    public function getPrj($id = '')
    {
        if (!empty($id)) {
            $this->db->where('prj_id', $id);
        }
        $query = $this->db->get('tbl_project');
        return $query->result();
    }

    public function insertProject($data)
    {
    
       
         //check  last id project and prj
        $last_id_project = $this->db->select('project_id')
            ->order_by('project_id', 'desc')
            ->limit(1)->get('tbl_project_manage')->row('project_id');
        $last_id_prj = $this->db->select('prj_id')
            ->order_by('prj_id', 'desc')
            ->limit(1)->get('tbl_project')->row('prj_id');

        if ($last_id_project > $last_id_prj) {
            $data['project_id'] = $last_id_project + 1;
            return $this->db->insert('tbl_project_manage', $data);
        } else {
            $data['project_id'] = $last_id_prj + 1;
            return $this->db->insert('tbl_project_manage', $data);
        }
    }

    public function editProject($id, $data)
    {
        if (!empty($id)) {
            $this->db->where('project_id', $id);
            return $this->db->update('tbl_project_manage', $data);
        }

    }



    public function delPrj($id, $state)
    {
        if (!empty($state)) {
            $this->db->where('prj_id', $id);
            return $this->db->delete('tbl_project');
        } else {
            $this->db->where('project_id', $id);
            return $this->db->delete('tbl_project_manage');
        }

    }

    public function insertPrj($data, $id = '')
    {

        if (!empty($id)) {
            $this->db->where('prj_id', $id);
            return $this->db->update('tbl_project', $data);
        }
       //check  last id project and prj
        $last_id_project = $this->db->select('project_id')
            ->order_by('project_id', 'desc')
            ->limit(1)->get('tbl_project_manage')->row('project_id');
        $last_id_prj = $this->db->select('prj_id')
            ->order_by('prj_id', 'desc')
            ->limit(1)->get('tbl_project')->row('prj_id');

        if ($last_id_project > $last_id_prj) {
            $data['prj_id'] = $last_id_project + 1;
            return $this->db->insert('tbl_project', $data);
        } else {
            $data['prj_id'] = $last_id_prj + 1;
            return $this->db->insert('tbl_project', $data);
        }

    }

    public function getState()
    {
        $this->db->select('state');
        return $this->db->get('tbl_project')->row()->state;
    }

    public function updateState($state)
    {
        if ($state == 'false') {
            return $this->db->query("UPDATE tbl_project SET state = '1'");
        } else {
            return $this->db->query("UPDATE tbl_project SET state = '0'");
        }

    }

    public function getUser(){
        return $this->db->get('usrm_user')->result();
    }


    //updatee budget data project or prj
    public function updateBudget($id = '' ,$parent = ''){
      
        //sum budget data
        if (!empty($parent)){
            $id = $parent;
            $query = $this->db->query('SELECT SUM(T2.prj_budget) as num FROM tbl_project_manage T2 WHERE T2.project_parent = '.$id);
        }else{
            $query = $this->db->query("SELECT SUM(T2.prj_budget) as num FROM tbl_project T2 WHERE prj_active = '1' and T2.prj_parent = ".$id);
        }
      
        $data['prj_budget'] = @$query->row()->num;

        //update budget to prj_id
        //find prj or project
        $query = $this->db->query('SELECT prj_id  FROM tbl_project  WHERE prj_id = '.$id);
        if ($query->num_rows() > 0){
            $this->db->where('prj_id',$id);
            $this->db->update('tbl_project',$data);
             //get parent id
            $parent = $this->getPrj($id);
            if (!empty($parent[0]->prj_parent))
                $this->updateBudget($parent[0]->prj_parent);
            else 
                return false;
        }else{ //update budget to project
            $this->db->where('project_id',$id);
            $this->db->update('tbl_project_manage',$data);
             //get parent id
            $parent = $this->getProject($id);
            if (!empty($parent[0]->project_parent))
                $this->updateBudget('',$parent[0]->project_parent);
            else 
                return false;

        }

    }

}