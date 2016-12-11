<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info_model extends CI_Model{

	function __construct(){
		parent::__construct();
	}
	
	function create($data)
	{
		$this->db->insert('info', $data);
	}
	
	function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('info', $data);
	}
	
	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('info');
	}
	
	function select_all()
	{
		$this->db->from('info');
		$this->db->order_by('id', 'DESC');
		
		return $this->db->get();
	}
	
	function select_min()
	{
		$this->db->from('info');
		$this->db->order_by('id', 'DESC');
		
		return $this->db->get();
	}
	
	function select_all_paging($limit=array())
	{
		$this->db->from('info');
		$this->db->order_by('id', 'DESC');
		if($limit != null)
		{
			$this->db->limit($limit['perpage'], $limit['offset']);
		}
		return $this->db->get();
	}
	
	function select_by_id($id)
	{
		$this->db->from('info');
		$this->db->where('id',$id);
		
		return $this->db->get();
	}
	
	function select_arr_id()
	{
		$this->db->from('info');
		$query = $this->db->get();
		$array = array();
		foreach ($query->result_array() as $id)
			{
				$array[]=$id['id'];
			}
		return $array;
	}
}