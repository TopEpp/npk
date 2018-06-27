<?php
class Tax_estimate_model extends CI_Model
{
	public $_dataTax;

	function getTax($parent=0)
	{
		$this->db->select('*');
		$this->db->from('tbl_tax');
		$this->db->where('tax_type_input','0');
		$this->db->where('tax_parent_id',$parent);
		$query = $this->db->get();
		foreach ($query->result() as $key => $value) {
			@$this->_dataTax[$value->tax_parent_id][$value->tax_id] = $value;

			$this->getTax($value->tax_id);
		}

		return $this->_dataTax;
	}
}