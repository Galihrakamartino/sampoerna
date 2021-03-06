<!DOCTYPE html>
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title></title>
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
								<h3>Forms Pengobatan</h3>
							</div>
							<div class="module-body">



								<br />


								<a href="<?php echo base_url('index.php/profil/editprofil/'); ?>"><button type="button" class="btn btn-success">Edit Profil</button></a> 
								<div>
									<center>
										<?php 
										if ($pegawai[0]->foto != null) { ?>
										<img src='<?php echo base_url('uploads/'); echo $pegawai[0]->foto; ?>' width='200px'>
										<?php } else { ?>
										<img src='<?php echo base_url('uploads/default_user.png'); ?>' width='200px'>
										<?php } ?><br><br>

										<a href="<?php echo base_url('index.php/profil/editfoto/'); ?>"><button type="button" class="btn btn-danger">Edit Foto</button></a> </center>
									</div>
									<br><br>

										<div>
											<center>
												<font size="2">Nama</font><br><br>
												<font size="6"><?php echo $pegawai[0]->nama_pegawai; ?></font>
											</center>
										</div>
										<br>
										<br>
										<br>
										<div>
											<center>
												<font size="2">Alamat</font><br><br>
												<font size="6"><?php echo $pegawai[0]->alamat; ?></font>
											</center>
										</div>
										<br>
										<br>
										<br>
										<div>
											<center>
												<font size="2">Level</font><br><br>
												<font size="6"><?php echo $pegawai[0]->level; ?></font>
											</center>
										</div>

										<br>
										<br>
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