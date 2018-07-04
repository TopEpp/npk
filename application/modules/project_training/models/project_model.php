<?php 
ini_set('memory_limit', '-1');
class project_model extends CI_Model
{
    protected $data_budget = ['', 'งบบุคลากร', 'งบดำเนินงาน', 'งบลงทุน', 'งบเงินอุดหนุน', 'งบกลาง'];
    protected $data_cost = [
        '', 'เงินเดือน (ฝ่ายการเมือง)', 'เงินเดือน (ฝ่ายประจำ)', 'ค่าตอบแทน', 'ค่าใช้สอย', 'ค่าวัสดุ', 'ค่าสาธารณูปโภค',
        'ค่าครุภัณฑ์', 'ค่าที่ดินและสิ่งก่อสร้าง', 'เงินอุดหนุน', 'งบกลาง'
    ];

    public function getProject($id = '')
    {
        if (!empty($id)) {
            $this->db->where('project_id', $id);
        }
        $this->db->where('project_year', $this->session->userdata('year'));
        $query = $this->db->get('tbl_project_manage');
        return $query->result();
    }
    public function getPrj($id = '',$old_year = false)
    {
        if (!empty($id)) {
            $this->db->where('prj_id', $id);
        }
        if($old_year)
            $year = (int)$this->session->userdata('year') -1 ;
        else
            $year = $this->session->userdata('year');
        
        $this->db->where('prj_year', $year);
        $this->db->where('prj_active', '1');
        $query = $this->db->get('tbl_project');
        return $query->result();
    }
    public function getPrjArray(){

        $this->db->where('prj_year', $this->session->userdata('year'));
        $this->db->where('prj_active', '1');
        $query = $this->db->get('tbl_project');
        $data = array();
        foreach ($query->result() as $key => $value) {
            $data[$value->prj_id] = $value;
        }
        return $data;
    }

