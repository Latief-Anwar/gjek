<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="row">
	<div class="col-md-12 no-padding">
		<div class="box collapsed-box">
            <div class="box-header with-border">
				<div class="box-title">Tulis Pengumuman</div>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
					<button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<div class="box-body">
				<?php echo form_open_multipart('informasi/tambah',array('class'=>''));?>
					<div class="form-group">
						<?php echo form_input('judul_informasi','',array('class'=>'form-control','placeholder'=>'Judul','required'=>'required'));?>
						<?php echo form_error('judul_informasi','<small style="color:red">','</small>');?>
					</div>
						
					<div class="form-group">
						<textarea id="isi-informasi" name="isi_informasi"  class="form-control" rows="10" cols="80" placeholder="Isi"></textarea>
						<?php echo form_error('isi_informasi','<small style="color:red">','</small>');?>
					</div>
					<div class="form-group">
						<input type="file" name="userfile"/>
						<p class="help-block">(jpg/png/bmp)</p>
					</div>
			</div><!--./box body-->
							<div class="box-footer clearfix">
								<div class="pull-right">
								<?php echo form_submit('submit', 'Tambah', 'class="btn btn-flat bg-olive-active btn-sm"');?>
								</div>
								<a href="<?= base_url('informasi')?>" class="btn btn-default btn-flat btn-sm"><i class="fa fa-times"></i> Batal</a>
							</div>	
				<?php echo form_close();?>
		</div>
	</div>
	
	<div class="col-md-12 no-padding" id="edit-form" style="display:none;">
		<div class="box">
            <div class="box-header with-border">
				<div class="box-title">Edit Informasi</div>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
					<button class="btn btn-box-tool" id="hide-edit"><i class="fa fa-remove"></i></button>
				</div>
			</div>
			<div class="box-body">
				<?php echo form_open_multipart('informasi/update',array('class'=>''));?>
					<div class="form-group">
						<?php echo form_input('judul_informasi_edit','',array('class'=>'form-control','placeholder'=>'Judul','required'=>'required'));?>
						<?php echo form_error('judul_informasi_edit','<small style="color:red">','</small>');?>
					</div>
						
					<div class="form-group">
						<textarea id="isi-informasi-edit" name="isi_informasi_edit"  class="form-control" rows="10" cols="80" placeholder="Isi"></textarea>
						<?php echo form_error('isi_informasi_edit','<small style="color:red">','</small>');?>
					</div>
					<div class="form-group">
						<input type="file" name="userfile_edit"/>
						<p class="help-block">(jpg/png/bmp)</p>
					</div>
			</div><!--./box body-->
							<div class="box-footer clearfix">
								<div class="pull-right">
								<?php echo form_submit('submit', 'Edit', 'class="btn btn-flat bg-olive-active btn-sm"');?>
								</div>
								<a href="<?= base_url('masuk/pengelola/informasi')?>" class="btn btn-default btn-flat btn-sm"><i class="fa fa-times"></i> Batal</a>
							</div>
						<?php echo form_hidden('id_informasi_edit','',array('class'=>'form-control','placeholder'=>'Judul','required'=>'required'));?>
				<?php echo form_close();?>
				<div class="overlay">
					<i class="fa fa-spinner fa-spin" style="color:silver;"></i>
				</div>
		</div>
	</div>
	
	<div class="col-md-12 no-padding">
		<div class="box box-warning">
				<div class="box-header">
					<h3 class="box-title">Semua Pengumuman</h3>
                </div>
		  
			<?php
			if(!empty($informasi))
			{
			$no=1;
			?>
			<div class="box-body">
			<div>
				<table class="table table-condensed" id="tabel-pengumuman">
				<thead>
					<tr>
					<th>#</th>
					<th>Judul</th>
					<th>Created <i class="fa fa-info-circle" style="color:silver;" title="Tanggal Dibuat" data-toggle="tooltip" data-placement="right"></i></th>
					<th>Updated <i class="fa fa-info-circle" style="color:silver;" title="Tanggal diubah" data-toggle="tooltip" data-placement="right"></i></th>
					<th>Penulis <i class="fa fa-info-circle" style="color:silver;" title="Penulis" data-toggle="tooltip" data-placement="right"></i></th>
					<th>Gambar <i class="fa fa-info-circle" style="color:silver;" title="Gambar" data-toggle="tooltip" data-placement="right"></i></th>
					<th></th>
					</tr>
				</thead>
				<tbody>
			<?php
			  foreach($informasi as $i): ?>
				<tr>
				<td><?=$no++?>.</td>
				<td><a href="javascript:void(0)" class="edit" name="<?=$i->id?>" title="Edit" data-toggle="tooltip" data-placement="left"> <?=mb_substr($i->judul ,0,30).'...'?> </a></td>
				<td style="color:silver;"><?=tgl_indo_timestamp($i->created_at);?></td>
				<td style="color:silver;">
						<?php if ($i->updated_at !=null)
							{echo (tgl_indo_timestamp($i->updated_at));}
						?>
				</td>
				<td style="color:silver;"><?=$i->penulis?></td>
				<td> <?php if ($i->foto != NULL){?>
					<a href="<?= base_url('assets/images/informasi').'/'.$i->foto?>" target="_blank">Gambar</a>
					<?php }?>
				</td>
				<td><a href="<?= base_url('informasi/delete').'/'.$i->id?>" title="Hapus?" data-toggle="tooltip" data-placement="left">
					<span class="btn btn-danger btn-sm btn-flat"><i class="fa fa-trash"></i></span>
					</a>
				</td>
				</tr>
				
			  <?php endforeach;
			}else{echo '<center>Belum ada Pengumuman <center>';}
			?>
				</tbody>
				</table>
			</div>
			</div>
		</div><!--./box-->
	</div><!--./col-->
</div>