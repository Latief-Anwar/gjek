<div class="row">
		<div class="col-md-3 no-padding no-print">
				<div class="box">
                <div class="box-header with-border">
					<div class="box-title">Daftarkan Driver</div>
                </div><!-- /.box-header -->
				<div class="box-body">
					<?php echo form_open_multipart('admin/createDriver',array('class'=>'form-horizontal'));?>
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('username','',array('class'=>'form-control','placeholder'=>'Username','required'=>'required'));?>
							<?php echo form_error('username','<small style="color:red">','</small>');?>
							</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('password','',array('class'=>'form-control','placeholder'=>'Password','required'=>'required'));?>
							<?php echo form_error('password','<small style="color:red">','</small>');?>
							</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('nama','',array('class'=>'form-control','placeholder'=>'Nama','required'=>'required'));?>
							<?php echo form_error('nama','<small style="color:red">','</small>');?>
							</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('hp','',array('class'=>'form-control','placeholder'=>'No HP','required'=>'required'));?>
							<?php echo form_error('hp','<small style="color:red">','</small>');?>
							</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('alamat','',array('class'=>'form-control','placeholder'=>'Alamat','required'=>'required'));?>
							<?php echo form_error('alamat','<small style="color:red">','</small>');?>
							</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('ktp','',array('class'=>'form-control','placeholder'=>'No KTP','required'=>'required'));?>
							<?php echo form_error('ktp','<small style="color:red">','</small>');?>
							</div>
						</div>
						
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<?php echo form_input('bn','',array('class'=>'form-control','placeholder'=>'No Plat','required'=>'required'));?>
							<?php echo form_error('bn','<small style="color:red">','</small>');?>
							</div>
						</div>
						<div class="form-group form-group-sm">
							<div class="col-sm-12">
							<small>
								<input type="file" name="userfile" required/>
								<p class="help-block">foto driver (max 2 mb) </p>
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
	 
			<div class="col-md-9" id="detail-form" style="display:none;"><!--style="display:none;"-->
				<div class="box">
					<div class="box-header with-border">
						<div class="user-block">
							<img name="foto" class="img-circle" src="" alt="User Image">
							<span name="nama" class="username"></span>
							<span name="bn" class="description"></span>
						</div>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
							<button class="btn btn-box-tool" id="hide-detail"><i class="fa fa-remove"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="col-md-4 no-padding no-print">
							<img name="foto" class="img-responsive" src="" alt="User Image">
							<div class="box-body no-padding">
							<br/><br/>
							<a href="javascript:void(0);" onclick="window.print();" class="btn bg-red btn-flat btn-sm"><i class="fa fa-print"></i> Print</a>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box-body box-profile no-padding ">
								<h3 class="profile-username text-center"><p name="bn"></p></h3>
								<ul class="list-group list-group-unbordered">
									<li class="list-group-item">Username<p name="username" class="pull-right"></p></li>
									<li class="list-group-item">Phone<p name="hp" class="pull-right"></p></li>
									<li class="list-group-item no-print">Account Status <p class="pull-right"><a href="" name="aktif"><span name="status"></span></a></p></li>
									<li class="list-group-item">No KTP<p name="ktp" class="pull-right"></p></li>
									<li class="list-group-item">
										<center>
											<i class="fa fa-map-marker margin-r-5 text-red" title="Alamat" data-toggle="tooltip"></i>
											<p class="text-muted" name="alamat" ></p>
										</center>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="box-body box-profile no-padding ">
								<h3 class="profile-username text-center"><i class="fa fa-area-chart"></i> This Month</h3>
								<ul class="list-group list-group-unbordered">
									<li class="list-group-item">Total Order(s) diambil<p name="total_orders" class="pull-right"></p></li>
									<li class="list-group-item">Total Jarak<p name="total_jarak" class="pull-right"></p></li>
									<li class="list-group-item">Total Hasil<p name="total_hasil" class="pull-right"></p></li>
									<li class="list-group-item">
										<b><small>Total yang harus dibayar <i class="fa fa-info-circle text-gray" title="Jumlah uang yang harus dibayarkan ke Good jek (20%)" 
											data-toggle="tooltip"></i>
											</small>
											<p name="harus_bayar" class="small pull-right"></p>
										</b>
									</li>
								</ul>
								<h3 class="profile-username text-center"><i class="fa fa-area-chart"></i> All Records</h3>
								<ul class="list-group list-group-unbordered">
									<li class="list-group-item">Total Order(s) diambil<p name="total_orders_history" class="pull-right"></p></li>
									<!--<li class="list-group-item">Total Jarak<p name="total_jarak_history" class="pull-right"></p></li>-->
									<li class="list-group-item">Total Hasil<p name="total_hasil_history" class="pull-right"></p></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			 </div>	 
            <div class="col-md-9 no-print">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Drivers Table</h3>
				  
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered" id="tabel-drivers">
                      <th style="width: 10px"><small>#</small></th>
                      <th><small>Nama</small></th>
                      <th><small>Hp</small></th>
                      <th><small>Alamat</small></th>
                      <th><small>Plat</small></th>
                      <th><small>KTP</small></th>
				<?php
				if(!empty($drivers)):
				$no=1;
				foreach($drivers as $c):
				?>
					<tr>
                      <td><small><?=$no++?></small></td>
                      <td>
						<a href="javascript:void(0);" class="clickDetail" title="lihat detail" data-toggle="tooltip" name="<?=$c->id//id_driver?>"><small><?=$c->nama?></small></a>
					  </td>
                      <td><small><?=$c->hp?></small></td>
                      <td><small><?=$c->alamat?></small></td>
                      <td><small><?=$c->bn?></small></td>
                      <td><small><?=$c->ktp?></small></td>
                    </tr>
				<?php
				endforeach;
				else: echo 'Tidak ada daftar';
				endif;
				?>
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
					<div class="pull-right">
						<?= $this->pagination->create_links();?>
					</div>
                </div>
              </div><!-- /.box -->
			 </div>
</div>