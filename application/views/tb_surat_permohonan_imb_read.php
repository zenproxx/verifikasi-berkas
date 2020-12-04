<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Tb_surat_permohonan_imb Read</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Surat Permohonan</td><td><?php echo $surat_permohonan; ?></td></tr>
	    <tr><td>Alamat Permohonan</td><td><?php echo $alamat_permohonan; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_surat_permohonan_imb') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>