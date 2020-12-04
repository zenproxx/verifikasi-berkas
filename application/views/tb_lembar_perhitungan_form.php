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
	
        <h2 style="margin-top:0px">Perhitungan Luas dan Index Dasar Penetapan Retribusi Izin Mendirikan Bangunan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nomor <?php echo form_error('nomor') ?></label>
            <input type="text" class="form-control" name="nomor" id="nomor" placeholder="Nomor" value="<?php echo $nomor; ?>" />
        </div>
	    <div class="form-group">
            <label for="date">Tanggal <?php echo form_error('tanggal') ?></label>
            <input type="text" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Pemohon <?php echo form_error('nama_pemohon') ?></label>
            <input type="text" class="form-control" name="nama_pemohon" id="nama_pemohon" placeholder="Nama Pemohon" value="<?php echo $nama_pemohon; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Lokasi Persil <?php echo form_error('lokasi_persil') ?></label>
            <input type="text" class="form-control" name="lokasi_persil" id="lokasi_persil" placeholder="Lokasi Persil" value="<?php echo $lokasi_persil; ?>" />
        </div>
	    <input type="hidden" name="uniqid" value="<?php echo $uniqid; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_lembar_perhitungan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>