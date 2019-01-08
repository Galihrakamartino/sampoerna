<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Print semua</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div class="container">
		<h1 class="text-center">Semua Pengobatan Selesai</h1>
		<br>
		<br>
		
		<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pasien</th>
						<th>Umur</th>
						<th>Keluhan</th>
						<th>Foto Luka</th>
						<th>Keterangan Obat</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<?php
					$no = 1;
					foreach ($kelir as $row) {

						echo "<tr><td>";
						echo $no;
						echo "</td><td>";
						echo $row['nama_pasien'];
						echo "</td><td>";
						echo $row['umur'];
						echo "</td><td>";
						echo $row['keluhan'];
						echo "</td><td>";
						echo $row['foto_luka'];
						echo "</td><td>";
						echo $row['ket_obat'];
						echo '</td><td>';
						if ($row['status'] == 'verifikasi') {
							echo "<span class='glyphicon glyphicon-check'></span>  <i>Sudah verifikasi</i>";
						} else {
							echo "<span class='glyphicon glyphicon-ok'></span>  <i>Belum Verifikasi</i>";
						}
						
						echo "</td></tr>";
						$no++;
					}



					?>
				</tbody>
			</table>
			</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
 		<script src="Hello World"></script>
	</body>
</html>