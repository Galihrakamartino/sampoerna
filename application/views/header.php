<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
					<i class="icon-reorder shaded"></i>
				</a>

			   	<a class="brand" href="#">
			  		Sampoerna<img src="<?php echo base_url('images/logo SIS.png') ?>" width="70">
			  	</a>

				<div class="nav-collapse collapse navbar-inverse-collapse">
					<ul class="nav pull-right">
						  <?php $session_data = $this->session->userdata('logged_in');
            $data['username'] = $session_data['username'];$data['id_pegawai'] = $session_data['id_pegawai'];$data['nama_pegawai'] = $session_data['nama_pegawai']; ?>
            
                            <li><a href="<?php echo base_url('index.php/profil/') ;  ?>"><?php echo $data['nama_pegawai'] ?> </a></li>
					</ul>
				</div><!-- /.nav-collapse -->
			</div>
		</div><!-- /navbar-inner -->
	</div><!-- /navbar -->