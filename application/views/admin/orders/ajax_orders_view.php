<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<link rel="stylesheet" href="<?php echo base_url('assets/lte/plugins/datatables/dataTables.bootstrap.css')?>">
<script src="<?php echo base_url('assets/lte/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/lte/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<script type="text/javascript">

	$(document).ready(function(){
	$("#tabel-orders").DataTable({
			processing: true,
			serverSide: true,
			stateSave: true,
			ajax: {
				"url": "<?=base_url('admin/allOrdersHistoryDataTable')?>",
				"type": "GET"
			},
        columns: [
		
        	{ data: "oh.good", "visible": false },
        	{ data: "oh.username", "visible": false },
        	{ data: "oh.invoice" },
        	{
				data: "oh.name",
				"render": function ( data, type, full, meta ) {
					return '<a href=<?=base_url('admin/allCustomers')?>/'+full.oh.username+' title="'+full.oh.username+'" data-toggle="tooltip">'+data+'</a>';
				}
			},
        	{ data: "oh.no_handphone" },
        	{ data: "oh.alamat" },
        	{ data: "oh.alamat_tujuan" },
        	{ 
				data: "oh.pesanan", 
				"render": function ( data, type, full, meta ) {
					if (full.oh.good === 'Good Food'){
						return '<center><i class="fa fa-cutlery text-green"></i><br>'+data+'</center>';
					}else if (full.oh.good === 'Good Pick'){
						return '<center><i class="fa fa-shopping-cart text-orange"></i><br>'+data+'</center>';
					}else{
						return '<center><i class="fa fa-motorcycle text-blue"></i></center>';
					}
				}
			},
        	{ data: "oh.waktu_kirim" },
        	{ data: "oh.waktu_sampai" },
        	{
				data: "oh.selesai",
				"render": function ( data, type, full, meta ) {
					if (data ==='0'){
						return '<div class="progress progress-sm active" title="Belum dikirim" data-toggle="tooltip"> <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" style="width: 10%"><span class="sr-only">10% Complete</span></div>';
					}else if (data ==='1'){
						return '<div class="progress progress-sm active" title="Telah sampai" data-toggle="tooltip"> <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" style="width: 100%"><span class="sr-only">100% Complete</span></div>';
					}else if (data ==='2'){
						return '<div class="progress progress-sm active" title="Progress..." data-toggle="tooltip"> <div class="progress-bar progress-bar-warning progress-bar-striped" role="progressbar" style="width: 50%"><span class="sr-only">50% Complete</span></div>';
					}else { return '?'}
				}
			},
        	{
				data: "oh.jarak",
				"render": function ( data, type, full, meta ) {
					return data+' km'
				}
			},
        	{ data: "oh.biaya" },
        	{ data: "driver" }
        	
			]
			
		});
	});

</script>