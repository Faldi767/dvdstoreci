<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct(){
		parent::__construct();
	
		$this->load->model('admin/mLogin');
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index(){
		$username = $this->session->userdata('username');
		
		if (empty($username)){					
			$this->load->view('admin/login');			
		} else {
			redirect('admin/Customer');
		}			
	}
	
	
	public function validasi(){
		$email = $this->input->post('username');
		$password = $this->input->post('password');
		
		$row = $this->mLogin->get($email);
		if ($row->customer_password == $password){						
			$this->session->set_userdata('username',$row->customer_name);			
			redirect('admin/Customer');
		} else {
			redirect('admin/login');
		}		
	}
	
	public function logout(){
		$this->session->unset_userdata('username');		
		redirect('admin/login');
	}
	
	
}

