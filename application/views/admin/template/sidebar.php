<style>
  .btn-lg {
    width: 160px;
    padding: 13px;
    border-radius: 8px;
    text-align: center;
    box-sizing: border-box;
    background-color: #1C1E1D;
    position: fixed;
  }
  .dropdown-toggle::after { display:none; }
</style>

<!-- Sidebar -->
      <ul
        class="navbar-nav bg-gradient-white sidebar sidebar-dark accordion"
        id="accordionSidebar"
      >
        <!-- Sidebar - Brand -->
        <br>
        <a
          class="sidebar-brand d-flex align-items-center justify-content-center"
          href="<?php echo base_url('admin/dashboard') ?>"
          style="margin-top: 30px; position : fixed;"
        >
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink">
              <img
                src="<?php echo base_url('assets/artificialintelligence211536-4c4r-200w.png'); ?>"
                alt=""
              />
            </i>
          </div>
          <div class="sidebar-brand-text mx-3">Akademikuy</div>
        </a>
        

        <!-- Divider -->
        <!-- <hr class="sidebar-divider my-0" /> -->

        <!-- Nav Item - Dashboard -->

        <br><br><br><br> <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('admin/dashboard') ?>">
            <i class="fas fa-fw"></i>
            <span class="btn btn-dark btn-lg" style="color :white;" >Dashboard</span>
            </a>
        </li><br>

        <!-- Divider -->
        <!-- <hr class="sidebar-divider" /> -->

        <!-- Heading -->
        <!-- <div class="sidebar-heading">Manage</div> -->

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/manage_siswa') ?>">
            <i class="fas fa-fw"></i>
            <span class="btn btn-dark btn-lg" style="color :white;">Kelola Siswa</span></a
          >
        </li><br>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/manage_guru') ?>">
            <i class="fas fa-fw"></i>
            <span class="btn btn-dark btn-lg" style="color :white;">Kelola Guru</span></a
          >
        </li><br>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/manage_kelas') ?>">
            <i class="fas fa-fw"></i>
            <span class="btn btn-dark btn-lg" style="color :white;">Kelola Kelas</span></a
          >
        </li><br>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('admin/manage_komentar') ?>">
            <i class="fas fa-fw"></i>
            <span class="btn btn-dark btn-lg" style="color :white;">Kelola Komentar</span></a
          >
        </li><br>

        <!-- Divider -->
        <!-- <hr class="sidebar-divider" /> -->

        <!-- Heading -->
        <!-- <div class="sidebar-heading">Laporan</div> -->

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a
            class="nav-link collapsed"
            data-toggle=""
            data-target="#collapseTwo"
            aria-expanded="true"
            aria-controls="collapseTwo"
            href="<?php echo base_url('admin/manage_lap_guru') ?>"
          >
            <i class="fas fa-fw"></i>
            <span class="btn btn-dark btn-lg" style="color :white;" 
                  >
              Laporan
            </span>
          </a>
        </li> <br>

        <!-- Divider -->
        <!-- <hr class="sidebar-divider d-none d-md-block" /> -->

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

        <!-- Sidebar Message -->
      </ul>
      <!-- End of Sidebar -->