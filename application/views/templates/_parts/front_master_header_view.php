<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta http-equiv="Content-Language" content="id" />
		<title><?=$page_title;?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
		<meta name="title" content="<?=$page_title;?>"/>
		<meta name="description" content="<?=$description;?>" />
		<link rel="canonical" href="<?= current_url()?>" />
		<meta property="og:title" content="<?=$page_title;?>"/>
		<meta property="og:description" content= "<?=$description;?>"/>
		<meta property="og:type" content="website"/>
		<meta property="og:site_name" content="sita.teubb.com"/>
		<meta property="og:url" content="<?= current_url()?>"/>
		<meta property="og:image" content="<?= $og_image?>"/>
		
		<link rel="stylesheet" href="<?php echo base_url('assets/tb.v.336/css/bootstrap.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/templates/dist/css/AdminLTE.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/templates/dist/css/skins/_all-skins.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/templates/plugins/fontawesome/css/font-awesome.min.css')?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>">
		<link rel="shortcut icon" href="<?php echo base_url('assets/brand/icon.ico')?>"/>
	</head>
	
<body class="hold-transition <?php if(!empty($theme)){echo $theme;}else {echo 'skin-blue';}?> layout-top-nav">
	<div class="wrapper">
		<header class="main-header">
			<nav class="navbar navbar-static-top">
				<div class="container">
					<div class="navbar-header">
						<a href="<?php echo base_url();?>" class="navbar-brand"><b>SI-TA</b>&nbsp;TE&nbsp;UBB</a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="navbar-collapse">
						<ul class="nav navbar-nav">
							<li><a href="<?=base_url()?>">Home</a></li>
							<li class="dropdown <?php if ( ($this->uri->segment(1)=='sp')||($this->uri->segment(1)=='sh')||($this->uri->segment(1)=='spd') ){echo 'active';}?>">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Jadwal <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li><a href="<?=base_url('sp/jadwal-seminar-proposal-mulai-bulan-').str_replace(' ', '-', mb_substr(tgl_indo_timestamp(time()),3,50)).'.TE-UBB';?>">Jadwal Seminar Proposal</a></li>
									<li><a href="<?=base_url('sh/jadwal-seminar-hasil-mulai-bulan-').str_replace(' ', '-', mb_substr(tgl_indo_timestamp(time()),3,50)).'.TE-UBB';?>">Jadwal Seminar Hasil</a></li>
									<li><a href="<?=base_url('spd/jadwal-sidang-pendadaran-mulai-bulan-').str_replace(' ', '-', mb_substr(tgl_indo_timestamp(time()),3,50)).'.TE-UBB';?>">Jadwal Sidang Pendaftaran</a></li>
								</ul>
							</li>
							<li class="<?php if ($this->uri->rsegment(2)=='prosedur'){echo 'active';}?>"><a href="<?= base_url('prosedur')?>">Prosedur TA</a></li>
							<li class="<?php if ($this->uri->rsegment(2)=='persyaratan'){echo 'active';}?>"><a href="<?=base_url('persyaratan')?>">Persyaratan TA</a></li>
							<li class="<?php if ($this->uri->rsegment(2)=='bantuan'){echo 'active';}?>"><a href="<?=base_url('bantuan')?>">Knowledge Base</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li><a href="<?php echo base_url('masuk');?>">Login</a></li>
						</ul>
						<!--<form class="navbar-form navbar-left" role="search">
							<div class="form-group">
								<input type="text" class="form-control" id="navbar-search-input" placeholder="Search">
							</div>
						</form>-->
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container -->
			</nav>
      </header>