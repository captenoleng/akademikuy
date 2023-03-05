    <script src="<?php echo base_url('/assets/vendor/jquery/jquery.min.js') ?>"></script>
     
    <script src="<?php echo base_url('/assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <script src="<?php echo base_url('/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    
    <script src="<?php echo base_url('/assets/js/sb-admin-2.min.js') ?>"></script>   

    <script async src="https://cdn.jsdelivr.net/npm/es-module-shims@1/dist/es-module-shims.min.js" crossorigin="anonymous"></script>

    <script type="importmap">
    {
      "imports": {
        "@popperjs/core": "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js",
        "bootstrap": "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.esm.min.js"
      }
    }
    </script>
    <script type="module">
      import * as bootstrap from 'bootstrap'

      new bootstrap.Popover(document.getElementById('popoverButton'))
    </script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url('/assets/vendor/chart.js/Chart.min.js') ?>"></script>

    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

    <script src="<?php echo base_url('/assets/js/demo/chart-area-demo.js') ?>"></script>
    <script src="<?php echo base_url('/assets/js/demo/chart-pie-demo.js') ?>"></script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>

    <?php $this->load->view('script_logout'); ?>