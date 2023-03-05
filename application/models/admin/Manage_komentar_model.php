<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Manage_komentar_model extends CI_Model
	{
   		var $column_order = array(null, 'komentar_id', 'tugas_id', 'isi', null);
		var $column_search = array('komentar_id', 'tugas_id', 'isi');
		var $order = array('komentar_id' => 'asc');

		public function _get_datatables_query()
    	{
    		$this->db->from('komentar');
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
    			$this->db->from('komentar');
    			return $this->db->count_all_results();
    		}

			public function deleteKomentar($komentar_id)
			{
        		$this->db->where('komentar_id',$komentar_id); 
        		return $this->db->delete('komentar'); 
    		}
	}