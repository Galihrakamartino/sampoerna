<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?=$judul ?></title>
        <link type="text/css" href="<?php echo BASE_URL('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
        <link type="text/css" href="<?php echo BASE_URL('bootstrap/css/bootstrap-responsive.min.css') ?>" rel="stylesheet">
        <link type="text/css" href="<?php echo BASE_URL('css/theme.css') ?>" rel="stylesheet">
        <link type="text/css" href="<?php echo BASE_URL('images/icons/css/font-awesome.css') ?>" rel="stylesheet">
        
    </head>
    <body>
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="span9">
                        <div class="content">
                           <div style="background-color:#cccccc; overflow: auto;" class="clear_fix">
                            <h1>Selamat Datang : <?php echo $this->session->userdata('logged_in')['username'] ?> </h1>
                            <h1>Jabatan [  <?php echo $this->session->userdata('logged_in')['level'] ?> ]</h1>
                           </div>
                        <!--/.content-->
                    </div>
                    <!--/.span9-->
                </div>
            </div>
            <!--/.container-->
        </div>
        <!--/.wrapper-->
        <div class="footer">
            <div class="container">
                <b class="copyright">&copy; Sampoerna </b>All rights reserved.
            </div>
        </div>
        <script src="<?php echo BASE_URL('scripts/jquery-1.9.1.min.js') ?>" type="text/javascript"></script>
        <script src="<?php echo BASE_URL('scripts/jquery-ui-1.10.1.custom.min.js')?> " type="text/javascript"></script>
        <script src="<?php echo BASE_URL('bootstrap/js/bootstrap.min.js" type="text/javascript') ?>"></script>
        <script src="<?php echo BASE_URL('scripts/flot/jquery.flot.js" type="text/javascript') ?>"></script>
        <script src="<?php echo BASE_URL('scripts/flot/jquery.flot.resize.js" type="text/javascript') ?>"></script>
        <script src="<?php echo BASE_URL('scripts/datatables/jquery.dataTables.js" type="text/javascript') ?>"></script>
        <script src="<?php echo BASE_URL('scripts/common.js') ?>    " type="text/javascript"></script>
      
    </body>
