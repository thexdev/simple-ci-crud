<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

	private $_table = 'members';

	// List all your items
	public function view( $id = NULL )
	{
		if ( is_null( $id ) ) {
			$query = $this->db->get($this->_table);
			return $query->result_array();
		}

		$query = $this->db->get_where($this->_table, array('ID' => $id));
		return $query->row_array();
	}

	// Add a new item
	public function add($data)
	{
		if ($this->db->insert($this->_table, $data)) {
			redirect(base_url());
		}
		else {
			redirect(base_url());
		}
	}

	//Update one item
	public function update($id, $data)
	{
		$query = $this->db->update($this->_table, $data, array('ID' => $id));
		return $query;
	}

	//Delete one item
	public function delete($id = NULL)
	{
		$query = $this->db->delete($this->_table, array('ID' => $id));
		return $query;
	}
}

/* End of file Members_model.php */
/* Location: ./application/models/Members_model.php */
