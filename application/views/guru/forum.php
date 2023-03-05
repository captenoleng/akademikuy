<?php $this->load->view('guru/template/header'); ?>

<link rel="stylesheet" href="../assets/css/sb-admin-2.min.css">
<link href="<?php echo base_url('/assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<?php $this->load->view('guru/template/gurfor'); ?>
<?php $this->load->view('guru/template/iconatas'); ?>
<?php $this->load->view('guru/template/barisanbtn'); ?>

<body>
    <main>
    <div class="container-fluid" style="margin-top:10px;">
    <div class="row" style="">
    <div class="container" style="margin-bottom:25px; margin-top:25px; background-color:white; width: 1067px; height: 384px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;">
    <div class="row">
        <div class="col-md-4" style="height:370px;">
            <div class="heading-forum">
            Nama Mata Pelajaran
            </div>
            <div class="heading-day">
            Hari
            </div>
            <div class="heading-teacher">
            Nama lengkap Guru
            </div>
        </div>
    <div class="col-md-8 forum">
        <img src="<?= base_url('assets/img/grfm.svg') ?>" alt="" srcset="">
        </div>
        </div>
        </div>
    </div>
    <div class="wrapper">
    <div class='col-md-4' style="margin-left:105px; background-color: white; width: 271px; height: 274px;;
    box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;margin-bottom:10px; float: right;position: absolute;overflow: auto;margin-top:15px;">
        <div class="list-tugas" style="font-style: normal;font-size: 20px;color:#000;margin-left:20px;margin-top:19px;min-height:200px !important;">    
            <h5>Tugas Mendatang</h5>
                <img src="<?= base_url('assets/img/ireng.svg') ?>" alt=""> <span style="font-size: 16px;">Ntar pake looping dari Database</span> <br>
                <img src="<?= base_url('assets/img/ireng.svg') ?>" alt=""> <span style="font-size: 16px;">Yaa Beginilah</span> <br>
           </div>
        </div>


        <div class="col-md-8 content" style="height:auto;margin-left:350px;overflow:hidden;">
            <div>
        <div class="contents" style="width: 755px;
height: 381px; margin-left: 48px;">
<div class="form-forum">
<form action="">
    <label for="" style="padding-top:30px;font-style: normal;font-size: 15px;color: #000000;margin-left:55px; ">Umumkan Sesuatu Ke Kelas</label>
    <textarea name="pengumuman" id="pengumuman" cols="72" rows="8" style="background: #E1DAED;border: 1px solid #000000;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);border-radius: 10px;display:block;margin-left:auto;margin-right:auto; padding: 16px;"></textarea>
<table>
    <tr>
        <td style="padding-right: 366px"><input type="file" id="actual-btn" hidden/><label for="actual-btn"><img src="<?= base_url('assets/img/lamp.svg') ?>" alt="" style="margin-left: 64px;"></label></td>
        <td style="padding: 10px"><input type="reset" value="batal"></td>
        <td style="padding: 10px"><input type="submit" value="posting"></td>
    </tr>
</table>
</form>
</div>
</div>  
</div>
</div>

<!-- kontennya guru yang udah di post -->

<div style="margin-left: 410px;">
    <div class="contents" style="width: 755px; height: auto;">
        <div class="card">
            <div class="card-header">
        <div class="row">
            <div class="col-xs-4">
                <i class="fa fa-user"></i>
            </div>
            <div class="col-xs-4">
                <div class="teacher-name">
                    Santie Ardiene
                </div>
                <div class="date-class">
                    8 Januari 2023
                </div>
            </div>
                <div class="col-xs-4" style="left:700px;line-height:40px;position:absolute;">
                    <i class="fa fa-ellipsis-v"></i>     
                </div>
        </div>
        </div>

        <div class="card-body">
            <div>
            <P>
            Selamat datang di kelas Pemrograman Dasar ini anak-anak. Fungsi dari kelas ini yaitu:<br><br>

            1. Sebagai tempat untuk mengakses materi maupun tugas.<br>
            2. Sebagai tempat untuk pengumpulan tugas.<br>
            3. Sebagai tempat untuk diskusi terkait tugas maupun materi yang mungkin kurang jelas.<br><br>

            Di sini saya, selaku guru akan berusaha membimbing kalian semuanya. Mohon kerja samanya ya anak-anak sekalian. Tetap semangat belajarnya!
            </div>
        </div>
        </div>
    </div>
</div>

<!-- kontennya guru yang udah di post -->

<div style="margin-left: 410px;">
    <div class="contents" style="width: 755px; height: auto;">
        <div class="card">
            <div class="card-header">
        <div class="row">
            <div class="col-xs-4">
                <i class="fa fa-user"></i>
            </div>
            <div class="col-xs-4">
                <div class="teacher-name">
                    Santie Ardiene
                </div>
                <div class="date-class">
                    8 Januari 2023
                </div>
            </div>
                <div class="col-xs-4" style="left:700px;line-height:40px;position:absolute;">
                    <i class="fa fa-ellipsis-v"></i>     
                </div>
        </div>
        </div>

        <div class="card-body">
            <div>
            <P>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam labore inventore similique quod magnam eos soluta ratione veritatis, enim quos impedit quae corporis molestias fuga, eaque excepturi. Quis, quibusdam. Ullam!
            </div>
        </div>
        </div>
    </div>
</div>

<footer style="margin-top: 105px;">
    <!-- ini cuman dummy -->
</footer>

</main>
</body>