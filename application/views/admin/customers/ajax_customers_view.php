<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<link rel="stylesheet" href="<?php echo base_url('assets/lte/plugins/datatables/dataTables.bootstrap.css')?>">
<script src="<?php echo base_url('assets/lte/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/lte/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<script type="text/javascript">

	$(document).ready(function(){
	$("#tabel-customers").DataTable({
			processing: true,
			serverSide: true,
			ajax: {
				"url": "<?=base_url('admin/customersDataTable')?>",
				"type": "GET",
				"initComplete": function(settings, json) {
					alert( 'DataTables has finished its initialisation.' );
				}
			},
        columns: [		
			{ data: "lu.id" },
        	{
				data: "lu.nama",
				"render": function ( data, type, full, meta ) {
					return '<a href=<?=base_url('admin/allCustomers')?>/'+full.lu.email+' title="lihat detail" data-toggle="tooltip">'+data+'</a>';
				}
			},
        	{ data: "lu.email" },
        	{ data: "lu.hp" },
        	{ data: "lu.alamat" },
        	{
				data: "lu.aktivasi",
				"render": function ( data, type, full, meta ) {
					if (data ==='0'){
						return '<span class="text-danger">Non-active</span>';
					}else if (data ==='1'){
						return '<span class="text-success">Active</span>';
					}
				}
			}
        	
			]
		});
	});

</script>