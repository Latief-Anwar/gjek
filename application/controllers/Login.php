<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
			$this->load->library(array('form_validation'));
			$this->load->helper(array('form','security'));
			$this->load->model(array('User_model'));
	}

	public function index()
	{
		if ($this->session->userdata('admin_logged_in'))
			{
					redirect(site_url('admin'));
			}
		/**
		if ($this->session->userdata('driver_logged_in'))
			{
					redirect(site_url('driver'));
			}
		*/
		$this->load->view('login_view');
	}
	
	public function x()
	{
		$username = $this->input->post('username');
		$notEncript = md5($this->input->post('password'));
		$password = substr($notEncript, 0, 30);
		
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		
		$admin = $this->User_model->loginAdmin($username,$password)->row();
		//$driver = $this->User_model->loginDriver($username,$password)->row();
		
		if($this->form_validation->run() === FALSE)
		{
			redirect(site_url('login'));
		}
		else
		{
			if(count($admin) > 0)
			{
				$data_admin= array(
									'id' => $admin->id,
									'username' => $admin->username,
									'group' => 'Admin',
									'admin_logged_in' => true
									);
				$this->session->set_userdata($data_admin);
				redirect(site_url('admin'));
			}
			/**
			else if(count($driver) > 0)
			{
				$data_driver= array(
									'id' => $driver->id,
									'username' => $driver->username,
									'group' => 'Driver',
									'driver_logged_in' => true
									);
				$this->session->set_userdata($data_driver);
				redirect(site_url('driver'));
			}
			*/
			else
			{
				$this->session->set_flashdata('message','Login Gagal.');
				redirect(site_url('login'));
			}
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
	
	
}