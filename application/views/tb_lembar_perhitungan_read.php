<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Tb_lembar_perhitungan Read</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Nomor</td><td><?php echo $nomor; ?></td></tr>
	    <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
	    <tr><td>Nama Pemohon</td><td><?php echo $nama_pemohon; ?></td></tr>
	    <tr><td>Lokasi Persil</td><td><?php echo $lokasi_persil; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_lembar_perhitungan') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>