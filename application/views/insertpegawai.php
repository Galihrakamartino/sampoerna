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

								<?php if (!empty($error)) {
									echo $error;
								} ?>

								<br />

								<?php 
								echo form_open_multipart('kepegawaian/insert');
								?>
								<?php if (!empty(validation_errors())) { ?>
								<div class="alert-danger">
									<?php echo validation_errors(); ?>
								</div>
								<?php } ?>

								<div>
									<center><img id="foto" src='<?php echo base_url('uploads/default_user.png'); ?>' width='200px'></center>	
								</div>

								<div class="control-group">
									<label class="control-label" for="basicinput">Nama Pegawai</label>
									<div class="controls">
										<input type="text" id="basicinput" name="namapegawai" placeholder="Nama...."  class="span8">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="basicinput">Alamat</label>
									<div class="controls">
										<input type="text" id="basicinput" name="alamat" placeholder="Alamat...."  class="span8">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="basicinput">Username</label>
									<div class="controls">
										<input type="text" id="basicinput" name="username" placeholder="Username...."  class="span8">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="basicinput">Password</label>
									<div class="controls">
										<input type="password" id="basicinput" name="password" placeholder="Password.." class="span8">
									</div>
								</div>
								<div class="control-group">
											<label class="control-label">Level</label>
											<select class="form-control select2" name="level">
												
													<option value="superadmin">superadmin</option>
													<option value="supervisor">supervisor</option>
													<option value="admin">admin</option>
													<option value="user">user</option>
												
											</select>
										</div>
								<div class="control-group">
									<label class="control-label" for="basicinput">Foto Pegawai</label>
									<div class="controls">
										<input type="file" name="userfile" size="30" onchange="readURL(this);"/><font color="red" >*jika perlu	</font>
									</div>
								</div>
								

								<div class="control-group">
									<div class="controls">
										<button type="submit" class="btn btn-info">Submit Form</button>
									</div>
								</div>
								<?php echo form_close(); ?>
							</div>
						</div>

						
						<script>
							function readURL(input) {
								if (input.files && input.files[0]) {
									var reader = new FileReader();

									reader.onload = function (e) {
										$('#foto')
										.attr('src', e.target.result)
										.width(200);
									};

									reader.readAsDataURL(input.files[0]);
								}
							}	
						</script>

						
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