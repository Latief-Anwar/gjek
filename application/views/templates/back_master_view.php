<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<?php	
	$this->load->view('templates/_parts/back_master_header_view');
?>
	<div class="content-wrapper">
		<div class="container">
			<section class="content-header">
				<div class="row">
				<h2 class="page-title">
				  <?php echo $page_title; ?> 
				</h2>
				</div>
		   </section>
			
			<?php
			if($this->session->flashdata('message'))
			{
			?>
				<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div id="alert" class="alert alert-warning alert-dismissable">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<center><?php echo $this->session->flashdata('message'); ?></center>
					</div>
				</div>
				</div>
			<?php
			}
			?>
			<!-- Main content -->
			<section class="content">
				<?php echo $the_view_content; ?>
			</section>
			
<?php $this->load->view('templates/_parts/back_master_footer_view'); ?>