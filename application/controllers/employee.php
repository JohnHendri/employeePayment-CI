<?php 


class Employee extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_employee');
		$this->load->helper('url');

	}

	function index(){
        $data['karyawan'] = $this->m_employee->showAllEmployees()->result();
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('templates/topbar');
		$this->load->view('employees/v_employee', $data);
		$this->load->view('templates/footer');
	}

}
