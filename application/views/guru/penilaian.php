<?php $this->load->view('guru/template/header'); ?>

<body style="background-color: #63AFC8;">
    <?php $this->load->view('guru/template/iconatas'); ?>
    <?php $this->load->view('guru/template/barisanbtn'); ?>

    <header style="margin-bottom: 100px;"></header>

    <div class="card" style="margin-top: 47px; margin-left: 236px; width: 823px; height: 355px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 12px; border:none !important;">
        <div class="card-header" style="height: 98px; background-color: #1C1E1D; color: white; border-radius: 12px 12px 0 0;">
        <img style="margin-right: 18px; margin-top: 12px; float: left;" src="<?= base_url('assets/img/file.svg') ?>"> 
        <a href="<?= base_url('guru/penilaian2') ?>" style="color: white; font-size: 25px; float: left; margin-top: 20px;">
            Tugas : Nama Tugas
        </a>
        <h6 style="font-size: 15px; float: right; margin-top: 44px; margin-right: 24px;">
            Tanggal, hari bulan tahun
        </h6>
        </div>
    <div class="card-body" style="color: black; ">
        <img style="margin-top: 32px; margin-left: 118px; margin-right: 118px;" src="<?= base_url('assets/img/penis.svg') ?>">
        
    </div>
    </div>

    <footer style="margin-top: 74px;"></footer>
    <?php $this->load->view('guru/template/footer'); ?>
</body>