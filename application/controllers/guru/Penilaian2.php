<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Penilaian2 extends CI_Controller
	{
		public function index()
		{
			$this->load->view('guru/penilaian2');
		}
	}