<style type="text/css" media="screen">
.widget-menu {
  background-color: #fff;
}
</style>

<div class="span3">
  <div class="sidebar">
   <ul class="widget widget-menu unstyled">
    <li class="active"><?php echo "<a href='".base_url()."index.php/home'>"; ?><i class="menu-icon icon-dashboard"></i>Beranda
    </a></li>
    <li>
      <?php if($this->session->userdata('logged_in')['level'] == 'admin' ||$this->session->userdata('logged_in')['level'] == 'superadmin' ): ?>
        <li><?php echo "<a href='".base_url()."index.php/kepegawaian'>"; ?><i class="menu-icon icon-check"></i>User</a>
          <li><?php echo "<a href='".base_url()."index.php/Berita'>"; ?><i class="menu-icon icon-inbox"></i>Berita</a>
            <li><?php echo "<a href='".base_url()."index.php/rh'>"; ?><i class="menu-icon icon-share"></i>Running Hour</a>
               <?php endif; ?>  
             </ul>
             <!--/.widget-nav-->

             <!--/.widget-nav-->
 <ul class="widget widget-menu unstyled">
              <li><a class="collapsed" data-toggle="collapse" href="#togglePages2"><i class="menu-icon icon-cog">
              </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
              </i>Pengaturan Mesin</a>
              <ul id="togglePages2" class="collapse unstyled">
                <li><?php echo "<a href='".base_url()."index.php/machine'>"; ?><i class="menu-icon icon-magnet"></i>Machine</a>
              
             </ul>
           </li>
           <br>
             <ul class="widget widget-menu unstyled">
              <li><a class="collapsed" data-toggle="collapse" href="#togglePages"><i class="menu-icon icon-cog">
              </i><i class="icon-chevron-down pull-right"></i><i class="icon-chevron-up pull-right">
              </i>Pengaturan Akun</a>
              <ul id="togglePages" class="collapse unstyled">
               <li><?php echo "<a href='".base_url()."index.php/profil/'>"; ?><i class="menu-icon icon-inbox"></i>Edit Akun</a></li>
             </ul>
           </li>
           <li><?php echo "<a href='".base_url()."index.php/login/logout'>"; ?><i class="menu-icon icon-signout"></i>Logout </a></li>
         </ul>

       </div><!--/.sidebar-->
                </div><!--/.span3-->