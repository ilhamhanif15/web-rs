<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" id="mySearch" onkeyup="searchMenu()" class="form-control" placeholder="Search...">
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
        <li class="menuList"><a href="<?php echo base_url().'master_controller/home' ?>"><i class="fa fa-home"></i> <span  class="menuName" >Beranda</span></a></li>
        <?php if($this->session->userdata('role') == 'Admin') { ?>
        <li class="menuList"><a href="<?php echo base_url().'master_controller/user' ?>"><i class="fa fa-user"></i> <span class="menuName">User</span></a></li>
        <li class="menuList">
          <a href="<?php echo base_url().'master_controller/log' ?>">
            <i class="fa fa-history"></i> <span class="menuName">Aktivitas</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
            </span>
          </a>
        </li>
        <?php } ?>
        <li class="menuList"><a href="<?php echo base_url().'master_controller/pajak' ?>"><i class="fa fa-server"></i> <span class="menuName">Registrasi</span></a></li>
        <li class="menuList"><a href="<?php echo base_url().'master_controller/lowonganpekerjaan' ?>"><i class="fa fa-money"></i> <span class="menuName">Keuangan</span></a></li>
        <li class="menuList"><a href="<?php echo base_url().'master_controller/produk' ?>"><i class="fa fa-folder-open"></i> <span class="menuName">Data Seminar Lama</span></a></li>
       <!--  <li class="menuList"><a href="<?php echo base_url().'master_controller/aspirasi' ?>"><i class="fa fa-comment"></i> <span class="menuName">Aspirasi</span></a></li>
        <li class="menuList"><a href="<?php echo base_url().'master_controller/pengaduan' ?>"><i class="fa fa-exclamation-triangle"></i> <span class="menuName">Pengaduan</span></a></li>
        <li class="treeview treeLyn menuList">
          <a href="#" class="pullMenu">
            <i class="fa fa-file-signature"></i> <span class="menuName">Layanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu lynMenu">
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/semua_layanan' ?>"><i class="fa fa-file-pdf"></i> Semua Layanan</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/akta_kelahiran' ?>"><i class="fa fa-file-pdf"></i> Akta Kelahiran</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/surat_kematian' ?>"><i class="fa fa-file-pdf"></i> Surat Kematian</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/tempat_tinggal' ?>"><i class="fa fa-file-pdf"></i> Tempat Tinggal</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/perbedaan_identitas' ?>"><i class="fa fa-file-pdf"></i> Perbedaan Identitas</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/keterangan_usaha' ?>"><i class="fa fa-file-pdf"></i> Surat Keterangan Usaha</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/skck' ?>"><i class="fa fa-file-pdf"></i> SKCK</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/domisili_paud' ?>"><i class="fa fa-file-pdf"></i> Domisili Paud</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/domisili_yayasan' ?>"><i class="fa fa-file-pdf"></i> Domisili Yayasan</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/izin_rame_rame' ?>"><i class="fa fa-file-pdf"></i> Izin Keramaian</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/survei_lapangan' ?>"><i class="fa fa-file-pdf"></i> Survai Lapangan</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/ket_status_pernikahan' ?>"><i class="fa fa-file-pdf"></i> Ket. Status Pernikahan</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/ket_pengakuan_cerai' ?>"><i class="fa fa-file-pdf"></i> Ket. Pengakuan Cerai</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/ket_domisili_koperasi' ?>"><i class="fa fa-file-pdf"></i> Domisili Koperasi</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/ket_domisili_perusahaan' ?>"><i class="fa fa-file-pdf"></i> Domisili Perusahaan</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/ket_domisili_usaha' ?>"><i class="fa fa-file-pdf"></i> Domisili Usaha</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/ket_tidak_memiliki_rumah' ?>"><i class="fa fa-file-pdf"></i> Ket. Tidak Memiliki Rumah</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/ket_tidak_mampu' ?>"><i class="fa fa-file-pdf"></i> Ket. TIdak Mampu</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/ket_penghasilan' ?>"><i class="fa fa-file-pdf"></i> Ket. Penghasilan</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/ket_sudah_menikah' ?>"><i class="fa fa-file-pdf"></i> Ket. Sudah Menikah</a></li>
            <li class="menuList2" ><a class="menuName2" href="<?php echo base_url().'master_controller/Layanan/ket_ahli_waris' ?>"><i class="fa fa-file-pdf"></i> Ket. Ahli Waris</a></li>
          </ul>
        </li>
        <li class="menuList"><a href="<?php echo base_url().'master_controller/pengaturan' ?>"><i class="fa fa-gears"></i> <span class="menuName">Pengaturan</span></a></li> -->
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>