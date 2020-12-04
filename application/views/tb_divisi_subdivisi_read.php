<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Tb_divisi_subdivisi Read</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Id</td><td><?php echo $id; ?></td></tr>
	    <tr><td>Id Parent</td><td><?php echo $id_parent; ?></td></tr>
	    <tr><td>Nama Divisi</td><td><?php echo $nama_divisi; ?></td></tr>
	    <tr><td>Jenis</td><td><?php echo $jenis; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_divisi_subdivisi') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>