<style>
    .btn:active {
        transform: translateY(4px);
    }
    .btn-dark {
        background-color: #1C1E1D;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
    }
    .btn-lg {
        width: 151px;
        height: 45px;
        border-radius: 10px;
    }
</style>

<!-- barisan button atas dewe -->

<hr style="background-color: black; opacity: 0.5; margin-bottom: 28px;">

    <div style="margin-left: 233px;" > 
        <a href="<?php echo base_url('guru/forum') ?>">
            <button class="btn btn-dark btn-lg">Forum</button>
        </a>
        <a style="margin-left: 73px;" href="<?php echo base_url('guru/posting') ?>">
        <button class="btn btn-dark btn-lg">Posting</button>
        </a>
        <a style="margin-left: 73px;" href="<?php echo base_url('guru/penilaian') ?>">
        <button class="btn btn-dark btn-lg">Penilaian</button>
        </a>
        <a style="margin-left: 73px;" href="<?php echo base_url('guru/anggota') ?>">
        <button class="btn btn-dark btn-lg">Anggota</button>
        </a>
    </div>

<hr style="background-color: black; opacity: 0.5; margin-top: 28px; margin-bottom: 29px;">