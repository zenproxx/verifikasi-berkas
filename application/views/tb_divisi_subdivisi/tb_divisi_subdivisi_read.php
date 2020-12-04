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
        <h2 style="margin-top:0px">Tb_divisi_subdivisi Read</h2>
        <table class="table">
	    <tr><td>Id</td><td><?php echo $id; ?></td></tr>
	    <tr><td>Id Parent</td><td><?php echo $id_parent; ?></td></tr>
	    <tr><td>Nama Divisi</td><td><?php echo $nama_divisi; ?></td></tr>
	    <tr><td>Jenis</td><td><?php echo $jenis; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_divisi_subdivisi') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
        </body>
</html>