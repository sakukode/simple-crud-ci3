<?php
class Perangkat_model extends CI_Model {

	private $_table = "perangkat";
	private $primary_key = "id";

	public function __construct()
	{
		$this->load->database();
	}

	/**
	 * Get All Record from table
	 * @return Object
	 */
	public function get_all()
	{
		$result = $this->db->get($this->_table);

		if($result->num_rows() > 0)
		{
			return $result->result();
		}

		return false;
	}


	/**
	 * Get All Record by type from table
	 * @return Object
	 */
	public function get_all_by_type($type)
	{
		$result = $this->db->get_where($this->_table, array('type' => $type));

		if($result->num_rows() > 0)
		{
			return $result->result();
		}

		return false;
	}

	/**
	 * Get One Record by condition
	 * @param  Array $condition "example : array('id' => 1)"
	 * @return Object
	 */
	public function get_one($condition)
	{
		$query = $this->db->get_where($this->_table, $condition);

		if($query)
		{
			return $query->row();
		}

		return false;
	}

	/**
	 * Get total record by a condition
	 * @param  [type] $field [description]
	 * @param  [type] $value [description]
	 * @return [type]        [description]
	 */
	public function get_total($type, $field, $value)
	{
		$this->db->where('type', $type);
		$this->db->where($field, $value);
		$this->db->from($this->_table);
		return $this->db->count_all_results();
	}

	/**
	 * Action to Create a record
	 * @param  array $data "example array('title'=>'hello','author'=>'john doe')"
	 * @return string  "last insert id"
	 */
	public function create($data) 
	{
		return $this->db->insert($this->_table, $data);
	}

	/**
	 * Action to Update a record
	 * @param  String $id   "primary key table"
	 * @param  Array $data "example : array('title'=>'hello','author'=>'john doe')"
	 * @return {}
	 */
	public function update($condition, $data)
	{
		$this->db->trans_start();
		$this->db->update($this->_table, $data, $condition);
		$this->db->trans_complete();

		// was there any update or error?
		if ($this->db->affected_rows() == '1')
		{
			return true;
		}
		else
		{
			// if any trans error
			if ($this->db->trans_status() === false)
			{
				return false;
			}
			else
		        {
				return true;
		        }
		}
	}

	/**
	 * Action Delete a record
	 * @param  Array $condition 'example array('id' => 2)'
	 * @return {}
	 */
	public function delete($condition)
	{
		return $this->db->delete($this->_table, $condition);
	}
}