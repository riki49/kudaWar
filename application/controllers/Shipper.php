<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shipper extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('modelshipper');
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
		$data['shipper'] = $this->modelshipper->readshipper();
		$this->load->view('shipper/m_shipper',$data);
	}
	public function create()
	{
		if ($this->input->post()){
			$this->modelshipper->createshipper();
			redirect('shipper');
		}else{
			$this->load->view('shipper/formshipper');
		}
	}
	public function update($id)
	{
		if ($this->input->post()){
			$this->modelshipper->updateshipper($id);
			redirect('shipper');
		} else {
			$data['m_shipper']=$this->modelshipper->detailshipper($id);
			$this->load->view('shipper/formshipper',$data);
		}
	}
	public function delete($id){
		$this->modelshipper->deleteshipper($id);
		redirect ('shipper');
	}
}

