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
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style type="text/css" media="screen">
	.gambar {
		height: 150px;
		width: 150px;
		overflow: hidden;

	}
</style>

</head>
<body>

	<div class="wrapper">
		<div class="container">
			<div class="row">

				<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Forms List Pegawai</h3>
							</div>
							<div class="module-body">
								<div class="module-body table">
									<table border="1" class="w3-table-all">
										<tr><th>No</th><th>Nama Pegawai</th><th>Alamat</th><th>Username</th><th>Foto</th><th>EDIT</th><th>DELETE</th></tr>
										<?php
										$no = 1;
										foreach ($pegawai as $f){
											echo "<tr class='w3-hover-black'>
											<td>".$no."
											<td>$f->nama_pegawai</td>
											<td>$f->alamat</td>
											<td>$f->username</td>
											<td><div class='gambar'>";
											if ($f->foto != null) {
												echo "<img src='".base_url('uploads/')."$f->foto' \>";
											} else {
												echo "<img src='".base_url('uploads/default_user.png')."'\>";
											}


											echo "</div></td>
											<td> ".anchor('kepegawaian/edit/'.$f->id_pegawai,'Edit')."</td>
											<td> ".anchor('kepegawaian/hapus/'.$f->id_pegawai,'Delete')."</td> 
											</tr>";
											$no++;
										}
										?>
									</table>
								</div>
								<a href="<?php echo base_url('index.php/kepegawaian/insert/');?>"><button type="button" class="btn btn-warning">Tambah Pegawai</button></a> 
								
							</div>
						</div>

						
					</div><!--/.content-->
				</div><!--/.span9-->
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
	<div class="show">
		<div class="overlay"></div>
		<div class="img-show">
			<span>X</span>
			<img src="">
		</div>
	</div>


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