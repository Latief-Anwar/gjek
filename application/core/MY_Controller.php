<?php defined('BASEPATH') OR exit('No direct script access allowed');
 
class MY_Controller extends CI_Controller
	{
	
		protected $data = array();
			function __construct()
				{
					parent::__construct();		
				}
	 			
		protected function render($the_view = NULL, $template = 'master')
			{
				if($template == 'json' || $this->input->is_ajax_request())
				{
					header('Content-Type: application/json');
					echo json_encode($this->data);
				}
				else
				{
					$this->data['the_view_content'] = (is_null($the_view)) ? '' : $this->load->view($the_view,$this->data, TRUE);;
					$this->load->view('templates/'.$template.'_view', $this->data);
				}
			}
	}
 
class Admin_Controller extends MY_Controller
	{
		function __construct()
			{
				parent::__construct();				
				if (!$this->session->userdata('admin_logged_in'))
					{
						redirect(site_url('login'));
					}
					$this->data['page_title'] = 'GOOD-JEK Pangkalpinang';
			}
		protected function render($the_view = NULL, $template = 'back_master')
			{
				parent::render($the_view, $template);
			}
	}
	
class Driver_Controller extends MY_Controller
	{
		function __construct()
			{
				parent::__construct();
				if (!$this->session->userdata('driver_logged_in'))
					{
						redirect(site_url('login'));
					}
				$this->load->model(array('User_model'));
				$this->data['page_title'] = 'GOOD-JEK PANGKALPINANG - Driver';
				
			}
		protected function render($the_view = NULL, $template = 'back_master')
			{
				parent::render($the_view, $template);
			}
	}
 
class Front_Controller extends MY_Controller
	{
		function __construct()
			{
				parent::__construct();
					$this->data['page_title'] = 'Good-Jek Pangkalpinang';
					$this->data['description'] = 'Make People Relax';
					$this->data['og_image'] = base_url('assets/brand/og.png');
			}
		protected function render($the_view = NULL, $template = 'front_master')
			{
				parent::render($the_view, $template);
			}
	}