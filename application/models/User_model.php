<?php
class User_model extends CI_Model {
	
	function loginAdmin($username, $password)
	{
		$select = array(
			'id',
			'username',
			'password'
		);
		$this->db->select($select);
		$this->db->from('login');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get();
	}
	
	function loginDriver($username, $password)
	{
		$select = array(
			'id',
			'username',
			'password'
		);
		$this->db->select($select);
		$this->db->from('login_driver');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->where('aktif', 1);
		return $this->db->get();
	}

	function createDriver($data)
	{
		$this->db->insert('login_driver', $data);
	}
	
	function updateDriver($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('login_driver', $data);
	}
	
	function selectAllDrivers()
	{
		$this->db->from('login_driver');
		$this->db->order_by('id', 'DESC');
		return $this->db->get();
	}
	
	function selectAllDriversPaging($limit=array())
	{
		$this->db->from('login_driver');
		$this->db->order_by('id', 'DESC');
		if($limit != null)
		{
			$this->db->limit($limit['perpage'], $limit['offset']);
		}
		return $this->db->get();
	}
	
	function selectDriverById($id)
	{
		$this->db->from('login_driver');
		$this->db->where('id',$id);
		return $this->db->get();
	}
	
	function updateAdmin($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('login', $data);
	}
	
	function selectAdminById($id)
	{
		$select = array('id','username','password');
		$this->db->select($select);
		$this->db->from('login');
		$this->db->where('id',$id);
		return $this->db->get();
	}
	
	function selectAllDriversJoinCustomers()
	{
		$select =   array(
				'pemesanan.id 	as id_pemesanan',
				'pemesanan.name',
				'pemesanan.no_handphone',
				'pemesanan.alamat',
				'pemesanan.alamat_tujuan',
				'pemesanan.pesanan',
				'pemesanan.waktu_kirim',
				'pemesanan.waktu_sampai',
				'pemesanan.status',
				'pemesanan.regId',
				'pemesanan.selesai',
				'pemesanan.pemroses',
				'pemesanan.latitude',
				'pemesanan.longitude',
				'pemesanan.lat',
				'pemesanan.long',
				'pemesanan.driver',
				'pemesanan.jarak',
				'pemesanan.biaya',
				'pemesanan.good',
                'driver.id',
                'driver.username 	as username_driver',
                'driver.alamat	 	as alamat_driver',
                'driver.nama	 	as nama_driver',
                'driver.bn	 		as bn',
                'driver.ktp	 		as ktp',
                'driver.jarak	 	as jarak',
                'driver.hasil	 	as hasil',
            );
		$this->db->select($select);
		$this->db->from('login_driver as driver');
		$this->db->join('pemesanan as pemesanan','pemesanan.driver = driver.id','inner');
		$this->db->group_by('driver.id');
		$this->db->order_by('driver.id', 'DESC');
		
		return $this->db->get();
	}
	
}