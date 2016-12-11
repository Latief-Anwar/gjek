<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<link rel="stylesheet" href="<?php echo base_url('assets/lte/plugins/datatables/dataTables.bootstrap.css')?>">
<script src="<?php echo base_url('assets/lte/plugins/ckeditor/ckeditor.js')?>"></script>
<script src="<?php echo base_url('assets/lte/plugins/datatables/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/lte/plugins/datatables/dataTables.bootstrap.min.js');?>"></script>
<script>
    $(function () {
		CKEDITOR.replace('isi_informasi');
		CKEDITOR.replace('isi-informasi-edit');
	});
</script>

<script type="text/javascript">
		$(document).ready(function(){
			$(".edit").each(function(){
				$(this).click(function(){
					$('html,body').animate({ scrollTop: 0 }, 'slow');
					$(".overlay").show();
					$("#edit-form").show("slow");
						var id_informasi = $(this).attr("name");
						
					$.ajax({
							url:"<?php echo site_url('informasi/select_ajax')?>/" + id_informasi,
							type:'GET',
							dataType: "JSON",
							success:function(data)
								{
									$('[name="id_informasi_edit"]').val(data.id);
									$('[name="judul_informasi_edit"]').val(data.judul);
									var instance = CKEDITOR.instances['isi-informasi-edit'];
									if(instance)
									{
										instance.updateElement();
										instance.setData(data.isi);
									}
									
									$('[class="overlay"]').hide();
								},
							error:function(jqXHR)
								{
									alert("Maaf, Terjadi kesalahan");
								}
					});
				});
			});
			$("#hide-edit").click(function(){
				$("#edit-form").hide("slow");
			});
			$("#tabel-pengumuman").DataTable({
				"paging": true,
				"lengthChange": true,
				"searching": true,
				"ordering": true,
				"info": true,
				"autoWidth": false,
				"scrollX": true,
				"processing": true
			});
		});
</script>
