<?php
defined('BASEPATH') OR exit('No direct script access allowed');?>
<div class="row">
<div class="col-md-8 no-padding">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">About Me</h3>                 
		</div><!-- /.box-header -->                 
		<div class="box-body">
			<?php 
				if($this->session->userdata('group') == 'Admin')
				{
			?>
					<strong><i class="fa fa-user margin-r-5"></i> <?=$user->username?></strong>                   
					<p class="text-muted">
						<?=$user->username?>                  
					</p>                    
					<hr>
					
					<strong><i class="fa fa-map-marker margin-r-5 text-red"></i> Location</strong>                   
					<p class="text-muted">(empty)</p>                    
					<hr>        
			<?php	
				}
				else if ($this->session->userdata('group') == 'Driver')
				{
			?>
					<strong><i class="fa fa-user margin-r-5"></i> <?=$user->username?></strong>                   
					<p class="text-muted">
						<?=$user->nama?>                  
					</p>                    
					<hr>
					
					<strong><i class="fa fa-map-marker margin-r-5 text-red"></i> Location</strong>                   
					<p class="text-muted"><?=$user->alamat?></p>                    
					<hr>                    
					
					<strong><i class="fa fa-file-text-o margin-r-5"></i> No KTP</strong>                   
					<p>
						<?=$user->ktp?> 
					</p>                    
					<hr>  
					
					<strong><i class="fa fa-motorcycle margin-r-5"></i> Plat No</strong>                  
					<p>
						<?=$user->bn?>
					</p>            
			<?php
				}
			?>     
		</div><!-- /.box-body -->               
	</div><!-- /.box -->             
</div><!-- /.col -->
<div class="col-md-4">
	<div class="box box-primary">
		<div class="box-header with-border">
			<h3 class="box-title">Pengaturan</h3>                 
		</div><!-- /.box-header -->                 
		<div class="box-body">                   
			<?php echo form_open('',array('class'=>'form-horizontal'));?>
				<div class="form-group form-group-sm">
					  <?php
					  echo form_label('Username','username',array('class'=>'col-md-4 control-label'));
					  ?>
					  <div class="col-md-8">
					  <?php
					  echo form_input('username',set_value('username',$user->username),array('class'=>'form-control','required'=>'required'));
					  echo form_error('username','<small style="color:red">','</small>');
					  ?>
					  </div>
				</div>
				<div class="form-group form-group-sm">
					  <?php
					  echo form_label('Password','sandi',array('class'=>'col-sm-4 control-label'));
					  ?>
					  <div class="col-md-8">
					  <?php
					  echo form_password('sandi',set_value('sandi',$user->password),array('class'=>'form-control','disabled'=>'disabled'));
					  ?>
					  <small style="color:silver;"><i>encrypted</i></small>
					  </div>
				</div>
				<div class="form-group form-group-sm">
					  <?php
					  echo form_label('Ganti password','password',array('class'=>'col-sm-4 control-label'));
					  ?>
					  <div class="col-md-8">
					  <?php
					  echo form_password('password','',array('class'=>'form-control','required'=>'required'));
					  echo form_error('password','<small style="color:red">','</small>');
					  ?>
					  </div>
				</div>
				<div class="form-group form-group-sm">
					  <?php
					  echo form_label('Ulangi password','password_confirm',array('class'=>'col-sm-4 control-label'));
					  ?>
					  <div class="col-md-8">
					  <?php
					  echo form_password('password_confirm','',array('class'=>'form-control','required'=>'required'));
					  echo form_error('password_confirm','<small style="color:red">','</small>');
					  ?>
					  </div>
				</div>
				<div class="form-group form-group-sm">
					  <?php
					  echo form_label('','',array('class'=>'col-sm-4 control-label'));
					  ?>
					  <div class="col-md-8">
					  <?php
					  echo form_input('','',array('class'=>'form-control','disabled'=>'disabled'));
					  echo form_error('','<small style="color:red">','</small>');
					  ?>
					  </div>
				</div>
				
				<div class="form-group form-group-sm">
					<div class="col-md-offset-4 col-md-8">
						<?php echo form_submit('submit', 'Save', 'class="btn btn-primary btn-flat btn-block btn-sm"');?>
					</div>
				</div>
				<?php echo form_close();?>
			</div>
		</div><!-- /.box-body -->               
	</div><!-- /.box -->             
</div><!-- /.col -->
</div><!-- /.row -->