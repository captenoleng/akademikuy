<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Login_model','Login');
    }

    public function index() {
        $this->load->view('login');
    }

    public function validasi_login_admin() {
        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $role = $this->input->post('role');
        $status = 'Login';
        
        $hasil = $this->Login->login_admin($id, $password);

        if ($hasil->num_rows() > 0) {   
            $data = $hasil->row_array();
            $this->session->set_userdata('id', $data['id']);
            $this->session->set_userdata('nama_user', $data['nama_user']);
            $this->session->set_userdata('role', $data['role']);

            $ubah_status = $this->Login->status_login_admin($id, $status);

            echo 1;
        } else {
            echo 0;
        }
    }

    public function validasi_login_guru() {
        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $status = 'Login';

        $hasil = $this->Login->login_guru($id, $password);

        if ($hasil->num_rows() > 0) {
            if ($data = $hasil->row()) {
                $this->session->set_userdata('id', $data->id);
                $this->session->set_userdata('nama_user', $data->nama_user);
                $this->session->set_userdata('role', $data->role);

                $ubah_status = $this->Login->status_login_guru($id, $status);

                echo 1;
            } else {
                echo 0;
            }
        }
    }

    public function validasi_login_siswa() {
        $id = $this->input->post('id');
        $password = $this->input->post('password');
        $status = 'Login';

        $hasil = $this->Login->login_siswa($id, $password);

        if ($hasil->num_rows() > 0) {
            if ($data = $hasil->row()) {
                $this->session->set_userdata('id', $data->id);
                $this->session->set_userdata('nama_user', $data->nama_user);
                $this->session->set_userdata('role', $data->role);

                $ubah_status = $this->Login->status_login_siswa($id, $status);

                echo 1;
            } else {
                echo 0;
            }
        }
    }

    public function logout_admin() {
        session_destroy();

        $status = 'Tidak Login';
        $id = $this->session->userdata('id');
        $this->Login->status_login_admin($id, $status);

        $logout['id'] = $this->session->unset_userdata('id');
        $logout['nama_user'] = $this->session->unset_userdata('nama_user');
        $logout['role'] = $this->session->unset_userdata('role');

        if ($logout) {
            echo 1;
        } else {
            echo 0;
        }
    }

    public function logout_guru() {
        session_destroy();

        $status = 'Tidak Login';
        $id = $this->session->userdata('id');
        $this->Login->status_login_guru($id, $status);
		
        $data = array('id','nama_user','role');
		$this->session->unset_userdata($data);
    }

    public function logout_siswa() {
        session_destroy();

        $status = 'Tidak Login';
        $id = $this->session->userdata('id');
        $this->Login->status_login_siswa($id, $status);

		$data = array('id','nama_user','role');
		$this->session->unset_userdata($data);
    }

}