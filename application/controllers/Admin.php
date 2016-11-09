<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends Admin_Controller {

	function __construct()
		{
				parent::__construct();
				$this->load->library(array('form_validation','pagination'));
				$this->load->helper(array('form','security'));
				$this->load->model(array('User_model','Orders_model'));
		}
	
	public function index()
	{
		$this -> load -> library('Datatable', array('model' => 'OrdersHistory_model', 'rowIdCol' => 'oh.id'));
		
		//ambil dari tabel pemesanan, kemudian dimasukan ke tabel login_user
		$query	= $this->User_model->selectAllDrivers()->result();
		foreach($query as $row):
			$driverUsername = $row->username;
			$id = $row->id;
			$new_data = array(
				'hasil' => $this->Orders_model->countOrdersByDriver($driverUsername)->row('total_orders'),
				'jarak' => $this->Orders_model->countOrdersByDriver($driverUsername)->row('total_jarak')
			);
			$this->User_model->updateDriver($id, $new_data);
		endforeach;
		
		//inserting to Order_history table
		$AllOrdersHistoryId = $this->OrdersHistory_model->get_all_orders_id();
	
		$allOrders = $this->Orders_model->selectAllOrders()->result();
		foreach($allOrders as $row):
			$data_orders_konyol = array(
				'id'			=> $row->id,
				'username' 		=> $row->username,
				'name' 			=> $row->name,
				'no_handphone' 	=> $row->no_handphone,
				'alamat' 		=> $row->alamat,
				'alamat_tujuan' => $row->alamat_tujuan,
				'pesanan' 		=> $row->pesanan,
				'waktu_kirim' 	=> $row->waktu_kirim,
				'waktu_sampai' 	=> $row->waktu_sampai,
				'status' 		=> $row->status,
				'regId' 		=> $row->regId,
				'selesai' 		=> $row->selesai,
				'pemroses' 		=> $row->pemroses,
				'latitude' 		=> $row->latitude,
				'longitude' 	=> $row->longitude,
				'lat' 			=> $row->lat,
				'long' 			=> $row->long,
				'driver' 		=> $row->driver,
				'jarak' 		=> $row->jarak,
				'biaya' 		=> $row->biaya,
				'good' 			=> $row->good,
				'nama' 			=> $row->nama,
				'image' 		=> $row->image,
				'invoice' 		=> $row->invoice
			);
			
			if (!in_array($row->id, $AllOrdersHistoryId))
			{
				$this->OrdersHistory_model->insert($data_orders_konyol);
			}else{
				$this->OrdersHistory_model->update($row->id, $data_orders_konyol);
			}
		endforeach;
		$this->statistics();
		$this->render('admin/admin_view');
		$this->load->view('admin/ajax_admin_view');
	}
	
	protected function statistics()
	{
		$this -> load -> library('Datatable', array('model' => 'OrdersHistory_model', 'rowIdCol' => 'oh.id'));
		//total orders bulan ini
		$this->data['TotalOrders'] = $this->Orders_model->countAllOrders()->row();
		$this->data['GoodJek'] = $this->Orders_model->countAllGoodJekOrders($good='Good Ride')->row();
		$this->data['GoodFood'] = $this->Orders_model->countAllGoodJekOrders($good='Good Food')->row();
		$this->data['GoodMart'] = $this->Orders_model->countAllGoodJekOrders($good='Good Pick')->row();
		
		//history
		$this->data['TotalOrdersHistory'] 	= $this->OrdersHistory_model->countAllOrders()->row();
		$this->data['GoodJekHistory'] = $this->OrdersHistory_model->countAllGoodJekOrders($good='Good Ride')->row();
		$this->data['GoodFoodHistory'] = $this->OrdersHistory_model->countAllGoodJekOrders($good='Good Food')->row();
		$this->data['GoodMartHistory'] = $this->OrdersHistory_model->countAllGoodJekOrders($good='Good Pick')->row();
		
	}
	
	public function allOrders()
	{
		$this->data['page_title'] = 'All Orders History';
		$this->render('admin/orders/orders_view');
		$this->load->view('admin/orders/ajax_orders_view');
	}
	
	public function allCustomers($username=null)
	{
		if (!empty($username))
		{
			$this -> load -> library('Datatable', array('model' => 'Customers_model', 'rowIdCol' => 'lu.id'));
			
			$this->data['page_title'] 	= $this->Customers_model->selectCustomerByUsername($username)->row('nama').'<small> Detail Customer</small>';
			$this->data['customer']		= $this->Customers_model->selectCustomerByUsername($username)->row();
			
			$this->data['TotalOrders']	= $this->Orders_model->countOrdersByCustomer($username)->row();
			$this->data['GoodJek'] = $this->Orders_model->countGoodJekOrdersByCustomer($good='Good Ride', $username)->row();
			$this->data['GoodFood'] = $this->Orders_model->countGoodJekOrdersByCustomer($good='Good Food', $username)->row();
			$this->data['GoodMart'] = $this->Orders_model->countGoodJekOrdersByCustomer($good='Good Pick', $username)->row();
			
		}else{
			$this->data['page_title'] = 'All Customers';
		}
		$this->render('admin/customers/customers_view');
		$this->load->view('admin/customers/ajax_customers_view');
	}
	
	public function allOrdersHistoryDataTable() 
	{
		//Important to NOT load the model and let the library load it instead.  
        $this -> load -> library('Datatable', array('model' => 'OrdersHistory_model', 'rowIdCol' => 'oh.id'));
        //format array is optional, but shown here for the sake of example
        $json = $this -> datatable -> datatableJson();
        $this -> output -> set_header("Pragma: no-cache");
        $this -> output -> set_header("Cache-Control: no-store, no-cache");
        $this -> output -> set_content_type('application/json') -> set_output(json_encode($json));
    }
	
	public function customersDataTable() 
	{
		//Important to NOT load the model and let the library load it instead.  
        $this -> load -> library('Datatable', array('model' => 'Customers_model', 'rowIdCol' => 'lu.id'));
        //format array is optional, but shown here for the sake of example
        $json = $this -> datatable -> datatableJson();
        $this -> output -> set_header("Pragma: no-cache");
        $this -> output -> set_header("Cache-Control: no-store, no-cache");
        $this -> output -> set_content_type('application/json') -> set_output(json_encode($json));
    }
	
	public function allDrivers()
	{
		$this->data['page_title'] = 'Manage Good-jek Drivers';
				$config = array(
					'base_url' => site_url('admin/allDrivers'),
					'total_rows' => count($this->User_model->selectAllDrivers()->result()),
					'per_page' => 6,
					'full_tag_open' => "<ul class='pagination pagination-sm no-margin pull-right'>",
					'full_tag_close' => "</ul>",
					'num_tag_open' => '<li>',
					'num_tag_close' => '</li>',
					'cur_tag_open' => "<li class='disabled'><li class='active'><a href='#'>",
					'cur_tag_close' => "<span class='sr-only'></span></a></li>",
					'next_tag_open' => "<li>",
					'next_tagl_close' => "</li>",
					'prev_tag_open' => "<li>",
					'prev_tagl_close' => "</li>",
					'first_tag_open' => "<li>",
					'first_tagl_close' => "</li>",
					'last_tag_open' => "<li>",
					'last_tagl_close' => "</li>",
					'num_links' => 2,
					'last_link' => FALSE,
					'first_link' => FALSE,
					'page_query_string' => TRUE,
					'query_string_segment' => 'page'
				);
				$this->pagination->initialize($config);
				$limit['perpage'] = 6;
				$limit['offset'] = $this->input->get('page');
		$this->data['drivers'] = $this->User_model->selectAllDriversPaging($limit)->result();
		$this->render('admin/drivers_view');
		$this->load->view('admin/ajax_drivers_view');
	}
	
	public function detailDriverAjax($id = NULL)
	{
		if($id != NULL)
		{
			$this -> load -> library('Datatable', array('model' => 'OrdersHistory_model', 'rowIdCol' => 'oh.id'));
			
			$data = array();
			$data['driver'] 			= $this->User_model->selectDriverById($id)->row();
			$driverUsername 			= $this->User_model->selectDriverById($id)->row('username');
			$data['total_orders']	 	= $this->Orders_model->countOrdersByDriver($driverUsername)->row('total_orders');
			$data['total_jarak'] 		= $this->Orders_model->countOrdersByDriver($driverUsername)->row('total_jarak');
			$data['total_hasil'] 		= $this->Orders_model->countOrdersByDriver($driverUsername)->row('total_hasil');
			
			//history
			$data['total_orders_history'] 	= $this->OrdersHistory_model->countOrdersByDriver($driverUsername)->row('total_orders');
			$data['total_jarak_history'] 	= $this->OrdersHistory_model->countOrdersByDriver($driverUsername)->row('total_jarak');
			$data['total_hasil_history'] 	= $this->OrdersHistory_model->countOrdersByDriver($driverUsername)->row('total_hasil');
			
			echo json_encode($data);
		}else{show_404();}
	}
	
	public function createDriver()
	{
		$this->data['page_title'] = 'Create Driver';
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('hp','No. HP','numeric|required');
		$this->form_validation->set_rules('alamat','Alamat','trim|required');
		$this->form_validation->set_rules('ktp','No KTP','numeric|required');
		$this->form_validation->set_rules('bn','No Plat','trim|required');
		
			if($this->form_validation->run()===TRUE)
			{
				$config['upload_path']          = './assets/images/drivers/';
				$config['allowed_types']        =  'jpg|jpeg|JPG|gif|png|bmp';
				$config['overwrite']      		= TRUE;
				$config['max_size']             = 1024*2; //file in kb
				$config['encrypt_name'] 		= TRUE;
					
				$this->load->library('upload', $config);
				if ($this->upload->do_upload())
				{
					$upload=$this->upload->data();
					$this->thumb($upload);
				
					$data = array(
					  'username' => $this->input->post('username'),
					  'password' => substr(md5($this->input->post('password')), 0, 30),
					  'nama' => $this->input->post('nama'),
					  'hp' => $this->input->post('hp'),
					  'alamat' => $this->input->post('alamat'),
					  'ktp' => $this->input->post('ktp'),
					  'bn' => $this->input->post('bn'),
					  'jarak' => '',
					  'hasil' => '',
					  'regId' => '',
					  'image' => base_url('assets/images/drivers').'/'.$upload['raw_name'].$upload['file_ext'],
					  'extension' => '',
					  'aktif' => '1',
					);
					$this->User_model->createDriver($data);
					$this->session->set_flashdata('message','Berhasil Mendaftarkan Driver');
					redirect('admin/allDrivers','refresh');
				}
				else {
				$this->session->set_flashdata('message','Format foto salah. Gagal Mendaftarkan Driver');
				$this->allDrivers();
			  }
			}else {
				$this->session->set_flashdata('message','Gagal Mendaftarkan Driver');
				$this->allDrivers();
			  }
	}
	
	protected function thumb($upload)
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] = $upload['full_path'];
		$config['create_thumb'] = FALSE;
		$config['maintain_ratio'] = FALSE;
		$config['width'] = 460;
		$config['height'] = 460;
			
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}
	
	public function activateDriver($id = null)
	{
		$id = (int) $id;
		if (!empty($id))
		{
			$new_data = array('aktif' => 1);
			$this->User_model->updateDriver($id, $new_data);
			$this->session->set_flashdata('message', 'Driver Account activated');
			redirect('admin/allDrivers','refresh');
		}
	}
	
	public function deactivateDriver($id = null)
	{
		$id = (int) $id;
		if (!empty($id))
		{
			$new_data = array('aktif' => 0);
			$this->User_model->updateDriver($id, $new_data);
			$this->session->set_flashdata('message', 'Driver Account de-activated');
			redirect('admin/allDrivers','refresh');
		}else{show_404();}
	}
	
	// CUSTOMERS ACCOUNT STATUS==============================
	
	public function activateCustomer($id = null)
	{
		$id = (int) $id;
		if (!empty($id))
		{
			$this -> load -> library('Datatable', array('model' => 'Customers_model', 'rowIdCol' => 'lu.id'));
			$emailCustomer = $this->Customers_model->selectCustomerById($id)->row('email');
			
			$new_data = array('aktivasi' => 1);
			$this->Customers_model->updateCustomer($id, $new_data);
			$this->session->set_flashdata('message', 'Customer Account activated');
			redirect('admin/allCustomers/'.$emailCustomer.'','refresh');
		}
	}
	
	public function deactivateCustomer($id = null)
	{
		$id = (int) $id;
		if (!empty($id))
		{
			$this -> load -> library('Datatable', array('model' => 'Customers_model', 'rowIdCol' => 'lu.id'));
			$emailCustomer = $this->Customers_model->selectCustomerById($id)->row('email');
			
			$new_data = array('aktivasi' => 0);
			$this->Customers_model->updateCustomer($id, $new_data);
			$this->session->set_flashdata('message', 'Customer Account de-activated');
			redirect('admin/allCustomers/'.$emailCustomer.'','refresh');
		}else{show_404();}
	}
	
	public function profile()
	{
		$this->data['page_title'] = 'Profile';
		$id = $this->session->userdata('id');
		$this->data['user'] = $this->User_model->selectAdminById($id)->row();
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('password_confirm','Ulangi Password','required|matches[password]');
		
		if($this->form_validation->run()===FALSE)
		{
			$this->render('profile_view');
		}
		else
		{
			$new_data = array(
			  'username' => $this->input->post('username'),
			  'password' => substr(md5($this->input->post('password')), 0, 30)
			);
			$this->User_model->updateAdmin($id, $new_data);
			$this->session->set_flashdata('message', 'Berhasil Ganti Password');
			redirect('admin/profile','refresh');
		}
	}
	
	//saran
	public function saranDataTable() 
	{
		//Important to NOT load the model and let the library load it instead.  
        $this -> load -> library('Datatable', array('model' => 'Saran_model', 'rowIdCol' => 's.id'));
        //format array is optional, but shown here for the sake of example
        $json = $this -> datatable -> datatableJson();
        $this -> output -> set_header("Pragma: no-cache");
        $this -> output -> set_header("Cache-Control: no-store, no-cache");
        $this -> output -> set_content_type('application/json') -> set_output(json_encode($json));
    }
	
	public function hapusSaran($id=null)
	{
		$id = (int) $id;
		if(!empty($id)){
			$this->data['page_title'] = 'Hapus Saran Keramaian';
			$this -> load -> library('Datatable', array('model' => 'Saran_model', 'rowIdCol' => 's.id'));
			$this->Saran_model->delete($id);
			$this->session->set_flashdata('message', 'Data berhasil dihapus');
			redirect('admin','refresh');
			
		}else{
			show_404();
		}
	}
	
}