<!doctype html>
<html>
    <head>
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
	
        <h2 style="margin-top:0px">Rekomendasi Keterangan Rencana Tata Ruang Kota Dan Rencana Teknis Bangunan (KRKRTB) <br><?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Lokasi Persil <?php echo form_error('lokasi_persil') ?></label>
            <input type="text" class="form-control" name="lokasi_persil" id="lokasi_persil" placeholder="Lokasi Persil" value="<?php echo $lokasi_persil; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kelurahan <?php echo form_error('kelurahan') ?></label>
            <input type="text" class="form-control" name="kelurahan" id="kelurahan" placeholder="Kelurahan" value="<?php echo $kelurahan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Kecamatan <?php echo form_error('kecamatan') ?></label>
            <input type="text" class="form-control" name="kecamatan" id="kecamatan" placeholder="Kecamatan" value="<?php echo $kecamatan; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Alas Hak <?php echo form_error('alas_hak') ?></label>
            <input type="text" class="form-control" name="alas_hak" id="alas_hak" placeholder="Alas Hak" value="<?php echo $alas_hak; ?>" />
        </div>
	    <input type="hidden" name="uniqid" value="<?php echo $uniqid; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_rekomendasi_keterangan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>