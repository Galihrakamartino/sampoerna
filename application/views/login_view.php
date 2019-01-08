<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman Login</title>
	<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<?php echo form_open('login/cekLogin') ?>
			<?php echo validation_errors(); ?>
				<div class="form-group">
					<legend>Login ke Sistem</legend>
				</div>
			
				<div class="form-group">
					<label for="">Username</label>
					<input type="text" class="form-control" id="username" name="username" placeholder="username">
				</div>

				<div class="form-group">
					<label for="">Password</label>
					<input type="password" class="form-control" id="password" name="password" placeholder="password">
				</div>

				<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>	
				<?php echo "<a href='".base_url()."index.php/login/create' class='btn btn-primary'>Daftar</a>"; ?>
				</div>

			<?php echo form_close(); ?>
		</div>
	</div>
</body>
</html>