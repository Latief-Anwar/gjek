<?php
class Orders_model extends CI_Model{

	
	public function selectAllOrders()
	{
		$this->db->from('pemesanan');
		$this->db->order_by('id','ASC');
		return $this->db->get();
	}
	
	public function selectOrdersByDriver($driverUsername)
	{
		$this->db->from('pemesanan');
		$this->db->where('driver',$driverUsername);
		return $this->db->get();
	}
	
	public function countAllOrders()
	{
		$select =   array(
                'count(pemesanan.id) as total_orders',
                'COALESCE(SUM(pemesanan.jarak),0) as total_jarak',
                'COALESCE(SUM(pemesanan.biaya),0) as total_pendapatan'
            );
		$this->db->select($select);
		$this->db->from('pemesanan');
		return $this->db->get();
	}
	
	public function countAllGoodJekOrders($good)
	{
		$select =   array(
                'count(pemesanan.id) as total_orders',
                'COALESCE(SUM(pemesanan.jarak),0) as total_jarak',
                'COALESCE(SUM(pemesanan.biaya),0) as total_pendapatan'
            );
		$this->db->select($select);
		$this->db->from('pemesanan');
		$this->db->where('good',$good);
		return $this->db->get();
	}
	
	public function countOrdersByDriver($driverUsername)
	{
		$select =   array(
                'count(pemesanan.id) as total_orders',
                'COALESCE(SUM(pemesanan.jarak),0) as total_jarak',
                'COALESCE(SUM(pemesanan.biaya),0) as total_hasil'
            );
		$this->db->select($select);
		$this->db->from('pemesanan');
		$this->db->where('driver',$driverUsername);
		return $this->db->get();
	}
	
	
	//CLONE ORDER_HISTORY MODEL
	//tabel olders_history tidak bisa nge load interface datatables, jadi ditaruh disini, tapi di orderHistory_model juga ada
	public function countOrdersByCustomer($customerUsername)
	{
		$select =   array(
                'count(orders_history.id) as total_orders',
                'COALESCE(SUM(orders_history.jarak),0) as total_jarak',
                'COALESCE(SUM(orders_history.biaya),0) as total_biaya'
            );
		$this->db->select($select);
		$this->db->from('orders_history');
		$this->db->where('username',$customerUsername);
		return $this->db->get();
	}
	
	public function countGoodJekOrdersByCustomer($good, $username)
	{
		$select =   array(
                'count(orders_history.id) as total_orders',
                'COALESCE(SUM(orders_history.jarak),0) as total_jarak',
                'COALESCE(SUM(orders_history.biaya),0) as total_biaya'
            );
		$this->db->select($select);
		$this->db->from('orders_history');
		$this->db->where('good',$good);
		$this->db->where('username',$username);
		return $this->db->get();
	}
}