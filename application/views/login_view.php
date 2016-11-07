<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url('assets/lte/tb.v.336/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/lte/dist/css/AdminLTE.min.css')?>">
	<link rel="shortcut icon" href="<?php echo base_url('assets/brand/icon.ico')?>"/>
	<title> Login | GOOD-JEK</title>
</head>
<body>
	<div class="login-box ">
		<div class="header">
			<div class="login-logo">
				<img src="<?php echo base_url('assets/brand/logo-goodjek-max-contras-356.png')?>">
			</div><!-- /.login-logo -->
		</div>
		<div class="login-box-body">
			<strong style="color:red;"><?php echo $this->session->flashdata('message');?></strong>
			<?php echo form_open('login/x');?> 
			<div class="form-group has-feedback">  
				<?php echo form_input('username','',array('class'=>'form-control','placeholder' => 'Username','required'=>'required'));?>
				<span class="glyphicon glyphicon-user form-control-feedback"></span>
				<?php echo form_error('username', '<div style="color:red">','</div>');?>
			</div>
			<div class="form-group has-feedback">
				<?php echo form_password('password','',array('class'=>'form-control','placeholder' => 'Password','required'=>'required'));?>
				<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				<?php echo form_error('password', '<div style="color:red">','</div>');?>
			</div>
				<div class="checkbox">
					<label>
					  <?php echo form_checkbox('remember','1',TRUE);?> Remember me
					</label>
				</div>
			  <?php echo form_submit('submit', 'Log in', 'class="btn bg-black btn-block btn-flat"');?>
			<?php echo form_close();?>
			<br/>
			<a href="<?php echo base_url('admin/forgot_password');?>">Lupa password?</a>
		</div>
	</div>
</body>
</html>