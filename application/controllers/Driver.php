<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Driver extends Driver_Controller {

	public function index()
	{
		$this->render('driver/driver_view');
	}
	
	public function profile()
	{
		$this->load->library(array('form_validation'));
		
		$this->data['page_title'] = 'Profile';
		$id = $this->session->userdata('id');
		$this->data['user'] = $this->User_model->selectDriverById($id)->row();
		
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
			  'password' => substr(md5($this->input->post('password')), 0, 30),
			);
			$this->User_model->updateDriver($id, $new_data);
			$this->session->set_flashdata('message', 'Berhasil Ganti Password');
			redirect('driver/profile','refresh');
		}
	}
	
	
}
