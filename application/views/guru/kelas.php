<?php $this->load->view('guru/template/header'); ?>
<body style="background-color: #63AFC8;">
<?php $this->load->view('guru/template/iconatas'); ?>
    
    <hr style="background-color: black; opacity: 0.5; margin-bottom: 115px;">

<?php foreach ($kelas as $k) : ?>

<div class="card float-left" style="width: 285px; margin-left: 110px; margin-bottom: 110px; 
    border-radius: 20px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); color: black;">
    <img src="<?php echo base_url('assets/img/telek.svg') ?>" class="card-img-top" style="width: 283px; height:   104px; border-radius: 20px 20px 0px 0px;">
    <div class="card-body" style="height: 150px;">
        <a href="<?= base_url('guru/forum/' . $k['kelas_id']); ?>" class="card-title" style="font-weight: 400; font-size: 25px; color: black;">
            <?= $k['nama_kelas']; ?>
        </a>
        <p class="card-text" style="font-weight: 400; font-size: 15px;">
            <?= $k['nip']; ?>
        </p>
    </div>
</div>

<?php endforeach; ?>

<?php $this->load->view('guru/template/footer'); ?>

</body>