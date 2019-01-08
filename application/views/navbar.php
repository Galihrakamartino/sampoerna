<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <div class="colorlib-logo"><font style="font-family: 'Rufina';font-size: 25px;color: #fff;">Sampoerna</font><img src="<?php echo base_url('') ;?>images/logo SIS.png" width="70"></div>
    </div>
    <ul class="nav navbar-nav">
      <li <?php if($index == 2){ echo "class='active'"; } ?>><a href="<?php echo base_url('index.php/main') ?>">Home</a></li>
      <li <?php if($index == 3){ echo "class='active'"; } ?>><a href="<?php echo base_url('index.php/main/index3') ?>">About Us</a></li>
      <li <?php if($index == 4){ echo "class='active'"; } ?>><a href="<?php echo base_url('index.php/main/index4') ?>">Product</a></li>
      <li <?php if($index == 5){ echo "class='active'"; } ?>><a href="<?php echo base_url('index.php/main/index5') ?>">Contact Us</a></li>
    </ul>
    <div class="navbar-right">
    	<ul class="nav navbar-nav">
       <li>
         <a class="nav-link" href="<?php echo base_url('index.php/login') ?>">&nbsp;<font style="font-family: 'Rufina';font-size: 20px;color: #00;">Login</font></span>
         </a>	
       </li>
     </ul>	
   </div>
 </div>
</nav>