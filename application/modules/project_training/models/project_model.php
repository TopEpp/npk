<?php 

class project_model extends CI_Model
{
    public function getProject(){
        $query = $this->db->get('tbl_project_manage');
        return $query->result();
    }
    public function getPrj($id = ''){
        if (!empty($id)){
            $this->db->where('prj_id',$id);
        }
        $query = $this->db->get('tbl_project');
        return $query->result();
    }

    public function insertProject($data){
        return $this->db->insert('tbl_project_manage',$data);
    }

    public function editProject($id,$data){
        if (!empty($id)){
            $this->db->where('project_id',$id);
            return $this->db->update('tbl_project_manage',$data);
        }
    
    }



    public function delPrj($id,$state){
        if (!empty($state)){
            $this->db->where('prj_id',$id);
            return $this->db->delete('tbl_project');
        }else{
            $this->db->where('project_id',$id);
            return $this->db->delete('tbl_project_manage');
        }
       
    }

    public function insertPrj($id ='',$data){
        
        if(!empty($id)){
            $this->db->where('prj_id',$id);
            return $this->db->update('tbl_project',$data);
        }
        return $this->db->insert('tbl_project',$data);
    }

}