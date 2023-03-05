<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Dashboard extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();

			$this->load->model('admin/dashboard_model');

			$this->load->model('login_model');

			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    		$this->output->set_header('Pragma: no-cache');
		}	

		public function index()	
		{
			
			$data['guru'] = $this->dashboard_model->guru();
			$data['siswa'] = $this->dashboard_model->siswa(); 
			$data['kelas'] = $this->dashboard_model->kelas();
			$data['komentar'] = $this->dashboard_model->komentar();

			$this->load->view('admin/dashboard', $data);
			
		}
	}
