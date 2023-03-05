<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AkademuKuy - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url('/assets/vendor/fontawesome-free/css/all.min.css'); ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url('/assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('/assets/vendor/datatables/dataTables.bootstrap4.min.css') ?>" rel="stylesheet">

    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.8/dist/sweetalert2.min.css">

    <link href="<?php echo base_url('/assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">

</head>

<body class="bg-gradient-info">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <div class="sidebar-brand d-flex align-items-center justify-content-center">
                                        <div class="sidebar-brand-icon rotate-n-15">
                                            <img src="<?php echo base_url('assets/artificialintelligence211536-4c4r-200w.png'); ?>" alt=""/>
                                        </div>
                                        <div class="sidebar-brand-text mx-3">Akademikuy</div>
                                      </div>
                                    </div>
                                        <h1 class="h4 text-gray-900 mb-4">Selamat Datang</h1>
                                    	<form class="user" action="javascript:proseslogin();" id="formlogin">
                                        	<div class="form-group">
                                            	<label for="Username" class="form-label">Username</label>
                                            	<input type="id" class="form-control form-control-user" id="id" placeholder="Masukkan Username...">
                                        	</div>
                                        	<div class="form-group">
                                            	<label for="password" class="form-label">Password</label>
                                            	<input type="password" class="form-control form-control-user" id="password" placeholder="Masukkan Kata Sandi">
                                        	</div>
                                        	<div class="form-group">
                                        		<select class="btn btn-secondary" id="role">
													<option selected>Login Sebagai?</option>
													<option value="1">Admin</option>
													<option value="2">Guru</option>
													<option value="3">Siswa</option>
												</select>
                                        	</div>
                                        	<div class="form-group">
                                            	<div class="custom-control custom-checkbox small">
                                                	<input type="checkbox" class="custom-control-input" id="customCheck">
                                                	<label class="custom-control-label" for="customCheck">Ingat Username</label>
                                            	</div>
                                        		<button type="submit" class="btn btn-dark btn-user btn-block">Login</button>
											</div>
										</form>
                                        <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <?php $this->load->view('script_login'); ?>
    
    <script src="<?php echo base_url('/assets/vendor/jquery/jquery.min.js') ?>"></script>

    <script src="<?php echo base_url('/assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
    
    <script src="<?php echo base_url('/assets/js/sb-admin-2.min.js') ?>"></script>

    <script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.min.js')?>"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css"></script>

    <script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>   

</body>