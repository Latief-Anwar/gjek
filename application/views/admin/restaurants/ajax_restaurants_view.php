<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<link rel="stylesheet" href="<?php echo base_url('assets/lte/plugins/datatables/dataTables.bootstrap.css')?>">
<link rel="stylesheet" href="<?php echo base_url('assets/lte/plugins/timepicker/bootstrap-timepicker.min.css');?>">
<script src="<?php echo base_url('assets/lte/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/lte/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/lte/plugins/timepicker/bootstrap-timepicker.min.js');?>"></script>
<script type="text/javascript">

	$(document).ready(function(){
	$("#time1").timepicker({
			showInputs: false,
			showMeridian: false,
			defaultTime: false
		});
	$("#time2").timepicker({
			showInputs: false,
			showMeridian: false,
			defaultTime: false
		});
	
	
	$("#tabel-restaurants").DataTable({
			processing: true,
			serverSide: true,
			stateSave: true,
			ajax: {
				"url": "<?=base_url('restaurants/allRestaurantsDataTable')?>",
				"type": "GET"
			},
        columns: [
		
        	{ data: "r.id", "visible": false  },
        	{ data: "r.jam_tutup", "visible": false  },
        	{ data: "r.nama_pemilik", "visible": false  },
        	{ data: "r.id" },
        	{ 
				data: "r.nama",
				"render": function ( data, type, full, meta ) {
					return '<a href=<?=base_url('Restaurants/index')?>/'+full.r.id+' title="'+full.r.nama_pemilik+'" data-toggle="tooltip">'+data+'</a>';
				}
			},
        	{ data: "r.alamat" },
        	{ data: "r.hp" },
        	{ 
				data: "r.jam_buka",
				"render": function ( data, type, full, meta ) {
					return data+' - '+ full.r.jam_tutup;
				}
			},
        	{ data: "r.hari_libur" },
        	{ 
				data: "r.status",
				"render": function ( data, type, full, meta ) {
					if (data ==='0'){
						return '<a href="<?=base_url('Restaurants/activateRestaurant')?>/'+full.r.id+'" class="text-red" title="Klik untuk merubah manual" data-toggle="tooltip">Tutup</a>';
					}else if (data ==='1'){
						return '<a href="<?=base_url('Restaurants/deactivateRestaurant')?>/'+full.r.id+'" class="text-green" title="Klik untuk merubah manual" data-toggle="tooltip">Buka</a>';
					}
				}
			},
        	
			]
			
		}).dataTableSearch(500);
			
	});

</script>