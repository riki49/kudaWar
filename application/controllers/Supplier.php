<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('modelsupplier');
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
		$data['supplier'] = $this->modelsupplier->readsupplier();
		$this->load->view('supplier/m_supplier',$data);
	}
	public function create()
	{
		if ($this->input->post()){
			$this->modelsupplier->createsupplier();
			redirect('supplier');
		}else{
			$this->load->view('supplier/formsupplier');
		}
	}
	public function update($id)
	{
		if ($this->input->post()){
			$this->modelsupplier->updatesupplier($id);
			redirect('supplier');
		} else {
			$data['m_supplier']=$this->modelsupplier->detailsupplier($id);
			$this->load->view('supplier/formsupplier',$data);
		}
	}
	public function delete($id){
		$this->modelsupplier->deletesupplier($id);
		redirect ('supplier');
	}
}

