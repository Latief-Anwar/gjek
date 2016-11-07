<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<?php	
		$this->load->view('templates/_parts/front_master_header_view');
?>
		<div class="content-wrapper"><!--dependent front_master_footer_view-->
			<div class="container">
				<section class="content-header">
					<h1 class="page-header" style="padding-top:50px;"></h1>
				</section>
				<section class="content"><!--style="padding-top:15px;"-->
					<?php echo $the_view_content; ?>
				</section>

<?php
		$this->load->view('templates/_parts/front_master_footer_view');
?>
