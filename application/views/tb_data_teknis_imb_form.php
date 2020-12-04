
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
	<?php $this->load->view('page/sidebar'); ?>
        <h2 style="margin-top:0px">Data Teknis Pemrosesan IMB <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="int">Id Surat <?php echo form_error('id_surat') ?></label>
            <input type="text" class="form-control" name="id_surat" id="id_surat" placeholder="Id Surat" value="<?php echo $id_surat; ?>" />
        </div>
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
	    <a href="<?php echo site_url('tb_data_teknis_imb') ?>" class="btn btn-default">Cancel</a>
    </form>
    <div class="clearfix">
<?php $this->load->view('page/footer'); ?>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<?php $this->load->view('page/js'); ?>

    </body>
</html>