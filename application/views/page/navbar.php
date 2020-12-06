<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="brand">
		 <a href="<?php echo base_url('dashboard'); ?>">
		 	<img width="30" height="21" src="<?php echo base_url('assets/img/logo-dark.png'); ?>" alt="Klorofil Logo"  class="img-responsive logo">
		 </a> 
		
	</div>
	<div class="container-fluid">
		<div class="navbar-btn">
			<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
		</div>
		<div id="navbar-menu">
			<ul class="nav navbar-nav navbar-right">
		<div class="navbar-btn navbar-btn-right">
		</div>
			</ul>
		</div>
		<div id="navbar-menu">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle icon-menu" data-toggle="dropdown">
								<i class="fa fa-envelope-o"></i>
								<span class="badge bg-danger"><?php echo notif(array('kepada' => $this->session->userdata('data_user'), 'status_surat' => 0))->num_rows(); ?></span>
							</a>
					<ul class="dropdown-menu notifications">
						<?php foreach(notif(array('kepada' => $this->session->userdata('data_user'), 'status_surat' => 0))->result() as $k): ?>
						<li><a href="<?php echo site_url('memo/show/'.$k->no_disposisi); ?>" class="notification-item"><span class="dot bg-warning"></span>[DISPOSISI] <?php echo $k->keterangan; ?></a></li>
						<?php endforeach; ?>
						<li><a href="<?php echo site_url('memo'); ?>" class="more">See all notifications</a></li>
					</ul>
				</li>

				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo base_url();?>assets/img/user.png" class="img-circle" alt="Avatar"> <span>Hallo, <?php echo $this->session->userdata('user'); ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo site_url('auth/logout'); ?>"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
					</ul>
				</li>
				<!-- <li>
							<a class="update-pro" href="https://www.themeineed.com/downloads/klorofil-pro-bootstrap-admin-dashboard-template/?utm_source=klorofil&utm_medium=template&utm_campaign=KlorofilPro" title="Upgrade to Pro" target="_blank"><i class="fa fa-rocket"></i> <span>UPGRADE TO PRO</span></a>
						</li> -->
			</ul>
		</div>
	</div>
</nav>
<!-- END NAVIGATION NAVBAR -->
