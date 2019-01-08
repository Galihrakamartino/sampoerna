<!DOCTYPE html>
<html lang="en">


<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Berita</title>
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
								<h3>Forms Edit Berita</h3>
							</div>
							<div class="module-body">



								<br />

								<?php 
								echo form_open_multipart('berita/edit/'.$this->uri->segment(3));

								?>
								<?php if (!empty(validation_errors())) { ?>
								<div class="alert-danger">
									<?php echo validation_errors(); ?>
								</div>
								<?php } ?>
								<?php if (!empty($error)) { ?>
								<div class="alert-danger">
									<?php echo $error; ?>
								</div>
								<?php } ?>
								<div class="control-group">
									<div class="controls">
										<input type="hidden" id="basicinput" name="idberita" value="<?php echo $berita[0]->id_berita ?>" class="span8">
									</div>
								</div>
								<div class="control-group">
									<?php if ($berita[0]->foto == null) { ?>
									<img id="foto" src='<?php echo base_url('images/news.jpeg'); ?>' width='200px'>
									<?php } else { ?>
									<img id="foto" src='<?php echo base_url('uploads/'); echo $berita[0]->foto; ?>' width='200px'>
									<?php }
									?>
								</div>
								<div class="control-group">
									<label class="control-label" for="basicinput">Gambar Berita</label>
									<div class="controls">
										<input type="file" name="userfile" size="30" onchange="readURL(this);"/><font color="red" >*jika perlu	</font>
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="basicinput">Judul Berita</label>
									<div class="controls">
										<input type="text" id="basicinput" name="judul" value="<?php echo $berita[0]->judul ?>" class="span8">
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="basicinput">Isi Berita</label>
									<div class="controls">
										<textarea rows="20" cols="50" class="span8" name="isi"><?php echo $berita[0]->isi_berita ?></textarea>
									</div>
								</div>

								<div class="control-group">
									<label class="control-label" for="basicinput">Tanggal Berita</label>
									<div class="controls">
										<input type="date" id="basicinput" name="tanggal" value="<?php echo $berita[0]->tanggal ?>" class="span8">
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