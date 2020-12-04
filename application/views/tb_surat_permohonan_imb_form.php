<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
    <?php $this->load->view('page/header'); ?>
    <?php $this->load->view('page/navbar'); ?>
	<!-- END NAVBAR -->
	<!-- LEFT SIDEBAR -->
	
        <h2 style="margin-top:0px">Tb_surat_permohonan_imb <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Surat Permohonan <?php echo form_error('surat_permohonan') ?></label>
            <input type="text" class="form-control" name="surat_permohonan" id="surat_permohonan" placeholder="Surat Permohonan" value="<?php echo $surat_permohonan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alamat Permohonan <?php echo form_error('alamat_permohonan') ?></label>
            <input type="text" class="form-control" name="alamat_permohonan" id="alamat_permohonan" placeholder="Alamat Permohonan" value="<?php echo $alamat_permohonan; ?>" />
        </div>
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_surat_permohonan_imb') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>