    public function getBudget($id = ''){
        $this->db->select('prj_budget_sum');
        $this->db->where('prj_id',$id);
        return $this->db->get('tbl_project')->row();

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
            //update  budget all
            $parent = $this->getPrj($id);

            $data['prj_owner_update'] = $_SESSION['user_id'];
            $data['prj_active'] = '0';
            $this->db->where('prj_id', $id);
            $this->db->update('tbl_project', $data);


            $data = $this->updateBudget($parent[0]->prj_parent);
            return true;
            //clear data log is n't active 
            // $this->db->where('state', '0');
            // return $this->db->delete('tbl_project_log');
        } else {
            $this->db->where('project_id', $id);
            return $this->db->delete('tbl_project_manage');
        }

    }

    public function insertPrj($data, $id = '')
    {

        if (!empty($id)) {
            $this->db->where('prj_id', $id);
            $this->db->update('tbl_project', $data);

            //update  budget all
            $parent = $this->getPrj($id);
            $data = $this->updateBudget($parent[0]->prj_parent);
            return true;
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

        } else {
            $data['prj_id'] = $last_id_prj + 1;

        }

        // $parent = $this->getPrj($data['prj_parent']);
        $this->db->insert('tbl_project', $data);
        $this->updateBudget($data['prj_parent']);
        return $data['prj_id'];

    }

    public function setLogBudget($data,$data_id = array(),$type = '',$ref = false){
        if (!empty($data_id['id']) ){
            $this->db->where('prj_id',$data_id['id']);
            if ($data_id['ref'] != '')
                $this->db->where('prj_ref_id',$data_id['ref']);
            // if ($ref){
            //     $this->db->where('prj_ref_id',$id);
            // }
            $this->db->where('prj_budget_type',$type);
            return $this->db->update('tbl_prj_budget_log',$data);
        }

        $this->db->insert('tbl_prj_budget_log',$data);
        return $this->db->insert_id();

    }

    public function getState()
    {
        $this->db->select('state');
        return @$this->db->get('tbl_project')->row()->state;
    }

    public function updateState($state)
    {
        if ($state == 'false') {
            return $this->db->query("UPDATE tbl_project SET state = '1'");
        } else {
            return $this->db->query("UPDATE tbl_project SET state = '0'");
        }

    }

    public function getUser()
    {
        return $this->db->get('usrm_user')->result();
    }


    //updatee budget data project or prj
    public function updateBudget($id = '', $parent = '')
    {
      
        //sum budget data
        if (!empty($parent)) {
            $id = $parent;
            $query = $this->db->query('SELECT SUM(T2.prj_budget_sum) as num FROM tbl_project_manage T2 WHERE T2.project_parent = ' . $id);
        } else {
            $query = $this->db->query("SELECT SUM(T2.prj_budget_sum) as num FROM tbl_project T2 WHERE prj_active = '1' and T2.prj_parent = " . $id);
        }

        $data['prj_budget_sum'] = @$query->row()->num;

        //update budget to prj_id
        //find prj or project
        $query = $this->db->query('SELECT prj_id  FROM tbl_project  WHERE prj_id = ' . $id);
        if ($query->num_rows() > 0) {
            $this->db->where('prj_id', $id);
            $this->db->update('tbl_project', $data);
             //get parent id
            $parent = $this->getPrj($id);
            if (!empty($parent[0]->prj_parent))
                $this->updateBudget($parent[0]->prj_parent);
            else
                return false;
        } else { //update budget to project
            $this->db->where('project_id', $id);
            $this->db->update('tbl_project_manage', $data);
             //get parent id
            $parent = $this->getProject($id);
            if (!empty($parent[0]->project_parent))
                $this->updateBudget('', $parent[0]->project_parent);
            else
                return false;

        }





    }

    public function getTreeProjectManage($project)
    {
        $ul = '';
        foreach ($project as $key => $value) {

            if (empty($value->project_parent)) {
                $ul .= '<tbody>';
                $ul .= '<tr><td><b>' . $value->project_title . '</b></td>
                        <td align="right">' . number_format($value->prj_budget) . '</td>
                        <td></td><td></td></tr>';
                $ul .= $this->getTreeChildProject($value->project_id);
                $ul .= '</tbody>';
            }

        }

        return $ul;
    }

    public function getTreeChildProject($parent = '0', &$ul = '', $tab = '')
    {
        //tab data
        $tab = '&emsp;&emsp;' . $tab;

        $this->db->where('project_parent', $parent);
        $query = $this->db->get('tbl_project_manage');
        foreach ($query->result() as $key => $row) {

            $ul .= '<tr>';
            if (@$row->project_level == 3) {
                $ul .= "<td>{$tab}" . $this->data_budget[$row->project_title] . "</td>";
            } else if (@$row->project_level == 4) {
                $ul .= "<td>{$tab}" . $this->data_cost[$row->project_title] . "</td>";
            } else {
                $ul .= "<td>{$tab}" . $row->project_title . "</td>";
            }

            $ul .= "<td align='right'>" . number_format($row->prj_budget) . "</td>";
            $ul .= "<td></td>";
            $ul .= "<td></td>";
            $ul .= '</tr>';


            $this->getTreeChildProject(@$row->project_id, $ul, $tab);
        }

        return $ul;
    }

    //sum budget project_manage
    public function getSumProject()
    {
        $year = $this->session->userdata('year');;
        $query = $this->db->query('select sum(prj_budget_sum) as budget from tbl_project_manage where project_parent is null and project_year = ' . $year);
        return $query->row()->budget;
    }

    //get tree prj title
    public function getTitleTree($parent = '',&$data = array()){
        $this->db->select('*');
        $this->db->where('project_id',$parent);
        $this->db->from('tbl_project_manage');
        $query = $this->db->get();
        foreach ($query->result() as $key => $value) {
      
            $data[$value->project_id] = $value->project_title;
            $this->getTitleTree($value->project_parent,$data);
        } 
        return $data;
    }
    public function getTitleTreeChild($parent = '',&$data = array()){
        $this->db->select('*');
        $this->db->where('prj_id',$parent);
        $this->db->from('tbl_project');
        $query = $this->db->get();
        foreach ($query->result() as $key => $value) {
      
            $data[$value->prj_id] = $value->prj_name;
            $this->getTitleTree($value->prj_parent,$data);
        } 
        return $data;
    }
    

    public function searchPrj($data){
        $this->db->select('tbl_project.*,tbl_expenses.expenses_amount_result');
        $this->db->from('tbl_project');
        $this->db->where('prj_year',$this->session->userdata('year'));
        $this->db->like('prj_name',$data);
        $this->db->join('tbl_expenses','tbl_expenses.project_id = tbl_project.prj_id','left');
        $query = $this->db->get();
        return $query->result();

    }

    public function getPrjSelect($data){
        $this->db->select('*');
        $this->db->from('tbl_project');
        $this->db->where('prj_year',$this->session->userdata('year'));
        $this->db->where('prj_id',$data);
        $this->db->join('tbl_expenses','tbl_expenses.project_id = tbl_project.prj_id','left');
        $query = $this->db->get();
        return $query->result();

    }

    public function getBudgetLog($id,$type = ''){
        if (!empty($type)){
            $this->db->where('prj_budget_type',$type);
            $this->db->where('prj_budget_parent is not null',null,false);
        }
        $this->db->where('prj_id',$id);
        return $this->db->get('tbl_prj_budget_log')->result();
    }


}