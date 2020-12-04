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
	
        <h2 style="margin-top:0px">Lembar Penelitian IMB <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">No Agenda Berkas <?php echo form_error('no_agenda_berkas') ?></label>
            <input type="text" class="form-control" name="no_agenda_berkas" id="no_agenda_berkas" placeholder="No Agenda Berkas" value="<?php echo $no_agenda_berkas; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Bangunan <?php echo form_error('nama_bangunan') ?></label>
            <input type="text" class="form-control" name="nama_bangunan" id="nama_bangunan" placeholder="Nama Bangunan" value="<?php echo $nama_bangunan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Jenis Bangunan <?php echo form_error('jenis_bangunan') ?></label>
            <input type="text" class="form-control" name="jenis_bangunan" id="jenis_bangunan" placeholder="Jenis Bangunan" value="<?php echo $jenis_bangunan; ?>" />
        </div>
	    <div class="form-group">
            <label for="smallint">Jumlah Unit <?php echo form_error('jumlah_unit') ?></label>
            <input type="text" class="form-control" name="jumlah_unit" id="jumlah_unit" placeholder="Jumlah Unit" value="<?php echo $jumlah_unit; ?>" />
        </div>
	    <input type="hidden" name="uniqid" value="<?php echo $uniqid; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_lembar_penelitian_imb') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>