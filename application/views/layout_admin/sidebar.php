<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" id="mySearch" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree" id="myMenu">
        <li class="header">MAIN MENU</li>
        <li class="menuList"><a href="<?php echo base_url().'admin/dashboard' ?>"><i class="fa fa-home"></i> <span  class="menuName" >Beranda</span></a></li>
        <li class="menuList"><a href="<?php echo base_url().'admin/akun' ?>"><i class="fa fa-users"></i> <span  class="menuName" > Akun</span></a></li>
        <li class="menuList"><a href="<?php echo base_url().'registrasi' ?>"><i class="fa fa-server"></i> <span class="menuName">Registrasi</span></a></li>
        <li class="menuList"><a href="<?php echo base_url().'dataseminarlama' ?>"><i class="fa fa-folder-open"></i> <span class="menuName">Data Seminar Lama</span></a></li>
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>