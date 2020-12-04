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

        <h2 style="margin-top:0px">Tambah Sub Divisi</h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id <?php echo form_error('id') ?></label>
            <input type="text" class="form-control" name="id" id="id" placeholder="Id" value="<?php echo $id; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Divisi <?php echo form_error('nama_divisi') ?></label>
            <input type="text" class="form-control" name="nama_divisi" id="nama_divisi" placeholder="Nama Divisi" value="<?php echo $nama_divisi; ?>" />
        </div>
	    <input type="hidden" name="uniqid" value="<?php echo $uniqid; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_divisi_subdivisi') ?>" class="btn btn-default">Cancel</a>
    </form>
   
    <div class="clearfix">
<?php $this->load->view('page/footer'); ?>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<?php $this->load->view('page/js'); ?>

    </body>
</html>