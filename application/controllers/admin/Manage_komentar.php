<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Manage_komentar extends CI_Controller
	{
	
		public function __construct()
		{
			parent::__construct();

			$this->load->model('admin/manage_komentar_model');

			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    		$this->output->set_header('Pragma: no-cache');
		}

		public function index()
		{
			$this->load->view('admin/manage_komentar');
		}

		public function get_data_komentar()
    	{
    		$list = $this->manage_komentar_model->get_datatables();
    		$data = array();
    		$no = $_POST['start'];
    		foreach ($list as $field) {
    			$no++;
    			$row = array();
    			$row[] = $no;
    			$row[] = $field->komentar_id;
    			$row[] = $field->tugas_id;
    			$row[] = $field->isi;
    			$row[] = '
    						<span>
    							<button class="btn btn-warning btn_hapus" onclick="deleteById('."'".$field->komentar_id."','delete'".')"><i class="fa fa-trash"></i></button>
    						</span>
    					';
    			$data[] = $row;
    		}

    		$output = array(
    			"draw" => $_POST['draw'],
    			"recordsTotal" => $this->manage_komentar_model->count_all(),
    			"recordsFiltered" => $this->manage_komentar_model->count_filtered(),
    			"data" => $data,
    		);

    		echo json_encode($output);
    	}

    	public function hapusKomentar()
    	{
        	$komentar_id = $this->input->post('komentar_id');
        	$data = $this->manage_komentar_model->deleteKomentar($komentar_id);
        	echo json_encode($data); 
    	}
	}