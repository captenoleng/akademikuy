<?php $this->load->view('guru/template/header'); ?>

<link rel="stylesheet" href=".../.../.../assets/css/sb-admin-2.min.css">
<link rel="stylesheet" href=".../.../.../assets/css/gurpel.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<body id="page-top" style="background-color: #63AFC8;">

<?php $this->load->view('guru/template/iconatas'); ?>              
<?php $this->load->view('guru/template/barisanbtn'); ?>

    <div style="margin-left: 84px;">
        <a href="#">
            <button type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-dark btn-lg"><i class="fa-regular fa-plus" style="color: white;"></i>    Buat</button>
        </a>
        <a style="margin-left: 833px;" href="#">
            <button class="btn btn-dark btn-lg">Posting</button>
        </a>
    </div>

<!-- Card kecil seng kanan -->

<div class="card float-right" style="color: black; margin-top: 59px; margin-right: 84px; width: 313px; height: 400px; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px;">
  <div class="card-body">
        <h6 style="font-size: 25px; margin-left: 26px; margin-top: 78px;">Batas Nilai</h6>
        <div class="dropdown">
            <input class="btn btn-secondary dropdown-toggle" type="input" data-toggle="dropdown" aria-expanded="false" style="background-color: #E1DAED; color: black; margin-left: 26px; width: 225px;
                                         height: 44px; border: none; outline: none; border-radius: 0px; text-align: left;"
            value="100"                             
            >
            <!-- <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Telek</a></li>
            </ul> -->
        </div>
        <h6 style="font-size: 25px; margin-left: 26px; margin-top: 36px;">Batas Waktu</h6>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false" style="background-color: #E1DAED; color: black; margin-left: 26px; width: 225px;
                                         height: 44px; border: none; outline: none; border-radius: 0px; text-align: left;">
                Iki Tanggalan coeg!?
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Cok</a></li>
                <li><a class="dropdown-item" href="#">Seng genah</a></li>
                <li><a class="dropdown-item" href="#">Mosok Ngene</a></li>
            </ul>
        </div>
  </div>
</div>

<!-- Card Jumbo isine Form -->
<form action="post">
<div class="card" style="color: black; margin-left: 84px; margin-top: 59px; margin-bottom: 324px; background: #FFFFFF; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; width: 776px;">
  <div class="card-body">
    <div class="card" style="background: #FFFFFF; border: 1px solid #000000; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px;margin: 140px 50px 0 50px;">
    <div class="card-body">
        <button style="color: white; background: #1C1E1D; border-radius: 10px;
                      box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); width: 62px; height: 27px;">
                      
              Judul
        
        </button> <br>
          <textarea style="border: none; outline: none; margin: 29px 54px 35px 54px; width: 490px; height: 63px; background-color: #E1DAED; padding: 16px;"></textarea>
    </div>
    </div>
  </div>
<div class="card-body">
    <div class="card" style="background: #FFFFFF; border: 1px solid #000000; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); border-radius: 10px; margin: 20px 50px 0 50px;">
    <div class="card-body">
    <button style="color: white; background: #1C1E1D; border-radius: 10px;
                  box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); width: 183px; height: 27px;">
                  
            Deskripsi dan Instruksi
          
    </button> <br>
        <textarea style="border: none; outline: none; margin: 29px 54px 35px 54px; width: 490px; height: 188px; background-color: #E1DAED; padding: 16px;"></textarea>
    </div>
    </div>
    </div>

    <div style="margin-left: 60px; margin-top: 30px; margin-bottom: 156px;">
        <button type="reset" class="btn btn-dark btn-lg" style="width: 95px; font-size: 15px;">Batal</button>
        <button type="submit" class="btn btn-dark btn-lg" style="width: 95px; font-size: 15px;">Posting</button>
    </div>
</div>
</form>
<?php $this->load->view('guru/template/footer'); ?>

</body>