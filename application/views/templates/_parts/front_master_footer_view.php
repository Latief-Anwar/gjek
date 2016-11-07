<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
</div><!-- /.container di front_master_view-->
</div><!-- ./content wrapper di front_master_view-->
</div><!-- ./wrapper di front_master_header_view-->

		<footer class="main-footer bg-black" style="margin-top:100px; border:0px;">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
					  <strong>
							<h3>Contact</h3>
							Jurusan Teknik Elektro FT UBB<br/>
					  </strong>
							Gedung Dharma Penelitian<br/>
							Kampus Terpadu Universitas Bangka Belitung<br/>
							Balunijuk, Kab. Bangka Provinsi Kep. Bangka Belitung<br/>
							Telepon (0717) 422145, 422965, Faksimile (0717) 421303<br/>
							<small style="color:silver;">Page rendered in <strong>{elapsed_time}</strong> seconds.</small>
					</div>
					<div class="col-md-4">
					  <strong>
							<h3>Informasi Jurusan</h3>
					  </strong>
							<a href="<?=prep_url('teubb.com/category/info-kerja-praktek')?>" target="_blank">Informasi Kerja Praktek</a><br/>
							<a href="<?=prep_url('teubb.com/category/info-jurusan')?>" target="_blank">Informasi Jurusan dan Perkuliahan</a><br/>
							<a href="<?=prep_url('teubb.com/category/info-kuliah-kerja-nyata')?>" target="_blank">Informasi Kuliah Kerja Nyata</a><br/>
							<a href="<?=prep_url('teubb.com')?>" target="_blank">www.teubb.com</a><br/>
							<a href="<?=prep_url('ubb.ac.id')?>" target="_blank">www.ubb.ac.id</a><br/>	
					</div>
					<div class="col-md-4">
						<strong>
							<h3>Social Network</h3>
					  </strong>
						<a href="<?=prep_url('https://web.facebook.com/groups/jteftubb/')?>" target="_blank">Facebook</a><br/>
						<a href="<?=prep_url('https://web.facebook.com/groups/hme.ubb/')?>" target="_blank">Himpunan Mahasiswa Teknik Elektro</a><br/>
						<a href="<?=base_url('masuk')?>">Login</a><br/>
						<a href="<?=base_url('masuk/auth/forgot_password')?>">Lupa Password?</a><br/>
						<a href="<?=base_url('bantuan')?>">Knowledge Base</a><br/>
					</div>
				</div>
				<br/>
			</div><!-- /.container -->
		</footer>
		<div class="container-fluid bg-black" style="height: 40px;"> 
				<div class="container">
					<h5>&copy; <?= date('Y', time()) ?> TE UBB</h5>
				</div>
		</div>


	<script src="<?php echo base_url('assets/templates/plugins/jQuery/jQuery-2.1.4.min.js');?>"></script>
	<script src="<?php echo base_url('assets/tb.v.336/js/bootstrap.min.js');?>"></script>
	<script src="<?php echo base_url('assets/templates/dist/js/app.min.js');?>"></script>
	<script src="<?php echo base_url('assets/templates/plugins/slimScroll/jquery.slimscroll.min.js');?>"></script>
<script>
$('#scr1').slimScroll({
    //width: '300px',
    height: '335px',
    //size: '10px',
    //position: 'left',
    //color: '#ffcc00',
    //alwaysVisible: true,
    //distance: '20px',
    //start: $('#child_image_element'),
    railVisible: true,
    //railColor: '#222',
    //railOpacity: 0.3,
    //wheelStep: 10,
    //allowPageScroll: false,
    //disableFadeOut: false
});
$('#scr2').slimScroll({
    height: '257px',
    railVisible: true
});
</script>
</body>
</html>