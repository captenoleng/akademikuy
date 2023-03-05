<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Manage_kelas extends CI_Controller
	{
	
		public function __construct()
		{
			parent::__construct();

			$this->load->model('admin/manage_kelas_model');

			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    		$this->output->set_header('Pragma: no-cache');
		}

		public function index()
		{
			$this->load->view('admin/manage_kelas');
		}

		public function get_data_kelas()
    	{
    		$list = $this->manage_kelas_model->get_datatables();
    		$data = array();
    		$no = $_POST['start'];
    		foreach ($list as $field) {
    			$no++;
    			$row = array();
    			$row[] = $no;
    			$row[] = $field->kelas_id;
    			$row[] = $field->nama_kelas;
    			$row[] = $field->nip;
    			$row[] = '
    						<span>
    							<button class="btn btn-danger btn_edit" data-backdrop="false" onclick="updateById('."'".$field->kelas_id."','update'".')"><i class="fa fa-edit"></i></button>
    							<button class="btn btn-warning btn_hapus" onclick="deleteById('."'".$field->kelas_id."','delete'".')"><i class="fa fa-trash"></i></button>
    						</span>
    					';
    			$data[] = $row;
    		}

    		$output = array(
    			"draw" => $_POST['draw'],
    			"recordsTotal" => $this->manage_kelas_model->count_all(),
    			"recordsFiltered" => $this->manage_kelas_model->count_filtered(),
    			"data" => $data,
    		);

    		echo json_encode($output);
    	}

    	public function getDataselect_nip_pengajar()
    	{
    		$search = $this->input->post('search');
    		$results = $this->manage_kelas_model->getDataselect($search);
    		$data = array();
    		foreach ($results as $row) {
    			$data[] = array(
    				'id' => $row['id'],
    				'text' => $row['nama_user']
    			);
    			echo json_encode($data);
    		}
    	}
 
    	public function ambilDataByKelas_id()
    	{
        	$kelas_id = $this->input->post('kelas_id'); 
        	$data = $this->manage_kelas_model->getDataByKelas_id($kelas_id); 

        	echo json_encode($data); 
    	}

		public function tambahKelas()
		{
        	$kelas_id = $this->input->post('kelas_id');
        	$nama_kelas = $this->input->post('nama_kelas'); 
        	$nip = $this->input->post('nip'); 
        	$data = ['kelas_id' => $kelas_id, 'nama_kelas' => $nama_kelas, 'nip' => $nip];
        	$data = $this->manage_kelas_model->insertKelas($data);
        	echo json_encode($data); 
    	}

    	public function perbaruiKelas()
    	{
    		$kelas_id = $this->input->post('kelas_id');
        	$nama_kelas = $this->input->post('nama_kelas'); 
        	$nip = $this->input->post('nip'); 
        	$data = ['kelas_id' => $kelas_id, 'nama_kelas' => $nama_kelas, 'nip' => $nip];
        	
        	$data = $this->manage_kelas_model->updateKelas($kelas_id,$data);
        	echo json_encode($data); 
    	}

    	public function hapusKelas()
    	{
        	$kelas_id = $this->input->post('kelas_id');
        	$data = $this->manage_kelas_model->deleteKelas($kelas_id);
        	echo json_encode($data); 
    	}
	}