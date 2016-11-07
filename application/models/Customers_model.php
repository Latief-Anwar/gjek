<?php
class Customers_model extends CI_Model implements DatatableModel {

	/**
		 * @ return
		 * 		Expressions / Columns to append to the select created by the Datatable library
		 */
		public function appendToSelectStr() {
			//_protect_identifiers needs to be FALSE in the database.php when using custom expresions to avoid db errors.
			//CI is putting `` around the expression instead of just the column names
			return null;
		}
    	
		public function fromTableStr() {
			return 'login_user lu';
		}
    
	    /**
	     * @return
	     *     Associative array of joins.  Return NULL or empty array  when not joining
	     */
	    public function joinArray(){
	    	return null;
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
	
	public function selectCustomerById($id)
	{
		$this->db->from('login_user');
		$this->db->where('id',$id);
		return $this->db->get();
	}
	
	public function selectCustomerByUsername($username)
	{
		$this->db->from('login_user');
		$this->db->where('email',$username);
		return $this->db->get();
	}
	
	function updateCustomer($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('login_user', $data);
	}
	
	
}