<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Tb_rekomendasi_keterangan Read</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Lokasi Persil</td><td><?php echo $lokasi_persil; ?></td></tr>
	    <tr><td>Kelurahan</td><td><?php echo $kelurahan; ?></td></tr>
	    <tr><td>Kecamatan</td><td><?php echo $kecamatan; ?></td></tr>
	    <tr><td>Alas Hak</td><td><?php echo $alas_hak; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_rekomendasi_keterangan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>