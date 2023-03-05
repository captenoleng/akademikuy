<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Dashboard_model extends CI_Model
	{
		var $column_order = array(null, 'id', 'nama_user', 'role', 'status', null);
		var $column_search = array('id', 'nama_user', 'status');
		var $order = array('status' => 'asc');

		public function admin()
		{
			$this->db->select('*');
			$this->db->from('admin');
			return $this->db->get()->num_rows();
		}

		public function guru()
		{
			$this->db->select('*');
			$this->db->from('guru');
			return $this->db->get()->num_rows();
		}

		public function siswa()
		{
			$this->db->select('*');
			$this->db->from('siswa');
			return $this->db->get()->num_rows();
		}

		public function kelas()
		{
			$this->db->select('*');
			$this->db->from('kelas');
			return $this->db->get()->num_rows();
		}

		public function komentar()
		{
			$this->db->select('*');
			$this->db->from('komentar');
			return $this->db->get()->num_rows();
		}
			
	}