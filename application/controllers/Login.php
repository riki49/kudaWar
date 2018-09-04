<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct()
{
parent::__construct();
$this->load->model('loginmodel');

}

	public function index()
	{
		$this->read();
	}
	public function read()
	{
		
		 $this->load->view('login');
	}
	public function doLogin()
	{
		if($this->input->post()){
		$login = $this->loginmodel->getLogin();
		if($login != ''){
			$data_session = array (
			'status' =>TRUE,
			'user' => $login->user,
			'fullname' => $login->fullname
			
			);
		$this->session->set_userdata($data_session);
		redirect('produk');
		} else {
		$this->session->set_flashdata('message','Wrong Username or Password !!');
		redirect('login');
		}
	}
}
	public function doLogout(){
	$this->session->sess_destroy();
	redirect('');
	}
}
?>