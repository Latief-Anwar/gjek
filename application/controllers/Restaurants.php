<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restaurants extends Admin_Controller {

	function __construct()
		{
				parent::__construct();
				$this->load->library(array('form_validation','pagination'));
				$this->load->helper(array('form'));
				$this->load->model(array('Menus_model'));
				$this -> load -> library('Datatable', array('model' => 'Restaurants_model', 'rowIdCol' => 'r.id'));
		}
	
	public function index($id=null)
	{
		if (!empty($id))
		{
			$this->data['page_title'] =  $this->Restaurants_model->selectRestaurantById($id)->row('nama').'<small> Detail Restaurant</small>';
			$this->data['restaurant'] =  $this->Restaurants_model->selectRestaurantById($id)->row();
			$this->data['makanan'] =  $this->Menus_model->selectMakananByIdRestaurant($id)->result();// and where data makanan & minuman
			$this->data['minuman'] =  $this->Menus_model->selectMinumanByIdRestaurant($id)->result();
			
		}else{
			$this->data['page_title'] = 'All Restaurants';
		}
		$this->render('admin/restaurants/restaurants_view');
		$this->load->view('admin/restaurants/ajax_restaurants_view');
	}
	
	public function createRestaurant()
	{
		$this->data['page_title'] = 'Create Restaurant';
		$this->form_validation->set_rules('nama','Nama','trim|required');
		$this->form_validation->set_rules('nama_pemilik','Nama Pemilik','trim');
		$this->form_validation->set_rules('alamat','Alamat','trim|required');
		$this->form_validation->set_rules('email','Email','trim');
		$this->form_validation->set_rules('hp','Telp/HP','numeric|required');
		$this->form_validation->set_rules('jenis','Jenis Restaurant','trim|required');
		$this->form_validation->set_rules('jam_buka','Jam Buka','trim|required');
		$this->form_validation->set_rules('jam_tutup','Jam Tutup','trim|required');
		$this->form_validation->set_rules('hari_buka[]','Hari Buka','required');
		//$this->form_validation->set_rules('hari_libur','Hari Libur','trim');
		$this->form_validation->set_rules('keterangan','Keterangan','trim');
		$this->form_validation->set_rules('latitude','Latitude','trim|numeric|required');
		$this->form_validation->set_rules('longitude','Longitude','trim|numeric|required');
		
			if($this->form_validation->run()===TRUE)
			{
				$config['upload_path']          = './assets/images/restaurants/';
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
					  'nama' => $this->input->post('nama'),
					  'nama_pemilik' => $this->input->post('nama_pemilik'),
					  'alamat' => $this->input->post('alamat'),
					  'email' => $this->input->post('email'),
					  'hp' => $this->input->post('hp'),
					  'jenis' => $this->input->post('jenis'),
					  'jam_buka' => $this->input->post('jam_buka'),
					  'jam_tutup' => $this->input->post('jam_tutup'),
					  'hari_buka' => implode( ',' , $this->input->post('hari_buka')),
					  'keterangan' => $this->input->post('keterangan'),
					  'latitude' => $this->input->post('latitude'),
					  'longitude' => $this->input->post('longitude'),
					  'status' => 'buka',
					  'foto' => base_url('assets/images/restaurants').'/'.$upload['raw_name'].$upload['file_ext'],
					);
					
					if( !empty($this->input->post('hari_libur')) )
					{
						$data['hari_libur']= implode( ',' , $this->input->post('hari_libur'));
					}else{
						$data['hari_libur']= NULL;
					}
					
					$this->Restaurants_model->createRestaurants($data);
					$this->session->set_flashdata('message','Berhasil Mendaftarkan Restaurant');
					redirect('restaurants','refresh');
				}
				else {
				$this->session->set_flashdata('message','Format foto salah. Gagal Mendaftarkan Restaurant');
				$this->index();
			  }
			}else {
				$this->session->set_flashdata('message','Gagal Mendaftarkan Restaurant');
				$this->index();
			  }
	}
	
	protected function thumb($upload)
	{
		$config['image_library'] = 'gd2';
		$config['source_image'] = $upload['full_path'];
		$config['create_thumb'] = FALSE;
		$config['maintain_ratio'] = FALSE;
		$config['width'] = 460;
		$config['height'] = 280;
			
		$this->load->library('image_lib', $config);
		$this->image_lib->resize();
	}
	
	public function allRestaurantsDataTable()
	{
        //format array is optional, but shown here for the sake of example
        $json = $this -> datatable -> datatableJson();
        $this -> output -> set_header("Pragma: no-cache");
        $this -> output -> set_header("Cache-Control: no-store, no-cache");
        $this -> output -> set_content_type('application/json') -> set_output(json_encode($json));
	}
	
	public function createMenu()
	{
		$this->data['page_title'] = 'Create Menu';
		$this->form_validation->set_rules('nama_menu','Nama Menu','trim|required');
		$this->form_validation->set_rules('jenis_menu','Jenis Menu','required');
		$this->form_validation->set_rules('harga_menu','Harga Menu','trim|required');
		$this->form_validation->set_rules('keterangan_menu','Keterangan Menu','trim');
		$this->form_validation->set_rules('id_restaurant','ID Restaurant','required');
		
			if($this->form_validation->run()===TRUE)
			{
				
				$config['upload_path']          = './assets/images/menus/';
				$config['allowed_types']        =  'jpg|jpeg|JPG|gif|png|bmp';
				$config['overwrite']      		= TRUE;
				$config['max_size']             = 1024*2; //file in kb
				$config['encrypt_name'] 		= TRUE;
					
				$data = array(
					  'id_restaurant' => $this->input->post('id_restaurant'),
					  'nama' => $this->input->post('nama_menu'),
					  'jenis' => $this->input->post('jenis_menu'),
					  'harga' => $this->input->post('harga_menu'),
					  'keterangan' => $this->input->post('keterangan_menu')
					);
					
				$this->load->library('upload', $config);
				if ($this->upload->do_upload('menufile'))
				{
					$upload=$this->upload->data();
					$this->thumb($upload);
					$data['foto'] = base_url('assets/images/menus').'/'.$upload['raw_name'].$upload['file_ext'];
					$this->Menus_model->createMenu($data);
					$this->session->set_flashdata('message','Berhasil Mendaftarkan Restaurant');
					redirect('Restaurants/index/'.$this->input->post('id_restaurant'),'refresh');
				}else {
					$data['foto'] = base_url('assets/images/menus').'/default_menu.png';
					$this->Menus_model->createMenu($data);
					$this->session->set_flashdata('message','Berhasil Mendaftarkan Restaurant, Tidak ada foto terupload');
					redirect('Restaurants/index/'.$this->input->post('id_restaurant'),'refresh');
				}
			}
			else 
			{
				$this->session->set_flashdata('message','Gagal Menambah Menu');
				redirect('Restaurants/index/'.$this->input->post('id_restaurant'),'refresh');
			}
			
	}
	
	public function deleteMenu($id_menu = NULL, $id_restaurant=NULL)
	{
		if(is_null($id_menu))
		{
			$this->session->set_flashdata('message','There\'s no menu to delete');
		}else{
			$this->Menus_model->delete($id_menu);
			$this->session->set_flashdata('message','Menu Berhasil dihapus');
		}
		redirect('Restaurants/index/'.$id_restaurant,'refresh');
	}
	
	public function activateRestaurant($id = null)
	{
		$id = (int) $id;
		if (!empty($id))
		{
			$new_data = array('status' => 'buka');
			$this->Restaurants_model->updateRestaurant($id, $new_data);
			$this->session->set_flashdata('message', 'Restaurant Activated');
			redirect('Restaurants','refresh');
		}
	}
	
	public function deactivateRestaurant($id = null)
	{
		$id = (int) $id;
		if (!empty($id))
		{
			$new_data = array('status' => 'tutup');
			$this->Restaurants_model->updateRestaurant($id, $new_data);
			$this->session->set_flashdata('message', 'Restaurant De-activated');
			redirect('Restaurants','refresh');
		}else{show_404();}
	}
	
}