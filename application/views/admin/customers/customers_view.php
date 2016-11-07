<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="row">
			<?php
			if (!empty($customer)):
			?>
			<div class="col-md-12 no-padding">
				<div class="box">
					<div class="box-header with-border">
						<div class="user-block">
							<img name="foto" class="img-circle" src="<?=base_url('assets/brand/default-photo.jpg')?>" alt="User Image">
							<span class="username"><?=$customer->nama?></span>
							<span class="description"><?=$customer->email?></span>
						</div>
						<div class="box-tools pull-right">
							<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
						</div>
					</div>
					<div class="box-body">
						<div class="col-md-3 no-padding">
							<img name="foto" class="img-responsive" src="<?=base_url('assets/brand/default-photo.jpg')?>" alt="User Image">
						</div>
						<div class="col-md-3">
							<div class="box-body box-profile no-padding ">
								<h3 class="profile-username text-center"><?=$customer->nama?></p></h3>
								<ul class="list-group list-group-unbordered">
									<li class="list-group-item">Email<p class="pull-right"><?=$customer->email?></p></li>
									<li class="list-group-item">Phone<p class="pull-right"><?=$customer->hp?></p></li>
									<li class="list-group-item">Account Status 
										<p class="pull-right">
											<?=($customer->aktivasi) ? anchor('admin/deactivateCustomer/'.$customer->id, 'Active', 
											array('title' => 'Nonaktifkan','data-toggle'=>'tooltip')) 
											: anchor('admin/activateCustomer/'. $customer->id, 'Non-active', 
											array('title' => 'Aktifkan', 'data-toggle'=>'tooltip'))?>
										</p>
									</li>
									<li class="list-group-item">
										<center>
											<i class="fa fa-map-marker margin-r-5 text-red" title="Alamat" data-toggle="tooltip"></i>
											<p class="text-muted" ><?=$customer->alamat?></p>
										</center>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-md-6">
							<div class="box-body box-profile no-padding ">
								<h3 class="profile-username text-center"><i class="fa fa-area-chart"></i> All Statistics</h3>
								<ul class="list-group list-group-unbordered">
									<li class="list-group-item"><i class="fa fa-motorcycle text-blue"></i> Good-Jek
										<p class="pull-right">
										<?=$GoodJek->total_orders?> kali order, biaya Rp. <?= number_format($GoodJek->total_biaya ,0,',','.');?>,-
										</p>
									</li>
									<li class="list-group-item"><i class="fa fa-cutlery text-green margin-r-5"></i> Good-food
										<p class="pull-right">
										<?=$GoodFood->total_orders?> kali order, biaya Rp. <?= number_format($GoodFood->total_biaya ,0,',','.');?>,-
										</p>
									</li>
									<li class="list-group-item"><i class="fa fa-shopping-cart text-orange margin-r-5"></i> Good-mart
										<p class="pull-right">
										<?=$GoodMart->total_orders?> kali order, biaya Rp. <?= number_format($GoodMart->total_biaya ,0,',','.');?>,-
										</p>
									</li>
									<br/>
									<!--<li class="list-group-item">Total Jarak<p class="pull-right"><?php //echo $TotalOrders->total_jarak?> km</p></li>-->
									<li class="list-group-item">Total Order(s)<p class="pull-right"><?=$TotalOrders->total_orders?></p></li>
									<li class="list-group-item">Total Belanja<p class="pull-right"><b>Rp. <?= number_format($TotalOrders->total_biaya ,0,',','.');?>,-</b></p></li>
								</ul>
							</div>
						</div>
					</div>
					
					
				</div>
			 </div>
			 <?php endif;?>
			 
			 
            <div class="col-md-12 no-padding">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">All Customers Table</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered" id="tabel-customers">
                    <thead>
					  <tr>
                      <th style="width:10px;">#id</th>
                      <th><small><i class="fa fa-user margin-r-5 text-red" title="Nama Pelanggan" data-toggle="tooltip"></i></small>Nama</th>
                      <th><small><i class="fa fa-at margin-r-5 text-red" title="Email Pelanggan" data-toggle="tooltip"></i> Email</small></th>
                      <th style="width:70px;"><small><i class="fa fa-tablet margin-r-5 text-red" title="No HP Pelanggan" data-toggle="tooltip"></i> Hp</small></th>
                      <th><small><i class="fa fa-map-marker margin-r-5 text-red" title="Alamat" data-toggle="tooltip"></i> Alamat</small></th>
                      <th style="width:60px;"><small><i class="fa fa-question-circle margin-r-5 text-red" title="Status akun" data-toggle="tooltip"></i> Status</small></th>
					  </tr>
                    </thead>
					<tbody style="font-size:12px">
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			 </div>
</div>