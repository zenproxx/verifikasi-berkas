<?php $this->load->view('page/header'); ?>
    <?php $this->load->view('page/navbar'); ?>
	<!-- END NAVBAR -->
	<!-- LEFT SIDEBAR -->
    
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-xs-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>TB_DATA_TEKNIS_IMB LIST <?php echo anchor('tb_data_teknis_imb/create/','Create',array('class'=>'btn btn-danger btn-sm'));?>
		<?php echo anchor(site_url('tb_data_teknis_imb/pdf'), '<i class="fa fa-file-pdf-o"></i> PDF', 'class="btn btn-primary btn-sm"'); ?></h3>
                </div><!-- /.box-header -->
                <div class='box-body'>
        <table class="table table-bordered table-striped" id="mytable">
            <thead>
                <tr>
                    <th width="80px">No</th>
		    <th>Id Surat</th>
		    <th>No Agenda Berkas</th>
		    <th>Nama Bangunan</th>
		    <th>Jenis Bangunan</th>
		    <th>Jumlah Unit</th>
		    <th>Action</th>
                </tr>
            </thead>
	    <tbody>
            <?php
            $start = 0;
            foreach ($tb_data_teknis_imb_data as $tb_data_teknis_imb)
            {
                ?>
                <tr>
		    <td><?php echo ++$start ?></td>
		    <td><?php echo $tb_data_teknis_imb->id_surat ?></td>
		    <td><?php echo $tb_data_teknis_imb->no_agenda_berkas ?></td>
		    <td><?php echo $tb_data_teknis_imb->nama_bangunan ?></td>
		    <td><?php echo $tb_data_teknis_imb->jenis_bangunan ?></td>
		    <td><?php echo $tb_data_teknis_imb->jumlah_unit ?></td>
		    <td style="text-align:center" width="140px">
			<?php 
			echo anchor(site_url('tb_data_teknis_imb/read/'.$tb_data_teknis_imb->uniqid),'<i class="fa fa-eye"></i>',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('tb_data_teknis_imb/update/'.$tb_data_teknis_imb->uniqid),'<i class="fa fa-pencil-square-o"></i>',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			echo '  '; 
			echo anchor(site_url('tb_data_teknis_imb/delete/'.$tb_data_teknis_imb->uniqid),'<i class="fa fa-trash-o"></i>','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
        <script src="<?php echo base_url('assets/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('assets/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        <div class="clearfix">
<?php $this->load->view('page/footer'); ?>
</div>
<!-- END WRAPPER -->
<!-- Javascript -->
<?php $this->load->view('page/js'); ?>
