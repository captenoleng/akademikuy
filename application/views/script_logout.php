<script>
  var URL = '<?php echo base_url(); ?>';
  
  function logout() {
    $.ajax({
          type: 'POST',
          url: URL+'login/logout_admin',
          success: function(response) {
                if (response!=0) {
                    Swal.fire({ 
                        icon: 'success',
                        title: 'Logout Berhasil',
                        text: 'Loading....',
                        timer: 700,
                        showCancelButton: false,
                        showConfirmButton: false
                    }).then (function() {
                          window.location.href = URL+'home';
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Logout Gagal',
                        timer: 700,
                        showCancelButton: false,
                        showConfirmButton: false
                    });
                }
          }
      });
  }
</script>