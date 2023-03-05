<!-- Page Wrapper -->
<div id="wrapper">

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">
<!-- Main Content -->
<div id="content">
  
 <!-- Topbar -->
 <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Topbar Navbar -->
<ul class="navbar-nav ml-auto">

<!-- Nav Item - Search Dropdown (Visible Only XS) -->

<!-- Dropdown - Messages -->

<!-- Nav Item - Alerts -->
<li class="nav-item dropdown no-arrow mx-1">
<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <img class="img-profile rounded-circle"
        src="<?php echo base_url('assets/img/ntf.png'); ?>" style="width: 30px; height: 30px;">
    <!-- Counter - Alerts -->
    <!-- <span class="badge badge-danger badge-counter">3+</span> -->
</a>
<!-- Dropdown - Alerts -->

<!-- Nav Item - User Information -->
<li class="nav-item dropdown no-arrow">
<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

<!-- Button trigger modal -->
<img data-bs-toggle="modal" data-bs-target="#profile" class="img-profile rounded-circle" src="<?php echo base_url('assets/img/icper.png'); ?>" style="width: 36px; height: 36px;">

<!-- Modal -->
<div class="modal fade" id="profile" tabindex="-1" aria-labelledby="profile_title" aria-hidden="true" >
<div class="modal-dialog">
  <div class="modal-content" style="width: 250px; border-radius: 15px; margin-left: 125%; margin-top: 75px;">
    <div class="modal-header" style="background-color: #D9D9D9; border-radius: 15px 15px 0 0;">
      <h1 class="modal-title ml-auto mr-auto fs-5" id="profile_title">
        <img class="img-profile rounded-circle" src="<?php echo base_url('assets/img/ppk.png'); ?>" style="width: 70px; height: 70px;">
      </h1>
    </div>
    <div class="modal-body" style="text-align: center; color: black;">
      <b><?php echo $this->session->userdata('nama_user'); ?></b>
        <br>
      <?php echo $this->session->userdata('id'); ?> 
    </div>
    <div class="modal-footer">
      <button style="background-color: #1C1E1D; color: white; border-radius: 15px; height: 40px; width: 120px;" type="button" class="btn mr-auto ml-auto mt-1 mb-3" onclick="logout();">
        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M2.96478 1.89982C3.22689 1.89982 3.47825 1.79974 3.66359 1.6216C3.84892 1.44345 3.95304 1.20184 3.95304 0.949909C3.95304 0.697978 3.84892 0.456365 3.66359 0.278222C3.47825 0.10008 3.22689 0 2.96478 0H0.988261C0.726158 0 0.47479 0.10008 0.289455 0.278222C0.10412 0.456365 0 0.697978 0 0.949909V14.2486C0 14.5006 0.10412 14.7422 0.289455 14.9203C0.47479 15.0985 0.726158 15.1986 0.988261 15.1986H2.96478C3.22689 15.1986 3.47825 15.0985 3.66359 14.9203C3.84892 14.7422 3.95304 14.5006 3.95304 14.2486C3.95304 13.9967 3.84892 13.7551 3.66359 13.577C3.47825 13.3988 3.22689 13.2987 2.96478 13.2987H1.97652V1.89982H2.96478Z" fill="white"/>
          <path d="M16.6222 7.04833L13.8353 3.24869C13.6841 3.0439 13.4548 2.90496 13.1974 2.86224C12.94 2.81952 12.6754 2.8765 12.4616 3.02071C12.3547 3.0927 12.2637 3.18433 12.1939 3.2903C12.124 3.39628 12.0767 3.5145 12.0547 3.63814C12.0326 3.76178 12.0363 3.8884 12.0654 4.01068C12.0945 4.13296 12.1486 4.24849 12.2244 4.35059L13.9242 6.64937H13.8353H5.92918C5.66708 6.64937 5.41571 6.74945 5.23037 6.92759C5.04504 7.10573 4.94092 7.34735 4.94092 7.59928C4.94092 7.85121 5.04504 8.09282 5.23037 8.27096C5.41571 8.44911 5.66708 8.54919 5.92918 8.54919H13.8353L12.0564 10.829C11.9785 10.9288 11.9219 11.0423 11.8897 11.1632C11.8575 11.284 11.8503 11.4098 11.8687 11.5333C11.887 11.6567 11.9305 11.7755 11.9966 11.8829C12.0628 11.9902 12.1502 12.084 12.254 12.1588C12.4251 12.2822 12.6332 12.3488 12.847 12.3488C13.0004 12.3488 13.1517 12.3145 13.289 12.2485C13.4262 12.1826 13.5456 12.0868 13.6376 11.9689L16.6024 8.16922C16.729 8.00856 16.7991 7.81337 16.8026 7.61188C16.8062 7.41038 16.743 7.21302 16.6222 7.04833Z" fill="white"/>
        </svg> 
        Keluar
      </button>
    </div>
  </div>
</div>
</div>
</a>
</li>
</ul>

</nav>