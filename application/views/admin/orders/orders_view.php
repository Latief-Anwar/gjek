<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<div class="row">
            <div class="col-md-12 no-padding">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Orders History Table</h3>

                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered" id="tabel-orders">
                    <thead>
					  <tr>
                      <th></th><!-- oh.good visible false in ajax-->
                      <th></th><!-- oh.username visible false -->
                      <th></th>
                      <th><small><i class="fa fa-user margin-r-5 text-red" title="Nama Pemesan" data-toggle="tooltip"></i></small></th>
                      <th><small><i class="fa fa-tablet margin-r-5 text-red" title="No HP Pemesan" data-toggle="tooltip"></i> Hp</small></th>
                      <th><small><i class="fa fa-map-marker margin-r-5 text-red" title="Alamat Asal" data-toggle="tooltip"></i> Asal</small></th>
                      <th><small><i class="fa fa-map-marker margin-r-5 text-red" title="Alamat Tujuan" data-toggle="tooltip"></i> Tujuan</small></th>
                      <th><small><i class="fa fa-shopping-cart margin-r-5 text-red" title="Daftar Barang Pesanan" data-toggle="tooltip"></i> Pesanan</small></th>
                      <th><small><i class="fa fa-clock-o margin-r-5 text-red" title="Waktu Pemesanan" data-toggle="tooltip"></i> Pesan</small></th>
                      <th><small><i class="fa fa-clock-o margin-r-5 text-red" title="Waktu Sampai" data-toggle="tooltip"></i> Sampai</small></th>
                      <th><center><small><i class="fa fa-question-circle margin-r-5 text-red" title="Status pengiriman" data-toggle="tooltip"></i></small></center></th>
                      <th><small><i class="fa fa-map-marker margin-r-5 text-red" title="Jarak (km)" data-toggle="tooltip"></i> </small></th>
                      <th><small><i class="fa fa-dollar margin-r-5 text-red" title="Biaya Total (Rp)" data-toggle="tooltip"></i> </small></th>
                      <th><center><small><i class="fa fa-motorcycle text-red" title="Driver" data-toggle="tooltip"></i></small></center></th>
					  </tr>
                    </thead>
					<tbody style="font-size:12px">
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			 </div>
</div>