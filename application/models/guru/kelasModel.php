<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	class kelasModel extends CI_Model
	{
        function __construct()  
        {  
            //call model constructor  
            parent::__construct();
        }

        function klaz()
        {
            $query = $this->db->get('kelas');
            return $query->result_array();
        }
			
}