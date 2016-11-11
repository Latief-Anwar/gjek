<div class="row">
		<div class="col-md-2 no-padding no-print">
				<div class="box">
                <div class="box-header with-border">
					<div class="box-title">Tambah Restaurants</div>
                </div><!-- /.box-header -->
				<div class="box-body">
					<?php echo form_open_multipart('Restaurants/createRestaurant',array('class'=>'form-horizontal'));?>
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('nama','',array('class'=>'form-control','placeholder'=>'Nama Restaurant','required'=>'required'));?>
							<?php echo form_error('nama','<small style="color:red">','</small>');?>
							</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('nama_pemilik','',array('class'=>'form-control','placeholder'=>'Atas Nama (optional)'));?>
							<?php echo form_error('nama_pemilik','<small style="color:red">','</small>');?>
							</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('alamat','',array('class'=>'form-control','placeholder'=>'Alamat Restaurant','required'=>'required'));?>
							<?php echo form_error('alamat','<small style="color:red">','</small>');?>
							</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('email','',array('class'=>'form-control','placeholder'=>'Email (optional)'));?>
							<?php echo form_error('email','<small style="color:red">','</small>');?>
							</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('hp','',array('class'=>'form-control','placeholder'=>'Telp/HP','required'=>'required'));?>
							<?php echo form_error('hp','<small style="color:red">','</small>');?>
							</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
								<select class="form-control" name="jenis" required="required">
									<option value=""></option>
									<option value="Makanan">Makanan</option>
									<option value="Minuman">Minuman</option>
									<option value="Makanan & Minuman">Makanan & Minuman</option>
								</select>
								<p class="help-block pull-right"><small>Jenis Restaurant</small></p>
								<?php echo form_error('jenis','<small style="color:red">','</small>');?>
							</div>
						</div>
					
						<div class="form-group form-group-sm">
								<div class="col-sm-6">
									<div class="bootstrap-timepicker">
										<div class="input-group">
											<input type="text" class="form-control" id="time1" name="jam_buka" placeholder="Jam Buka" required="required">
											<?php echo form_error('jam_buka','<small style="color:red">','</small>');?>
										</div>
									</div>
								</div>
								<div class="col-sm-2">
								</div>
								<div class="col-sm-6">
									<div class="bootstrap-timepicker">
										<div class="input-group">
											<input type="text" class="form-control" id="time2" name="jam_tutup" placeholder="Tutup" required="required">
											<?php echo form_error('jam_tutup','<small style="color:red">','</small>');?>
										</div>
									</div>
								</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
								<div class="checkbox">
								<b class="text-success">Hari Buka:</b><br/>
									<label><input type="checkbox" name="hari_buka[]" value="Senin"> Senin</label>,
									<label><input type="checkbox" name="hari_buka[]" value="Selasa"> Selasa</label>,
									<label><input type="checkbox" name="hari_buka[]" value="Rabu"> Rabu</label>,
									<label><input type="checkbox" name="hari_buka[]" value="Kamis"> Kamis</label>,
									<label><input type="checkbox" name="hari_buka[]" value="Jumat"> Jumat</label>,
									<label><input type="checkbox" name="hari_buka[]" value="Sabtu"> Sabtu</label>,
									<label><input type="checkbox" name="hari_buka[]" value="Minggu"> Minggu</label>
								</div>
								<?php echo form_error('hari_buka[]','<small style="color:red">','</small>');?>
							</div>
						</div>
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
								<div class="checkbox">
								<b class="text-danger">Hari Libur/Tutup:</b><br/>
									<label><input type="checkbox" name="hari_libur[]" value="Senin"> Senin</label>,
									<label><input type="checkbox" name="hari_libur[]" value="Selasa"> Selasa</label>,
									<label><input type="checkbox" name="hari_libur[]" value="Rabu"> Rabu</label>,
									<label><input type="checkbox" name="hari_libur[]" value="Kamis"> Kamis</label>,
									<label><input type="checkbox" name="hari_libur[]" value="Jumat"> Jumat</label>,
									<label><input type="checkbox" name="hari_libur[]" value="Sabtu"> Sabtu</label>,
									<label><input type="checkbox" name="hari_libur[]" value="Minggu"> Minggu</label>
								</div>
							</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('keterangan','',array('class'=>'form-control','placeholder'=>'Keterangan (optional)'));?>
							<?php echo form_error('keterangan','<small style="color:red">','</small>');?>
							</div>
						</div>
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
								<?php echo form_input('latitude','',array('class'=>'form-control','placeholder'=>'Latitude','required'=>'required'));?>
								<?php echo form_error('latitude','<small style="color:red">','</small>');?>
							</div>
						</div>
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('longitude','',array('class'=>'form-control','placeholder'=>'Longitude','required'=>'required'));?>
							<?php echo form_error('longitude','<small style="color:red">','</small>');?>
							</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<small>
								<input type="file" name="userfile" required/>
								<p class="help-block">foto restaurant (max 2 mb) </p>
							</small>
							</div>
						</div>
						<div class="box-footer clearfix">
							<div class="pull-right">
							<?php echo form_submit('submit', 'Daftarkan', 'class="btn btn-flat btn-primary btn-sm"');?>
							</div>
						</div>
						<?php echo form_close();?>
				</div><!--./box body-->
		</div><!--./box-->
	 </div>
	 
			<?php
			if (!empty($restaurant)):
			?>
			<div class="col-md-10">
				<div class="box">
					<div class="box-header with-border">
						<div class="user-block">
							<img name="foto" class="img-circle" src="<?=$restaurant->foto?>" alt="User Image">
							<span class="username"><?=$restaurant->nama?></span>
							<span class="description"><?=$restaurant->alamat?></span>
						</div>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="col-md-3">
							<h3 class="profile-username text-center"> Identitas</h3>
							<div class="box-body box-profile no-padding">
								<ul class="list-group list-group-unbordered text-sm">
									<?php if(!empty($restaurant->nama_pemilik)):?>
										<li class="list-group-item">Atas Nama<p class="pull-right"><?=$restaurant->nama_pemilik?></p></li>
									<?php endif;?>
									<?php if(!empty($restaurant->email)):?>
										<li class="list-group-item">Email<p class="pull-right"><?=$restaurant->email?></p></li>
									<?php endif;?>
									<li class="list-group-item">Telp/Hp<p class="pull-right"><?=$restaurant->hp?></p></li>
									<li class="list-group-item">Tersedia<p class="pull-right"><?=$restaurant->jenis?></p></li>
									<?php if(!empty($restaurant->hari_buka)):?>
									<li class="list-group-item">
										<center>
											<i class="fa fa-clock-o margin-r-5 text-green" title="Hari Buka" data-toggle="tooltip"></i>
											<p class="text-muted" style="font-size:10px;"><?=$restaurant->hari_buka?></p>
										</center>
									</li>
									<?php endif;?>
									<li class="list-group-item">Jam Operasional<p class="pull-right"><?=$restaurant->jam_buka.'-'.$restaurant->jam_tutup.' WIB'?></p></li>
									<?php if(!empty($restaurant->keterangan)):?>
										<li class="list-group-item"><?=$restaurant->keterangan?></li>
									<?php endif;?>
									
								</ul>
							</div>
						</div>
						<div class="col-md-3 no-padding">
							<div class="box-body box-profile no-padding">
								<h3 class="profile-username text-center"><i class="fa fa-cutlery text-green"></i></h3>
								<ul class="products-list product-list-in-box text-sm">
									<?php if(!empty($makanan)):?>
									<?php foreach($makanan as $food):?>
										<li class="item no-padding">
											<div class="product-img">
												<img src="<?=$food->foto?>" alt="Product Image">
											</div>
											<div class="product-info">
												<?=$food->nama?>
												<span class="product-description">
													<a href="<?=base_url('Restaurants/deleteMenu/').'/'.$food->id.'/'.$restaurant->id?>">
														<i class="fa fa-trash-o text-red pull-right" title="hapus?" data-toggle="tooltip"></i>
													</a>
													<span class="label label-danger">Rp.<?= number_format($food->harga ,0,',','.');?>,-</span>
													<span class="product-description"><?=$food->keterangan?></span>
												</span>
											</div>
										</li>
									<?php endforeach;?>
									<?php else:?>
										<p class="text-center text-red">Tidak ada daftar makanan</p>
									<?php endif;?>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body box-profile no-padding">
								<h3 class="profile-username text-center"><i class="fa  fa-coffee text-purple"></i></h3>
								<ul class="products-list product-list-in-box text-sm">
									<?php if(!empty($minuman)):?>
									<?php foreach($minuman as $drink):?>
										<li class="item no-padding">
											<div class="product-img">
												<img src="<?=$drink->foto?>" alt="Product Image">
											</div>
											<div class="product-info">
												<?=$drink->nama?>
												<span class="product-description">
													<a href="<?=base_url('Restaurants/deleteMenu/').'/'.$drink->id.'/'.$restaurant->id?>">
														<i class="fa fa-trash-o text-red pull-right" title="hapus?" data-toggle="tooltip"></i>
													</a>
													<span class="label label-danger">Rp.<?= number_format($drink->harga ,0,',','.');?>,-</span>
													<span class="product-description"><?=$drink->keterangan?></span>
												</span>
											</div>
										</li>
									<?php endforeach;?>
									<?php else:?>
										<p class="text-center text-red">Tidak ada daftar minuman</p>
									<?php endif;?>
								</ul>
							</div>
						</div>
						<div class="col-md-3">
							<div class="box-body box-profile no-padding ">
								<h3 class="profile-username text-center">Tambah Menu</h3>
								<?php echo form_open_multipart('Restaurants/createMenu',array('class'=>'form-horizontal'));?>
									<div class="form-group form-group-sm">
										<div class="col-sm-12">
										<?php echo form_input('nama_menu','',array('class'=>'form-control','placeholder'=>'Nama Menu','required'=>'required'));?>
										<?php echo form_error('nama_menu','<small style="color:red">','</small>');?>
										</div>
									</div>
									<div class="form-group form-group-sm">
										<div class="col-sm-12">
											<select class="form-control" name="jenis_menu" required="required">
												<option value=""></option>
												<option value="Makanan">Makanan</option>
												<option value="Minuman">Minuman</option>
												<option value="Makanan">Makanan dan Minuman</option>
											</select>
											<?php echo form_error('jenis','<small style="color:red">','</small>');?>
										</div>
									</div>
									<div class="form-group form-group-sm">
										<div class="col-sm-12">
										<?php echo form_input('harga_menu','',array('class'=>'form-control','placeholder'=>'Harga (format: 10000)','required'=>'required'));?>
										<?php echo form_error('harga_menu','<small style="color:red">','</small>');?>
										</div>
									</div>
									<div class="form-group form-group-sm">
										<div class="col-sm-12">
										<?php echo form_input('keterangan_menu','',array('class'=>'form-control','placeholder'=>'Keterangan'));?>
										<?php echo form_error('keterangan_menu','<small style="color:red">','</small>');?>
										</div>
									</div>
									<div class="form-group form-group-sm">
										<div class="col-sm-12">
										<small>
											<input type="file" name="menufile" />
											<p class="help-block">foto menu (max 2 mb) </p>
										</small>
										</div>
									</div>
									<?= form_hidden('id_restaurant',$restaurant->id,'');?>
									<div class="form-group form-group-sm">
										<div class="col-sm-12">
											<div class="pull-right">
											<?php echo form_submit('submit', 'OK', 'class="btn btn-flat btn-primary btn-sm"');?>
											</div>
										</div>
									</div>
								<?php echo form_close();?>
							</div>
						</div>
					</div>
				</div>
			 </div>
			 <?php endif;?>
			 
            <div class="col-md-10 no-print">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Restaurants Table</h3>
				  
                </div><!-- /.box-header -->
                <div class="box-body">
				   <table class="table table-bordered" id="tabel-restaurants">
                    <thead>
					  <tr>
                      <th></th><!-- id ordering -->
                      <th></th><!-- jam tutup -->
                      <th></th><!-- nama pemiliik -->
                      <th><small>#</small></th>
                      <th><small><i class="fa fa-user margin-r-5 text-red" title="Nama Restaurant" data-toggle="tooltip"></i> Nama</small></th>
                      <th><small><i class="fa fa-map-marker margin-r-5 text-red" title="Alamat" data-toggle="tooltip"></i> Alamat</small></th>
                      <th><small><i class="fa fa-phone margin-r-5 text-red" title="Telp/HP" data-toggle="tooltip"></i> Telp</small></th>
                      <th><small><i class="fa fa-clock-o margin-r-5 text-red" title="Waktu/Jam Buka-Tutup" data-toggle="tooltip"></i> Operasional</small></th>
                      <th><small><i class="fa fa-clock-o margin-r-5 text-red" title="Hari Libur" data-toggle="tooltip"></i> Libur</small></th>
                      <th><small><i class="fa fa-question-circle margin-r-5 text-red" title="Status apakah sedang buka/tutup" data-toggle="tooltip"></i></small></th>
					  </tr>
                    </thead>
					<tbody style="font-size:12px">
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			 </div>
</div>