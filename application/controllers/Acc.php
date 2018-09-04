<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acc extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('modelacc');
	if ($this->session->userdata('isLogin') ==FALSE) {
	redirect('');
}
}

	public function index()
	{
		$this->read();
	}
	public function read()
	{
		$data['acc'] = $this->modelacc->readacc();
		$this->load->view('acc/m_acc',$data);
	}
	public function create()
	{
		if ($this->input->post()){
			$this->modelacc->createacc();
			redirect('acc');
		}else{
			$this->load->view('acc/formacc');
		}
	}
	public function update($id)
	{
		if ($this->input->post()){
			$this->modelacc->updateacc($id);
			redirect('acc');
		} else {
			$data['m_acc']=$this->modelacc->detailacc($id);
			$this->load->view('acc/formacc',$data);
		}
	}
	public function delete($id){
		$this->modelacc->deleteacc($id);
		redirect ('acc');
	}
}

