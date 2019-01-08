<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Halaman berita</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('') ;?>css2/animate.css">
	<link href='https://fonts.googleapis.com/css?family=Rufina' rel='stylesheet'>
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('css2/icomoon.css') ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('css2/bootstrap.css') ?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url('css2/flexslider.css') ?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url('css2/flexslider.css') ?>">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url('css2/owl.carousel.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('') ;?>css2/owl.theme.default.min.css">

	<link rel="stylesheet" href="<?php echo base_url('') ;?>css2/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<!-- Modernizr JS -->
	<script src="<?php echo base_url('') ;?>js3/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>
		</header>
		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center animate-box intro-heading">
						<h2 id="sekilas"><font style="font-family: 'Rufina';font-size: 50px;"><?php echo $berita[0]->judul; ?></font></h2>
						<h3><?php echo $berita[0]->tanggal; ?></h3>
					</div>
				</div>
				
				<div style="text-align: center;">
					<div class="col-md-12 animate-box">
						<div class="services">	
							<p align="center"><img src='<?php echo base_url('uploads/'); echo $berita[0]->foto; ?>' width='200px'><br>
							</p>
							<p align="center">
								<?php echo $berita[0]->isi_berita; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>
<!-- jQuery -->
<script src="<?php echo base_url('') ;?>js3/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php echo base_url('') ;?>js3/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="<?php echo base_url('') ;?>js3/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="<?php echo base_url('') ;?>js3/jquery.waypoints.min.js"></script>
<!-- Flexslider -->
<script src="<?php echo base_url('') ;?>js3/jquery.flexslider-min.js"></script>
<!-- Counters -->
<script src="<?php echo base_url('') ;?>js3/jquery.countTo.js"></script>
<!-- Owl Carousel -->
<script src="<?php echo base_url('') ;?>js3/owl.carousel.min.js"></script>

<!-- Main JS (Do not remove) -->
<script src="<?php echo base_url('') ;?>js3/main.js"></script>

</body>
</html>

