<?php
defined('BASEPATH') OR exit('No direct script access allowed');  

	class Forum extends CI_Controller
	{
		public function __construct()  
		{
			parent::__construct();  
			$this->load->model('guru/kelasModel');  
		}

		public function index()
		{
			$data = [
				'kelas' => $this->kelasModel->klaz()
			];
			$this->load->view('guru/forum', $data);
		}
	}