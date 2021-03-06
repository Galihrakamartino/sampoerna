<!DOCTYPE html>
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <title>Edit Profil</title>
        <link type="text/css" href="<?php echo BASE_URL('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo BASE_URL('bootstrap/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
	<link type="text/css" href="<?php echo BASE_URL('css/theme.css" rel="stylesheet') ?>">
	<link type="text/css" href="<?php echo BASE_URL('images/icons/css/font-awesome.css" rel="stylesheet') ?>">
	<link type="text/css" href="<?php echo BASE_URL('select2/dist/css/select2.css" rel="stylesheet') ?>">
</head>
<body>
	<div class="wrapper">
		<div class="container">
			<div class="row">
				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Forms Edit Profil</h3>
							</div>
							<div class="module-body">

									

									<br />

									<?php 
 						echo form_open('profil/editprofil/'.$this->uri->segment(3));

 					?>
 						<?php if (!empty(validation_errors())) { ?>
 						<div class="alert-danger">
 							<?php echo validation_errors(); ?>
 						</div>
 						<?php } ?>
 										<div class="control-group">
											<div class="controls">
												<input type="hidden" id="basicinput" name="idpegawai" value="<?php echo $pegawai2[0]->id_pegawai ?>" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Nama Pegawai</label>
											<div class="controls">
												<input type="text" id="basicinput" name="namapegawai" placeholder="Nama...." value="<?php echo $pegawai2[0]->nama_pegawai ?>" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Alamat</label>
											<div class="controls">
												<input type="text" id="basicinput" name="alamat" placeholder="Alamat...." value="<?php echo $pegawai2[0]->alamat ?>" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Username</label>
											<div class="controls">
												<input type="text" id="basicinput" name="username" placeholder="Username...." value="<?php echo $pegawai2[0]->username ?>" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Password Lama</label>
											<div class="controls">
												<input type="password" id="basicinput" name="passwordlama" placeholder="Kosongi bila tidak ingin mengganti" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Password Baru</label>
											<div class="controls">
												<input type="password" id="basicinput" name="passwordbaru" placeholder="Kosongi bila tidak ingin mengganti" class="span8">
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Konfirmasi Password Baru</label>
											<div class="controls">
												<input type="password" id="basicinput" name="konfirmpassword" placeholder="Kosongi bila tidak ingin mengganti" class="span8">
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">Submit Form</button>
											</div>
										</div>
									<?php echo form_close(); ?>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->

	<div class="footer">
	</div>

	<script src="<?php echo BASE_URL('scripts/jquery-1.9.1.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo BASE_URL('scripts/jquery-ui-1.10.1.custom.min.js')?> " type="text/javascript"></script>
        <script src="<?php echo BASE_URL('bootstrap/js/bootstrap.min.js" type="text/javascript') ?>"></script>
        <script src="<?php echo BASE_URL('select2/dist/js/select2.full.js" type="text/javascript') ?>"></script>
		<script src="<?php echo BASE_URL('scripts/flot/jquery.flot.js') ?>" type="text/javascript"></script>
		<script type="text/javascript">
			$(function() {
				$('.select2').select2()
				$('.select2').change(function() {
					$('#keterangan').text('');
					$.each($(this).val(),function(index, el) {
						$('#keterangan').append(el+'\n');
					});
				});
			})
		</script>
</body>