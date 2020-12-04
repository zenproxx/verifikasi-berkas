<?php 
$this->load->view('template/head');
$this->load->view('template/topbar');
$this->load->view('template/sidebar');
?>
<section class="content">
        <h2 style="margin-top:0px">Tb_data_teknis_imb Read</h2>
        <div class="box">
        <div class="box-body">
        <table class="table">
	    <tr><td>Id Surat</td><td><?php echo $id_surat; ?></td></tr>
	    <tr><td>No Agenda Berkas</td><td><?php echo $no_agenda_berkas; ?></td></tr>
	    <tr><td>Nama Bangunan</td><td><?php echo $nama_bangunan; ?></td></tr>
	    <tr><td>Jenis Bangunan</td><td><?php echo $jenis_bangunan; ?></td></tr>
	    <tr><td>Jumlah Unit</td><td><?php echo $jumlah_unit; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('tb_data_teknis_imb') ?>" class="btn btn-default">Cancel</a></td></tr>
	</table>
</div>
</div>
</section>
<?php 
$this->load->view('template/js');
$this->load->view('template/foot');
?>