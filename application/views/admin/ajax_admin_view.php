<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<link rel="stylesheet" href="<?php echo base_url('assets/lte/plugins/datatables/dataTables.bootstrap.css')?>">
<script src="<?php echo base_url('assets/lte/plugins/datatables/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/lte/plugins/datatables/dataTables.bootstrap.min.js')?>"></script>
<script type="text/javascript">

	$(document).ready(function(){
		
	$("#tabel-saran").DataTable({
			processing: true,
			serverSide: true,
			stateSave: true,
			ajax: {
				"url": "<?=base_url('admin/saranDataTable')?>",
				"type": "GET"
			},
        columns: [
		
        	{ data: "s.id" },
        	{ 
				data: "s.id",
				"render": function ( data, type, full, meta ) {
					return '<a href=<?=base_url('admin/hapusSaran')?>/'+full.s.id+' class="text-red" title="Hapus '+full.s.nama+'?" data-toggle="tooltip" data-placement="right"><i class="fa fa-trash-o"></i></a>';
				}			
			},
        	{ data: "s.nama"},
        	{ data: "s.saran"},
        	
			]
			
		}).dataTableSearch(500);
			
	});

</script>