  <?php $this->load->view('page/header'); ?>
<!-- WRAPPER -->
<div id="wrapper">
	<?php $this->load->view('page/navbar'); ?>
	<!-- END NAVBAR -->
	<!-- LEFT SIDEBAR -->
	<?php $this->load->view('page/sidebar'); ?>
	<!-- END LEFT SIDEBAR -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/css/multi-select.min.css" />
	<!-- MAIN -->
	<div class="main">
		<!-- MAIN CONTENT -->
		<div class="main-content">
			<div class="container-fluid">
				<div class="panel">
					<h4>INFO</h4>
				<?php foreach($query as $k): ?>
				<dl class="row">
				
  <dt class="col-sm-3">ID </dt>
  <dd class="col-sm-9"><?php echo $k->id; ?></dd>

  <dt class="col-sm-3">No Agenda </dt>
  <dd class="col-sm-9"><?php echo $k->no_agenda; ?></dd>
					<dt class="col-sm-3">Jenis surat </dt>
  <dd class="col-sm-9"><?php echo $k->jenis_surat; ?></dd>
					<dt class="col-sm-3">Tanggal kirim </dt>
  <dd class="col-sm-9"><?php echo $k->tanggal_kirim; ?></dd>
									<dt class="col-sm-3">Tanggal terima </dt>
  <dd class="col-sm-9"><?php echo $k->tanggal_terima; ?></dd>
					<dt class="col-sm-3">No surat </dt>
  <dd class="col-sm-9"><?php echo $k->no_surat; ?></dd>
					<dt class="col-sm-3">Pengirim </dt>
  <dd class="col-sm-9"><?php echo $k->pengirim; ?></dd>
					<dt class="col-sm-3">Perihal </dt>
  <dd class="col-sm-9"><?php echo $k->perihal; ?></dd>
				</dl>
				<?php endforeach ?>
					<div class="panel-heading">
						<h3 class="panel-title">Disposisikan</h3>
						<div class="right">
							<button type="button" title="sembunyikan" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
						</div>
					</div>
					<form action="<?php echo site_url('disposisi/submit'); ?>" method="post" enctype="multipart/form-data">
						<div class="panel-body">
							<div class="row">
								<div class="col-md-4">
									<p>Disposisikan ke *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<select name="disposisi" class="form-control">
										<?php foreach ($divisi_sub as $data_divisi) { ?>
											<option value="<?php echo $data_divisi['id']?>"><?php echo $data_divisi['nama_divisi']?></option>
										<?php } ?> 
										
										</select>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>Tanggapan *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="text" name="tanggapan" class="form-control" placeholder="Tanggapan" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>Keterangan *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="text" style="display: none;" name="id" class="form-control" placeholder="Catatan" required value="<?php echo $id; ?>">
									<input type="text" name="keterangan" class="form-control" placeholder="Catatan" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x"></i>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="col-md-4">
									<p>File *</p>
								</div>
								<div class="col-md-7 col-md-pull-2">
									<input type="file" name="file_surat" class="form-control" placeholder="" required>
								</div>
								<div class="col-md-1 col-md-pull-2">
									<i class="fa fa-question-circle fa-1x" title="Tanda tanya"></i>
								</div>
							</div>
							<br>
							<button type="submit" class="btn btn-primary">Submit</button>
							<input type="reset" class="btn btn-danger" value="reset">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	jQuery("#tanggal_kirim").datepicker({
		dateFormat: "dd-mm-yy",

	});
	jQuery("#tanggal_terima").datepicker({
		dateFormat: "dd-mm-yy",

	});
	$(document).ready(function() {
		jQuery('#langOpt').multiSelect({
			columns: 1,
			placeholder: 'Select Languages',
			search: true
		})
		
		$(this).find('select').each(function() {
         var inputvalue = $(this).val();
        if( inputvalue == "" || $.trim(inputvalue).length == 0) {
            e.preventDefault();
            $(this).addClass('input-error');
        }
        else {
            $(this).removeClass('input-error');
        }
    });
	});
	
	

</script>
<!-- END MAIN CONTENT -->
<!-- END MAIN -->
<div class="clearfix">
	<?php $this->load->view('page/footer'); ?>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->

<?php $this->load->view('page/js'); ?>


</body>

</html>
