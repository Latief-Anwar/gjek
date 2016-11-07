<?php
class OrdersHistory_model extends CI_Model implements DatatableModel {
	
	/**
		 * @ return
		 * 		Expressions / Columns to append to the select created by the Datatable library
		 */
		public function appendToSelectStr() {
			//_protect_identifiers needs to be FALSE in the database.php when using custom expresions to avoid db errors.
			//CI is putting `` around the expression instead of just the column names
			return array(
					'driver' => 'concat(ld.nama, \' - \', ld.hp)'
				);
		}
    	
		public function fromTableStr() {
			return array('orders_history oh');
		}
    
	    /**
	     * @return
	     *     Associative array of joins.  Return NULL or empty array  when not joining
	     */
	    public function joinArray(){
	    	return array(
	    		'login_driver ld' => 'ld.username = oh.driver',
	    		'login l' => 'l.id = oh.pemroses'
			);
	    }
	    
    /**
     * 
     *@return
     *  Static where clause to be appended to all search queries.  Return NULL or empty array
     * when not filtering by additional criteria
     */
    	public function whereClauseArray(){
    		return NULL;
    	}
	
	
	//====================================================================//

	public function insert($data)
	{
		$this->db->insert('orders_history', $data);
	}
	
	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('orders_history', $data);
	}
	
	public function countAllOrders()
	{
		$select =   array(
                'count(orders_history.id) as total_orders',
                'COALESCE(SUM(orders_history.jarak),0) as total_jarak',
                'COALESCE(SUM(orders_history.biaya),0) as total_pendapatan'
            );
		$this->db->select($select);
		$this->db->from('orders_history');
		return $this->db->get();
	}
	
	public function countAllGoodJekOrders($good)
	{
		$select =   array(
                'count(orders_history.id) as total_orders',
                'COALESCE(SUM(orders_history.jarak),0) as total_jarak',
                'COALESCE(SUM(orders_history.biaya),0) as total_pendapatan'
            );
		$this->db->select($select);
		$this->db->from('orders_history');
		$this->db->where('good',$good);
		return $this->db->get();
	}
	
	public function countOrdersByDriver($driverUsername)
	{
		$select =   array(
                'count(orders_history.id) as total_orders',
                'COALESCE(SUM(orders_history.jarak),0) as total_jarak',
                'COALESCE(SUM(orders_history.biaya),0) as total_hasil'
            );
		$this->db->select($select);
		$this->db->from('orders_history');
		$this->db->where('driver',$driverUsername);
		return $this->db->get();
	}
	
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
	
	public function get_all_orders_id()
	{
		$query = $this->db->get('orders_history');
		$this->db->order_by('id', 'ASC');
		$array = array();
		foreach($query->result_array() as $row)
		{
        $array[] = $row['id']; // add each user id to the array
		}
		return $array;
	}
	
	
	
}