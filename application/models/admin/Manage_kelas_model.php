<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Manage_kelas_model extends CI_Model
	{
   		var $column_order = array(null, 'kelas_id', 'nama_kelas', 'nip', null);
		var $column_search = array('kelas_id', 'nama_kelas', 'nip');
		var $order = array('nama_kelas' => 'asc');

		public function _get_datatables_query()
    	{
    		$this->db->from('kelas');
    		$i = 0;

    		foreach ($this->column_search as $item)
    		{
    			if ($_POST['search']['value']) {
    				if ($i == 0) {
    					$this->db->group_start();
    					$this->db->like($item, $_POST['search']['value']);
    				}
    				else {
    					$this->db->or_like($item, $_POST['search']['value']);
    				}
    				if (count($this->column_search) - 1 == $i) {
    					$this->db->group_end();
    				}
    				
    			}
				$i++;
    		}
    		if (isset($_POST['order'])) {
    			$this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
    		}
    		else if (isset($this->order)) {
    			$order = $this->order;
   				$this->db->order_by(key($order), $order[key($order)]);
    		}
    	}

    		public function get_datatables()
    		{
    			$this->_get_datatables_query();
    			if($_POST['length'] != -1)
    			$this->db->limit($_POST['length'], $_POST['start']);
    			$query = $this->db->get();
    			return $query->result();
    		}

    		public function count_filtered()
    		{
    			$this->_get_datatables_query();
    			$query = $this->db->get();
    			return $query->num_rows();
    		}

    		public function count_all()
    		{
    			$this->db->from('kelas');
    			return $this->db->count_all_results();
    		}
 
    		public function getDataByKelas_id($kelas_id)
    		{
        		$hasil=$this->db->query("SELECT * FROM kelas INNER JOIN guru ON kelas.nip=guru.id WHERE kelas.kelas_id = $kelas_id");
        		return $hasil->result();
    		}

			public function insertKelas($data)
			{
        		return $this->db->insert('kelas',$data);
    		}

			public function updateKelas($kelas_id,$data)
			{
        		$this->db->where('kelas_id',$kelas_id); 
        		return $this->db->update('kelas',$data); 
    		}

			public function deleteKelas($kelas_id)
			{
        		$this->db->where('kelas_id',$kelas_id); 
        		return $this->db->delete('kelas'); 
    		}

    		public function getDataselect($search)
    		{
    			$this->db->select('*');
    			$this->db->from('guru');
    			$this->db->like('nama_user', $search);
    			$this->db->limit(10);
    			return $this->db->get()->result_array();
    		}
	}