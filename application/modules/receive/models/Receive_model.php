<?php 

class Receive_model extends CI_Model
{
    public function read_receive($id = '')
    {
        if (!empty($id)) {
            $this->db->where('individual_id', $id);
        }
        $this->db->select('tbl_individual.*,tbl_tax_type.*');

        $this->db->from('tbl_individual');
        $this->db->join('tbl_tax_type', 'tbl_tax_type.tax_type_id = tbl_individual.individual_type', 'left');

        $query = $this->db->get();
        return $query->result();
    }

    public function read_dashborad()
    {
        $this->db->select('tax_notice.*,tbl_individual.*,tbl_tax_type.*,tbl_tax.*');
        $this->db->from('tax_notice');
        $this->db->join('tbl_individual', 'tbl_individual.individual_id = tax_notice.individual_id', 'left');
        $this->db->join('tbl_tax_type', 'tbl_tax_type.tax_type_id = tbl_individual.individual_type', 'left');
        $this->db->join('tbl_tax', 'tbl_tax.tax_id = tax_notice.tax_id', 'left');

        $query = $this->db->get();
        return $query->result_array();
    }

    ////////////// Tax_Notice //////////////
    public function getNoticeAll($id = '')
    {
        if (!empty($id)) {
            $this->db->where('individual_id', $id);
        }
        $query = $this->db->get('tax_notice');
        return $query->result();
    }

    public function insertNotice($data, $id = '')
    {
        if (!empty($id)) {
            $this->db->where('individual_id', $id);
            return $this->db->update('tax_notice', $data);
        }
        return $this->db->insert('tax_notice', $data);

    }
    

    ///////////////////////////////////////////////////


    public function insertDataImport($data)
    {
        return $this->db->insert('tbl_individual', $data);
    }
 
     //get individual all
    public function getIndividualAll()
    {
        $query = $this->db->get('tbl_individual');
        return $query->result();
    }
 
     //insert data individual
    public function insertIndividual($data, $id = '')
    {
        if (!empty($id)) {
            $this->db->where('individual_id', $id);
            return $this->db->update('tbl_individual', $data);
        }
        return $this->db->insert('tbl_individual', $data);
    }

   //delelte data individual
    public function del_individual($id)
    {
        $this->db->where('individual_id', $id);
        return $this->db->delete('tbl_individual');
    }

     //other tax
    public function getOtherTaxAll()
    {
        $this->db->select('tax_receive.*,tbl_individual.*,tbl_tax.*');
        $this->db->from('tax_receive');
        $this->db->join('tbl_individual', 'tbl_individual.individual_id = tax_receive.individual_id', 'left');
        $this->db->join('tbl_tax', 'tbl_tax.tax_id = tax_receive.tax_id', 'left');

        $query = $this->db->get();
        return $query->result();
    }
 
     //other_tax_add
    public function insertOtherTax($input)
    {
        $this->db->insert('tax_receive', $input);
    }

    //other_tax_update

    public function read_OtherTax_update($id)
    {
        return $this->db
            ->where('receive_id', $id)
            ->get('tax_receive')
            ->result_array();
    }

    public function updateOtherTax($input)
    {
        return $this->db
            ->where('receive_id', $input['receive_id'])
            ->update('tax_receive', $input);
    }

    public function getRecieveTaxAjax($param)
    {
        $keyword = $param['keyword'];
        $this->db->select('*');

        $condition = "1=1";

        if (!empty($param['filter'])) {
            $filter = $param['filter'];
            if (!empty($filter[1])) {
                $this->db->like('individual_type', $filter[1]);
            }
            if (!empty($filter[2])) {
                $this->db->like('individual_number', $filter[2]);
            }
            if (!empty($filter[3])) {
                $this->db->like('individual_fullname', $filter[3]);
            }

        }


        $this->db->where($condition);
		$this->db->limit($param['page_size'], $param['start']);
		$this->db->order_by($param['column'], $param['dir']);
 
		$query = $this->db->get('tbl_individual');
		$data = array();
		if($query->num_rows() > 0){

			foreach($query->result_array() as $key =>  $row){
                $data[] = $row;
			}
		}
 
		$count_condition = $this->db->from('tbl_individual')->where($condition)->count_all_results();
		$count = $this->db->from('tbl_individual')->count_all_results();
		$result = array('count'=>$count,'count_condition'=>$count_condition,'data'=>$data,'error_message'=>'');
		return $result;


    // public function updateOtherTax($input)
    // {
    //     $this->db->where('receive_id', $input['receive_id']);
    //     $this->db->update('tax_receive', $input);
    // }

    // public function read_OtherTax_update($id)
    // {
    //     $this->db->where('receive_id', $id);
    //     $this->db->get('tax_receive');
    // }





    }
}