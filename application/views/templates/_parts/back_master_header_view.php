<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="stylesheet" href="<?php echo base_url('assets/lte/tb.v.336/css/bootstrap.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/lte/dist/css/AdminLTE.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/lte/dist/css/skins/_all-skins.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/lte/plugins/fontawesome/css/font-awesome.min.css')?>">
		<link rel="shortcut icon" href="<?php echo base_url('assets/brand/icon.ico')?>"/>
		<title><?php echo $page_title;?></title>
	</head>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  <header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="<?=base_url('admin')?>" class="navbar-brand"><b>Good</b>Jek</a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="<?php if ($this->uri->segment(2) == 'allOrders') {echo 'active';}?>"><a href="<?=base_url('admin/allOrders')?>">Orders </a></li>
            <li class="<?php if ($this->uri->segment(2) == 'allCustomers') {echo 'active';}?>"><a href="<?=base_url('admin/allCustomers')?>">Customers </a></li>
            <li class="<?php if ($this->uri->segment(2) == 'allDrivers') {echo 'active';}?>"><a href="<?=base_url('admin/allDrivers')?>">Drivers </a></li>
            <li class="<?php if ($this->uri->segment(1) == 'Restaurants') {echo 'active';}?>"><a href="<?=base_url('Restaurants')?>">Restaurants </a></li>
            <li class="<?php if ($this->uri->segment(1) == 'informasi') {echo 'active';}?>"><a href="<?=base_url('informasi')?>">Info </a></li>
          </ul>
        </div>
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="<?=base_url('assets/brand/latief.png')?>" class="user-image" alt="User Image">
                <span class="hidden-xs"><?= $this->session->userdata('username')?></span>
              </a>
              <ul class="dropdown-menu">
                <li class="user-header">
                  <img src="<?=base_url('assets/brand/latief.png')?>" class="img-circle" alt="User Image">
                  <p>
                    <?=$this->session->userdata('username')?>
                    <small><?=$this->session->userdata('group')?></small>
                  </p>
                </li>
                <li class="user-body">
                  <div class="row">
                    <div class="col-xs-4 text-center">
                      
                    </div>
                    <div class="col-xs-4 text-center">
                      
                    </div>
                    <div class="col-xs-4 text-center">
                      
                    </div>
                  </div>
                </li>
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="<?php 
								if($this->session->userdata('group') == 'Admin')
								{
									echo base_url('admin/profile');
								}else if ($this->session->userdata('group') == 'Driver')
								{
									echo base_url('driver/profile');
								}
							 ?>" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="<?=base_url('login/logout')?>" class="btn btn-default btn-flat">Logout</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>