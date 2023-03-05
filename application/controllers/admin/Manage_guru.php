<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Manage_guru extends CI_Controller
	{
	
		public function __construct()
		{
			parent::__construct();

			$this->load->model('admin/manage_guru_model');

			$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    		$this->output->set_header('Pragma: no-cache');
		}

		public function index()
		{
			$this->load->view('admin/manage_guru');
		}

		public function get_data_guru()
    	{
    		$list = $this->manage_guru_model->get_datatables();
    		$data = array();
    		$no = $_POST['start'];
    		foreach ($list as $field) {
    			$no++;
    			$row = array();
    			$row[] = $no;
    			$row[] = $field->id;
    			$row[] = $field->nama_user;
    			$row[] = $field->status;
    			$row[] = '
    						<span>
    							<button class="btn btn-danger btn_edit" data-backdrop="false" onclick="updateById('."'".$field->id."','update'".')"><i class="fa fa-edit"></i></button>
    							<button class="btn btn-warning btn_hapus" onclick="deleteById('."'".$field->id."','delete'".')"><i class="fa fa-trash"></i></button>
    						</span>
    					';
    			$data[] = $row;
    		}

    		$output = array(
    			"draw" => $_POST['draw'],
    			"recordsTotal" => $this->manage_guru_model->count_all(),
    			"recordsFiltered" => $this->manage_guru_model->count_filtered(),
    			"data" => $data,
    		);

    		echo json_encode($output);
    	}

    	public function ambilDataById()
    	{
        	$id = $this->input->post('id'); 
        	$data = $this->manage_guru_model->getDataById($id); 

        	echo json_encode($data); 
    	}

		public function tambahGuru()
		{
        	$id = $this->input->post('id');
        	$nama_user = $this->input->post('nama_user'); 
        	$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
        	$role = $this->input->post('role');
        	$status = $this->input->post('status');
        	$data = ['id' => $id, 'nama_user' => $nama_user, 'password' => $password, 'role' => $role, 'status' => $status]; 
        	$data = $this->manage_guru_model->insertGuru($data);
        	echo json_encode($data); 
    	}

    	public function perbaruiGuru()
    	{
    		$id = $this->input->post('id');
        	$nama_user = $this->input->post('nama_user'); 
        	$password = $this->input->post('password');
        	$data = ['id' => $id, 'nama_user' => $nama_user];

        	if ($password) {
        		$data['password'] = password_hash($password, PASSWORD_DEFAULT);
        	}
 
        	$data = $this->manage_guru_model->updateGuru($id,$data);
        	echo json_encode($data); 
    	}

    	public function hapusGuru()
    	{
        	$id = $this->input->post('id');
        	$data = $this->manage_guru_model->deleteGuru($id);
        	echo json_encode($data); 
    	}
	}