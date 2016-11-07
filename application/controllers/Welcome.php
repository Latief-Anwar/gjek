<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Front_Controller{

	public function index()
	{
		$this->load->view('front/welcome_message');
	}
	
	public function privacy()
	{
		$this->load->view('front/privacy');
	}
	
	public function GoodJek()
	{
		$this->load->view('front/good_jek');
	}
	
	public function GoodFood()
	{
		$this->load->view('front/good_food');
	}
	
	public function GoodMart()
	{
		$this->load->view('front/good_mart');
	}
	
}
