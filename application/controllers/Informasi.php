<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class Informasi extends Admin_Controller
	{
		function __construct()
			{
				parent::__construct();
				
				$this->load->library(array('form_validation'));
				$this->load->helper(array('form','file','fungsidate_helper'));
				$this->load->model(array('Info_model'));
			}
	 
		public function index()
			{
				$this->data['page_title'] = 'Kelola Informasi';
				$this->data['informasi'] = $this->Info_model->select_all()->result();
				$this->render('admin/info/tulis_pengumuman_view');
				$this->load->view('admin/info/ajax_informasi_view');
			}
			
		public function select_ajax($id_informasi = NULL)
			{
				if($id_informasi != NULL)
				{
				$data = $this->Info_model->select_by_id($id_informasi)->row();
				echo json_encode($data);
				}else{show_404();}
			}
	 		
		public function tambah()
			{
				$this->data['page_title'] = 'Tulis Pengumuman';
				$this->form_validation->set_rules('judul_informasi','Judul Pengumuman','trim|required');
				$this->form_validation->set_rules('isi_informasi','Isi Pengumuman','trim|required');
				
				if($this->form_validation->run()=== FALSE)
				{
				$this->index();
				}
				else
				{
					$config['upload_path']          = './assets/images/informasi/';
					$config['allowed_types']        =  'jpg|jpeg|JPG|gif|png|bmp';
					$config['overwrite']      		= TRUE;
					$config['max_size']             = 1024*2; //file in kb
					$config['encrypt_name'] 		= TRUE;
					
					$this->load->library('upload', $config);
					if (!$this->upload->do_upload())
					{
						$data = array(
								'judul'	=> $this->input->post('judul_informasi'),
								'isi'		=> $this->input->post('isi_informasi'),
								'penulis'			=> NULL,
								'created_at'		=> time(),
								'foto'				=> NULL,
							);
						$this->Info_model->create($data);
						$this->session->set_flashdata('message', 'Informasi Berhasil Ditambah, Tidak ada foto terupload.');
						redirect('informasi','refresh');
					}
					else
					{
						$upload=$this->upload->data();
						$this->thumb($upload);
						$data = array(
								'judul'	=> $this->input->post('judul_informasi'),
								'isi'		=> $this->input->post('isi_informasi'),
								'penulis'			=> NULL,
								'created_at'		=> time(),
								'foto'				=> $upload['raw_name'].$upload['file_ext'],
							);
						$this->Info_model->create($data);
						$this->session->set_flashdata('message', 'Informasi Berhasil Ditambah!');
						redirect('informasi','refresh');
					}
				}
			}
		protected function thumb($upload)
			{
			$config['image_library'] = 'gd2';
			$config['source_image'] = $upload['full_path'];
			$config['create_thumb'] = FALSE;
			$config['maintain_ratio'] = false;
			//$config['width'] = 280;
			//$config['height'] = 280;
			
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			}
 
		public function update()
			{
				$this->form_validation->set_rules('judul_informasi_edit','Judul Pengumuman','trim|required');
				$this->form_validation->set_rules('isi_informasi_edit','Isi Pengumuman','trim');
				$this->form_validation->set_rules('id_informasi_edit','Gagal','trim|required');
				if($this->form_validation->run()=== FALSE)
				{
				$this->index();
				}
				else
				{
					$config['upload_path']          = './assets/images/informasi/';
					$config['allowed_types']        =  'jpg|jpeg|JPG|gif|png|bmp';
					$config['overwrite']      		= TRUE;
					$config['max_size']             = 1024*2; //file in kb
					$config['encrypt_name'] 		= TRUE;
					
					$this->load->library('upload', $config);
					$id_informasi = $this->input->post('id_informasi_edit');
					if (!$this->upload->do_upload('userfile_edit'))
					{
						$data = array(
								'judul'	=> $this->input->post('judul_informasi_edit'),
								'isi'		=> $this->input->post('isi_informasi_edit'),
								'updated_at'		=> time()
							);
						$this->Info_model->update($id_informasi, $data);
						$this->session->set_flashdata('message', 'Pengumuman Berhasil Diubah, Tidak ada gambar terupload.');
						redirect('informasi','refresh');
					}
					else
					{
						$upload=$this->upload->data();
						$this->thumb($upload);
						$data = array(
								'judul'	=> $this->input->post('judul_informasi_edit'),
								'isi'		=> $this->input->post('isi_informasi_edit'),
								'updated_at'		=> time(),
								'foto'				=> $upload['raw_name'].$upload['file_ext']
							);
						$this->Info_model->update($id_informasi, $data);
						$this->session->set_flashdata('message', 'Informasi Berhasil Diubah!');
						redirect('informasi','refresh');
					}
				}
			}
 
		public function delete($id_informasi = NULL)
			{
				if(is_null($id_informasi))
				  {
					$this->session->set_flashdata('message','There\'s no data to delete');
				  }
				  else
				  {
					$this->Info_model->delete($id_informasi);
					$this->session->set_flashdata('message','Informasi Berhasil Dihapus!');
				  }
				  redirect('informasi','refresh');
			}
		
}