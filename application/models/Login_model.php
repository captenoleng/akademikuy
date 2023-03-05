<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_Model extends CI_Model{
    function __construct()
    {
        parent::__construct();
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
    }

    public function login_admin($id, $password)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('admin');
        if ($query->num_rows() == 1) {
            $hash = $query->row('password');
            if (password_verify($password, $hash)) {
                return $query;
            }
        }
        return $query;
    }

    public function status_login_admin($id, $status)
    {
        $this->db->where('id', $id); 
        return $this->db->update('admin', ['status' => $status]);
    }

    public function login_guru($id, $password)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('guru');
        if ($query->num_rows() == 1) {
            $hash = $query->row('password');
            if (password_verify($password, $hash)) {
                return $query;
            }
        }
        return $query;
    }

    public function status_login_guru($id, $status)
    {
        $this->db->where('id', $id); 
        return $this->db->update('guru', ['status' => $status]);
    }

    public function login_siswa($id, $password)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('siswa');
        if ($query->num_rows() == 1) {
            $hash = $query->row('password');
            if (password_verify($password, $hash)) {
                return $query;
            }
        }
        return $query;
    }

    public function status_login_siswa($id, $status)
    {
        $this->db->where('id', $id); 
        return $this->db->update('siswa', ['status' => $status]);
    }



}
