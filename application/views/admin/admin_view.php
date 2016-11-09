<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<meta http-equiv="refresh" content="300">
<div class="row">
	<div class="col-md-12 no-padding">
		<div class="box box-widget">
			<div class="box-header with-border">
				<center><div class="box-title"><h3 class="text-navy"><i class="fa fa-area-chart"></i> Statistik Bulan ini</h3></div></center>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				</div>
			</div>
			<div class="box-body">
				<!--Goodjek-->
				<div class="col-md-4">
					<div class="box-body box-profile no-padding ">
					<h3 class="profile-username text-center"><i class="fa fa-motorcycle text-blue"></i> Good Ride</h3>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">Total Order(s)
								<p class="pull-right">
									<?=$GoodJek->total_orders?>
								</p>									
							</li>
							<li class="list-group-item">Total Jarak
								<p class="pull-right">
									<?=$GoodJek->total_jarak?> km
								</p>
							</li>
							<li class="list-group-item">Total Pendapatan Drivers
								<p class="pull-right">
									Rp. <?= number_format($GoodJek->total_pendapatan ,0,',','.');?>,-
								</p>
							</li>
							<li class="list-group-item">Total Pendapatan (20%)
								<p class="pull-right">
									Rp. <?= number_format($GoodJek->total_pendapatan*0.2 ,0,',','.');?>,-
								</p>
							</li>
						</ul>
					</div>
				</div>
				<!--Good-food-->
				<div class="col-md-4">
					<div class="box-body box-profile no-padding ">
					<h3 class="profile-username text-center"><i class="fa fa-cutlery text-green"></i> Good Food</h3>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">Total Order(s)
								<p class="pull-right">
									<?=$GoodFood->total_orders?>
								</p>									
							</li>
							<li class="list-group-item">Total Jarak
								<p class="pull-right">
									<?=$GoodFood->total_jarak?> km
								</p>
							</li>
							<li class="list-group-item">Total Pendapatan Drivers
								<p class="pull-right">
									Rp. <?= number_format($GoodFood->total_pendapatan ,0,',','.');?>,-
								</p>
							</li>
							<li class="list-group-item">Total Pendapatan (20%)
								<p class="pull-right">
									Rp. <?= number_format($GoodFood->total_pendapatan*0.2 ,0,',','.');?>,-
								</p>
							</li>
						</ul>
					</div>
				</div>
				<!--Good-mart-->
				<div class="col-md-4">
					<div class="box-body box-profile no-padding ">
					<h3 class="profile-username text-center"><i class="fa fa-shopping-cart text-orange"></i> Good Pick</h3>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">Total Order(s)
								<p class="pull-right">
									<?=$GoodMart->total_orders?>
								</p>									
							</li>
							<li class="list-group-item">Total Jarak
								<p class="pull-right">
									<?=$GoodMart->total_jarak?> km
								</p>
							</li>
							<li class="list-group-item">Total Pendapatan Drivers
								<p class="pull-right">
									Rp. <?= number_format($GoodMart->total_pendapatan ,0,',','.');?>,-
								</p>
							</li>
							<li class="list-group-item">Total Pendapatan (20%)
								<p class="pull-right">
									Rp. <?= number_format($GoodMart->total_pendapatan*0.2 ,0,',','.');?>,-
								</p>
							</li>
						</ul>
					</div>
				</div>
				<!--TOTAL-->
				<div class="col-md-4">
					<div class="box-body no-padding ">
						<small>
						<ul class="no-padding">
							<li class="list-unstyled">Total Order(s)
								<span class="pull-right">
									<?=$TotalOrders->total_orders?>
								</span>									
							</li>
							<li class="list-unstyled">Total Jarak
								<span class="pull-right">
									<?=$TotalOrders->total_jarak?> km
								</span>
							</li>
							<li class="list-unstyled">Total Pendapatan Drivers
								<span class="pull-right">
									Rp. <?= number_format($TotalOrders->total_pendapatan ,0,',','.');?>
								</span>
							</li>
							<li class="list-unstyled">Total Pendapatan (20%)
								<span class="pull-right">
									<strong>Rp. <?= number_format($TotalOrders->total_pendapatan*0.2 ,0,',','.');?></strong>
								</span>
							</li>
						</ul>
						</small>
					</div>
				</div>
				<div class="col-md-4 col-md-push-4 no-print">
					<div class="box-body no-padding pull-right">
						<br/><br/>
						<a href="javascript:void(0);" onclick="window.print();" class="btn bg-red btn-flat btn-sm"><i class="fa fa-print"></i> Print</a>
					</div>
				</div>
			</div>
		</div>		 
	</div>
	
	
	
	<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	<div class="col-md-12 no-padding">
		<div class="box box-widget collapsed-box">
			<div class="box-header with-border">
				<center><div class="box-title"><h3 class="text-olive"><i class="fa fa-area-chart"></i> Statistik Keseluruhan</h3></div></center>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
				</div>
			</div>
			<div class="box-body">
				<!--GoodJekHistory-->
				<div class="col-md-4">
					<div class="box-body box-profile no-padding ">
					<h3 class="profile-username text-center"><i class="fa fa-motorcycle text-blue"></i> Good Ride</h3>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">Total Order(s)
								<p class="pull-right">
									<?=$GoodJekHistory->total_orders?>
								</p>									
							</li>
							<li class="list-group-item">Total Jarak
								<p class="pull-right">
									<?=$GoodJekHistory->total_jarak?> km
								</p>
							</li>
							<li class="list-group-item">Total Pendapatan Drivers
								<p class="pull-right">
									Rp. <?= number_format($GoodJekHistory->total_pendapatan ,0,',','.');?>,-
								</p>
							</li>
							<li class="list-group-item">Total Pendapatan (20%)
								<p class="pull-right">
									Rp. <?= number_format($GoodJekHistory->total_pendapatan*0.2 ,0,',','.');?>,-
								</p>
							</li>
						</ul>
					</div>
				</div>
				<!--GoodFoodHistory-->
				<div class="col-md-4">
					<div class="box-body box-profile no-padding ">
					<h3 class="profile-username text-center"><i class="fa fa-cutlery text-green"></i> Good Food</h3>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">Total Order(s)
								<p class="pull-right">
									<?=$GoodFoodHistory->total_orders?>
								</p>									
							</li>
							<li class="list-group-item">Total Jarak
								<p class="pull-right">
									<?=$GoodFoodHistory->total_jarak?> km
								</p>
							</li>
							<li class="list-group-item">Total Pendapatan Drivers
								<p class="pull-right">
									Rp. <?= number_format($GoodFoodHistory->total_pendapatan ,0,',','.');?>,-
								</p>
							</li>
							<li class="list-group-item">Total Pendapatan (20%)
								<p class="pull-right">
									Rp. <?= number_format($GoodFoodHistory->total_pendapatan*0.2 ,0,',','.');?>,-
								</p>
							</li>
						</ul>
					</div>
				</div>
				<!--GoodMartHistory-->
				<div class="col-md-4">
					<div class="box-body box-profile no-padding ">
					<h3 class="profile-username text-center"><i class="fa fa-shopping-cart text-orange"></i> Good Pick</h3>
						<ul class="list-group list-group-unbordered">
							<li class="list-group-item">Total Order(s)
								<p class="pull-right">
									<?=$GoodMartHistory->total_orders?>
								</p>									
							</li>
							<li class="list-group-item">Total Jarak
								<p class="pull-right">
									<?=$GoodMartHistory->total_jarak?> km
								</p>
							</li>
							<li class="list-group-item">Total Pendapatan Drivers
								<p class="pull-right">
									Rp. <?= number_format($GoodMartHistory->total_pendapatan ,0,',','.');?>,-
								</p>
							</li>
							<li class="list-group-item">Total Pendapatan (20%)
								<p class="pull-right">
									Rp. <?= number_format($GoodMartHistory->total_pendapatan*0.2 ,0,',','.');?>,-
								</p>
							</li>
						</ul>
					</div>
				</div>
				<!--TotalOrdersHistory-->
				<div class="col-md-4">
					<div class="box-body no-padding ">
						<small>
						<ul class="no-padding">
							<li class="list-unstyled">Total Order(s)
								<span class="pull-right">
									<?=$TotalOrdersHistory->total_orders?>
								</span>									
							</li>
							<li class="list-unstyled">Total Jarak
								<span class="pull-right">
									<?=$TotalOrdersHistory->total_jarak?> km
								</span>
							</li>
							<li class="list-unstyled">Total Pendapatan Drivers
								<span class="pull-right">
									Rp. <?= number_format($TotalOrdersHistory->total_pendapatan ,0,',','.');?>
								</span>
							</li>
							<li class="list-unstyled">Total Pendapatan (20%)
								<span class="pull-right">
									<strong>Rp. <?= number_format($TotalOrdersHistory->total_pendapatan*0.2 ,0,',','.');?></strong>
								</span>
							</li>
						</ul>
						</small>
					</div>
				</div>
				<div class="col-md-4 col-md-push-4 no-print">
					<div class="box-body no-padding pull-right">
						<br/><br/>
						<a href="javascript:void(0);" onclick="window.print();" class="btn bg-red btn-flat btn-sm"><i class="fa fa-print"></i> Print</a>
					</div>
				</div>
			</div>
		</div>			 
	</div>
	
	 <div class="col-md-12 no-padding">
		<div class="box collapsed-box">
			<div class="box-header with-border">
				<h3 class="box-title"><i class="fa fa-comments-o"></i> Saran saran</h3>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
				</div>
			</div>
			<div class="box-body">
				<table class="table table-bordered" id="tabel-saran">
					<thead>
						<tr>
						<th style="width:10px;">#id</th>
						<th style="width:10px;"></th>
						<th style="width:100px;"><i class="fa fa-user margin-r-5 text-red" title="Nama Pelanggan" data-toggle="tooltip"></i>Nama</th>
						<th><i class="fa fa-comments-o margin-r-5 text-red" title="Saran" data-toggle="tooltip"></i> Saran</th>
						</tr>
                    </thead>
					<tbody style="font-size:12px">
                    </tbody>
				</table>
			</div>
		</div>
	</div>
</div>