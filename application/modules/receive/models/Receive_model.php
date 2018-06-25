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
            $this->db->where('notice_id', $id);
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
        $this->db
            ->where('receive_id', $input['receive_id'])
            ->update('tax_receive', $input);


    }

    public function del_other($id)
    {
        $this->db->where('receive_id', $id);
        return $this->db->delete('tax_receive');
    }

<<<<<<< HEAD


    ////outside///
    public function insert_outside($input)
    {
        $this->db->insert('outside_tax', $input);
    }

    public function getOutside()
    {
        $query = $this->db->get('outside_tax');
        return $query->result();
    }

    public function updateOutside($input)
    {
        return $this->db
            ->where('outside_id', $input['outside_id'])
            ->update('outside_tax', $input);


    }


    public function read_Outside_update($id)
    {
        return $this->db
            ->where('outside_id', $id)
            ->get('outside_tax')
            ->result_array();
    }

    public function receive_tax_pay($notice_number, $individual_number)
    {
        $this->db->select('tax_notice.*,(select sum(receive_amount)-tax_notice.notice_estimate from tax_receive where tax_notice.notice_id = tax_receive.notice_id) as tax_estimate,(select sum(receive_amount) from tax_receive where tax_notice.notice_id = tax_receive.notice_id) as tax_amount,(select sum(interest) from tax_receive where tax_notice.notice_id = tax_receive.notice_id) as tax_interest,tbl_individual.*,tbl_tax_type.*,tbl_tax.*');

        $this->db->where('tax_notice.notice_number', $notice_number);
        $this->db->where('tbl_individual.individual_number', $individual_number);

        $this->db->from('tax_notice');
        $this->db->join('tbl_individual', 'tbl_individual.individual_id = tax_notice.individual_id', 'left');
        $this->db->join('tbl_tax_type', 'tbl_tax_type.tax_type_id = tbl_individual.individual_type', 'left');
        $this->db->join('tbl_tax', 'tbl_tax.tax_id = tax_notice.tax_id', 'left');

        $query = $this->db->get();
        return $query->result_array();
    }

    function get_notic_one($id)
    {
        $this->db->select('tax_notice.*,(select sum(receive_amount)-tax_notice.notice_estimate from tax_receive where tax_notice.notice_id = tax_receive.notice_id) as tax_estimate,(select sum(receive_amount) from tax_receive where tax_notice.notice_id = tax_receive.notice_id) as tax_amount,(select sum(interest) from tax_receive where tax_notice.notice_id = tax_receive.notice_id) as tax_interest,tbl_individual.*,tbl_tax_type.*,tbl_tax.*');
        $this->db->where('tax_notice.notice_id', $id);
        $this->db->from('tax_notice');
        $this->db->join('tbl_individual', 'tbl_individual.individual_id = tax_notice.individual_id', 'left');
        $this->db->join('tbl_tax_type', 'tbl_tax_type.tax_type_id = tbl_individual.individual_type', 'left');
        $this->db->join('tbl_tax', 'tbl_tax.tax_id = tax_notice.tax_id', 'left');
        $query = $this->db->get();
        return $query->result_array();
    }

    function get_receive_notice($id)
    {
        return $this->db
            ->select('tax_receive.*,tbl_tax.*')
            ->where('tax_receive.notice_id', $id)
            ->order_by('tax_receive.receive_date', 'asc')
            ->from('tax_receive')
            ->join('tbl_tax', 'tbl_tax.tax_id = tax_receive.tax_id', 'left')
            ->get()
            ->result_array();
    }

    function recieve_tax_add($input)
    {
        $this->db->insert('tax_receive', $input);
    }





///// Ajax ////////
=======
>>>>>>> Dev-Branch
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
        if ($query->num_rows() > 0) {

            foreach ($query->result_array() as $key => $row) {
                $data[] = $row;
            }
        }

        $count_condition = $this->db->from('tbl_individual')->where($condition)->count_all_results();
        $count = $this->db->from('tbl_individual')->count_all_results();
        $result = array('count' => $count, 'count_condition' => $count_condition, 'data' => $data, 'error_message' => '');
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
<<<<<<< HEAD

    public function getAjaxOtherTaxAjax($param)
    {
        $keyword = $param['keyword'];
        $this->db->select('*');

        $condition = "1=1";

        // if (!empty($param['filter'])) {
        //     $filter = $param['filter'];
        //     if (!empty($filter[1])) {
        //         $this->db->like('individual_type', $filter[1]);
        //     }
        //     if (!empty($filter[2])) {
        //         $this->db->like('individual_number', $filter[2]);
        //     }
        //     if (!empty($filter[3])) {
        //         $this->db->like('individual_fullname', $filter[3]);
        //     }

        // }


        $this->db->where($condition);
        $this->db->limit($param['page_size'], $param['start']);
        $this->db->order_by($param['column'], $param['dir']);

        $this->db->select('tax_receive.*,tbl_individual.*,tbl_tax.*');
        $this->db->from('tax_receive');
        $this->db->join('tbl_individual', 'tbl_individual.individual_id = tax_receive.individual_id', 'left');
        $this->db->join('tbl_tax', 'tbl_tax.tax_id = tax_receive.tax_id', 'left');

        $query = $this->db->get();

        $data = array();
        if ($query->num_rows() > 0) {

            foreach ($query->result_array() as $key => $row) {
                $row['receive_amount'] = number_format($row['receive_amount'], 2);
                $date = explode('-', $row['receive_date']);
                $row['receive_date'] = $date[2] . '/' . $date[1] . '/' . ($date[0] + 543);


                $data[] = $row;
            }
        }





        $count_condition = $this->db->from('tax_receive')->where($condition)->count_all_results();
        $count = $this->db->from('tax_receive')->count_all_results();
        $result = array('count' => $count, 'count_condition' => $count_condition, 'data' => $data, 'error_message' => '');
        return $result;

    }

}
=======
}
>>>>>>> Dev-Branch
