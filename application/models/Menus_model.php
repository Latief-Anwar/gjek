<?php
class Menus_model extends CI_Model {
	
	function createMenu($data)
	{
		$this->db->insert('menus', $data);
	}
	
	function selectMakananByIdRestaurant($id_restaurant)
	{
		$this->db->from('menus');
		$this->db->where('id_restaurant',$id_restaurant);
		$this->db->where('jenis','makanan');
		return $this->db->get();
	}
	
	function selectMinumanByIdRestaurant($id_restaurant)
	{
		$this->db->from('menus');
		$this->db->where('id_restaurant',$id_restaurant);
		$this->db->where('jenis','minuman');
		return $this->db->get();
	}
	
	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('menus');
	}
	
	
}