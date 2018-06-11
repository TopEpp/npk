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
    
       
         //check  last id project and prj
        $last_id_project =   $this->db->select('project_id')
                            ->order_by('project_id','desc')
                            ->limit(1)->get('tbl_project_manage')->row('project_id');
        $last_id_prj =   $this->db->select('prj_id')
                        ->order_by('prj_id','desc')
                        ->limit(1)->get('tbl_project')->row('prj_id');

        if ($last_id_project > $last_id_prj ){
            $data['project_id'] = $last_id_project+1;
            return $this->db->insert('tbl_project_manage',$data);
        }else{
            $data['project_id'] = $last_id_prj+1;
            return $this->db->insert('tbl_project_manage',$data);
        }
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

    public function insertPrj($data,$id = ''){
        
        if(!empty($id)){
            $this->db->where('prj_id',$id);
            return $this->db->update('tbl_project',$data);
        }
       //check  last id project and prj
        $last_id_project =   $this->db->select('project_id')
                            ->order_by('project_id','desc')
                            ->limit(1)->get('tbl_project_manage')->row('project_id');
        $last_id_prj =   $this->db->select('prj_id')
                            ->order_by('prj_id','desc')
                            ->limit(1)->get('tbl_project')->row('prj_id');
  
        if ($last_id_project > $last_id_prj ){
            $data['prj_id'] = $last_id_project+1;
            return $this->db->insert('tbl_project',$data);
        }else{
            $data['prj_id'] = $last_id_prj+1;
            return $this->db->insert('tbl_project',$data);
        }
        
    }

}