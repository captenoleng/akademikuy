<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Manage_lap_siswa extends CI_Controller
	{
	
		public function __construct()
		{
			parent::__construct();

			$this->load->model('admin/manage_lap_siswa_model');

			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    		$this->output->set_header('Pragma: no-cache');
		}

		public function index()
		{
			$this->load->view('admin/manage_lap_siswa');
		}

		public function get_data_lap_siswa()
    	{
    		$list = $this->manage_lap_siswa_model->get_datatables();
    		$data = array();
    		$no = $_POST['start'];
    		foreach ($list as $field) {

    			if (isset($field->nilai)) {
   					$status = $field->nilai;
   				} else {
   					$status = "Belum Dinilai";
   				};

    			$no++;
    			$row = array();
    			$row[] = $no;
    			$row[] = $field->nama_user;
    			$row[] = $field->id;
    			$row[] = $field->tugas_id;
    			$row[] = $field->judul_tugas;
    			$row[] = $field->nama_kelas;
    			$row[] = $status;
    			$data[] = $row;
    		}

    		$output = array(
    			"draw" => $_POST['draw'],
    			"recordsTotal" => $this->manage_lap_siswa_model->count_all(),
    			"recordsFiltered" => $this->manage_lap_siswa_model->count_filtered(),
    			"data" => $data,
    		);

    		echo json_encode($output);
    	}
	}