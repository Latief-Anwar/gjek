<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<script type="text/javascript">
		$(document).ready(function(){
			$(".clickDetail").each(function(){
				$(this).on('click', function(){
					$('html,body').animate({ scrollTop: 0 }, 'slow');
					$(".overlay").show();
					$("#detail-form").show("slow");
					
						var id_driver = $(this).attr("name");

					$.ajax({
							url:"<?php echo site_url('admin/detailDriverAjax')?>/" + id_driver,
							type:'GET',
							dataType: "JSON",
							success:function(data)
								{
									var driver=data['driver'];
									
									var total_orders=data['total_orders'];
									var total_jarak=data['total_jarak'];
									var total_hasil=data['total_hasil'];
									
									var total_orders_history=data['total_orders_history'];
									var total_jarak_history=data['total_jarak_history'];
									var total_hasil_history=data['total_hasil_history'];
									
									$('[name="foto"]').attr('src', driver.image);
									$('[name="username"]').text(driver.username);
									$('[name="nama"]').text(driver.nama);
									$('[name="hp"]').text(driver.hp);
									$('[name="alamat"]').text(driver.alamat);
									$('[name="bn"]').text(driver.bn);
									$('[name="ktp"]').text(driver.ktp);
									
									$('[name="aktif"]').attr("data-toggle", "tooltip");
										if (driver.aktif === '1')
										{
											$('[name="status"]').text("Active");
											$('[name="aktif"]').attr("href", "<?=site_url('admin/deactivateDriver')?>/" + driver.id);
											$('[name="aktif"]').attr("title", "Non-aktifkan?");
										}else if (driver.aktif === '0'){
											$('[name="status"]').text("Non-active");
											$('[name="aktif"]').attr("href", "<?=site_url('admin/activateDriver')?>/" + driver.id);
											$('[name="aktif"]').attr("title", "Aktifkan?");
										}
									
									$('[name="total_orders"]').text(total_orders);
									$('[name="total_jarak"]').text(total_jarak + " km");
									$('[name="total_hasil"]').text("Rp. " + total_hasil);
									$('[name="harus_bayar"]').text("Rp. " + total_hasil * 0.2);
									//history
									$('[name="total_orders_history"]').text(total_orders_history);
									$('[name="total_jarak_history"]').text(total_jarak_history + " km");
									$('[name="total_hasil_history"]').text("Rp. " + total_hasil_history);
								
									
									
									$('[class="overlay"]').hide();
									
								},
							error:function(jqXHR)
								{
									alert("Maaf, Terjadi kesalahan");
								}
					});
				});
			});
			
			$("#hide-detail").click(function(){
				$("#detail-form").hide("slow");
			});
			
		});
</script>