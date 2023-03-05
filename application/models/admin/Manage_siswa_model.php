<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Manage_siswa_model extends CI_Model
	{
   		var $column_order = array(null, 'id', 'nama_user', 'status', null);
		var $column_search = array('id', 'nama_user', 'status');
		var $order = array('status' => 'asc');

		public function _get_datatables_query()
    	{
    		$this->db->from('siswa');
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
    			$this->db->from('siswa');
    			return $this->db->count_all_results();
    		}
 
    		public function getDataById($id)
    		{
        		$this->db->where('id',$id); 
        		return $this->db->get('siswa')->result(); 
    		}

			public function insertSiswa($data)
			{
        		return $this->db->insert('siswa',$data);
    		}

			public function updateSiswa($id,$data)
			{
        		$this->db->where('id',$id); 
        		return $this->db->update('siswa',$data); 
    		}

			public function deleteSiswa($id)
			{
        		$this->db->where('id',$id); 
        		return $this->db->delete('siswa'); 
    		}
	}