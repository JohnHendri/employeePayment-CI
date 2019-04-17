<?php 

class M_employee extends CI_Model{
	function showAllEmployees(){
		return $this->db->get('karyawan');
	}

}
