<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 
	}
 
	function index(){
		$this->load->view('v_login');
	}

	function register(){
		$this->load->view('v_register');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek1 = $this->m_login->cek_login("admin",$where)->num_rows();
		$cek2 = $this->m_login->cek_login("user",$where)->num_rows();
		if($cek1 > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("admin"));
 
		}
		if($cek2 > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("home"));
 
		}
		else{
			// echo "Username dan password salah !";
			$data['error'] = '<div class="alert alert-danger" style="margin-top: 3px">
						<div class="header"><b><i class="fa fa-exclamation-circle"></i> ERROR</b> Username atau Password Salah!</div></div>';
						$this->load->view('v_login', $data);
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}