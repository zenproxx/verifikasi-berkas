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
        <h2 style="margin-top:0px">Tb_divisi_subdivisi <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Id <?php echo form_error('id') ?></label>
            <input type="text" class="form-control" name="id" id="id" placeholder="Id" value="<?php echo $id; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Id Parent <?php echo form_error('id_parent') ?></label>
            <input type="text" class="form-control" name="id_parent" id="id_parent" placeholder="Id Parent" value="<?php echo $id_parent; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Nama Divisi <?php echo form_error('nama_divisi') ?></label>
            <input type="text" class="form-control" name="nama_divisi" id="nama_divisi" placeholder="Nama Divisi" value="<?php echo $nama_divisi; ?>" />
        </div>
	    <div class="form-group">
            <label for="tinyint">Jenis <?php echo form_error('jenis') ?></label>
            <input type="text" class="form-control" name="jenis" id="jenis" placeholder="Jenis" value="<?php echo $jenis; ?>" />
        </div>
	    <input type="hidden" name="uniqid" value="<?php echo $uniqid; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('tb_divisi_subdivisi') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>