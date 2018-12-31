<header class="main-header">
  <!-- Logo -->
  <a href="<?php echo base_url().'admin/dashboard' ?>" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>HISFARSIJABAR</b></span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <!-- <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a> -->

    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
    
            <span class="hidden-xs"><?php echo $this->session->userdata('nama') ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header" style="height: auto;">
              <img src="<?php echo base_url().'assets/images/avatar2.png' ?>" class="img-circle" alt="User Image">
              <p>
                <?php echo $this->session->userdata('nama').'<br/>'.$this->session->userdata('email') ?>
              </p> 
            </li>
            <!-- Menu Footer-->
            <li class="user-footer" style="background: #3c8dbc">
              <div>
                <a href="<?php echo base_url().'admin/logout' ?>" style="width: 100%" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>