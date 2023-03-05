<script>
	var URL = '<?php echo base_url(); ?>';

	function proseslogin() {

        var id = $("#id").val();
        var password = $("#password").val();
        var role = $("#role").val();

        if (role == 'Login Sebagai?') {
            if (id == '') {
                Swal.fire({
                            icon: 'error',
                            title: '',
                            text: 'ID Belum Diisi',
                            timer: 700,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
            }
            else if (password == '') {
                Swal.fire({
                            icon: 'error',
                            title: '',
                            text: 'Password Belum Diisi',
                            timer: 700,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
            }
            else {
                Swal.fire({
                            icon: 'error',
                            title: '',
                            text: 'Role Belum Dipilih',
                            timer: 700,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
            }
        }
        else if (role == 1) {

            if (id == '') {
                Swal.fire({
                            icon: 'error',
                            title: '',
                            text: 'ID Belum Diisi',
                            timer: 700,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
            }
            else if (password == '') {
                Swal.fire({
                            icon: 'error',
                            title: '',
                            text: 'Password Belum Diisi',
                            timer: 700,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
            }
            else {
                $.ajax({
                    type: "POST",
                    url: URL+'login/validasi_login_admin',
                    data: {id: id, password: password},
                    success: function(response) {
                        if (response!=0) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Login Berhasil!',
                                text: 'Loading....',
                                timer: 700,
                                showCancelButton: false,
                                showConfirmButton: false
                            }).then (function() {
                                window.location.href = URL+'admin/dashboard';
                            });
                            document.getElementById("formlogin").reset();
                        } else {
                             Swal.fire({
                                icon: 'error',
                                title: 'Login Gagal!',
                                text: 'Silahkan periksa id atau password anda!',
                                timer: 700,
                                showCancelButton: false,
                                showConfirmButton: false
                            });
                        }
                    }
                });
            }
            return false;
        }
        else if (role == 2) {

            if (id == '') {
                Swal.fire({
                            icon: 'error',
                            title: '',
                            text: 'ID Belum Diisi',
                            timer: 700,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
            }
            else if (password == '') {
                Swal.fire({
                            icon: 'error',
                            title: '',
                            text: 'Password Belum Diisi',
                            timer: 700,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
            }
            else {
                $.ajax({
                    type: "POST",
                    url: URL+'login/validasi_login_guru',
                    data: {id: id, password: password},
                    success: function(response) {
                        if (response!=0) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Login Berhasil!',
                                text: 'Loading....',
                                timer: 700,
                                showCancelButton: false,
                                showConfirmButton: false
                            }).then (function() {
                                window.location.href = URL+'guru/dashboard';
                            });
                            document.getElementById("formlogin").reset();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Login Gagal!',
                                text: 'Silahkan periksa id atau password anda!',
                                timer: 700,
                                showCancelButton: false,
                                showConfirmButton: false
                            });
                        }
                    }
                });
            }
            return false;
        }
        else if (role == 3) {

            if (id == '') {
                Swal.fire({
                            icon: 'error',
                            title: '',
                            text: 'ID Belum Diisi',
                            timer: 700,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
            }
            else if (password == '') {
                Swal.fire({
                            icon: 'error',
                            title: '',
                            text: 'Password Belum Diisi',
                            timer: 700,
                            showCancelButton: false,
                            showConfirmButton: false
                        });
            }
            else {
                $.ajax({
                    type: "POST",
                    url: URL+'login/validasi_login_siswa',
                    data: {id: id, password: password},
                    success: function(response) {
                        if (response!=0) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Login Berhasil!',
                                text: 'Loading....',
                                timer: 700,
                                showCancelButton: false,
                                showConfirmButton: false
                            }).then (function() {
                                window.location.href = URL+'siswa/dashboard';
                            });
                            document.getElementById("formlogin").reset();
                        } else {
                            Swal.fire({
                                icon: 'error',
                                title: 'Login Gagal!',
                                text: 'Silahkan periksa id atau password anda!',
                                timer: 700,
                                showCancelButton: false,
                                showConfirmButton: false
                            });
                        }
                    }
                });
            }
            return false;
        }
        else {
            Swal.fire({
                icon: 'error',
                title: 'Login Gagal!',
                text: 'Ada Kesalahan Pada Server!',
                timer: 700,
                showCancelButton: false,
                showConfirmButton: false
            });
        }
	}
</script>