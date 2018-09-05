<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produk extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('modelproduk');
	if ($this->session->userdata('status') ==FALSE) {
	redirect('');
}
}

	public function index()
	{
		$this->read();
	}
	public function read()
	{
		$data['produk'] = $this->modelproduk->readproduk();
		$this->load->view('produk/m_produk',$data);
	}
	public function create()
	{
		if ($this->input->post()){
			$this->modelproduk->createproduk();
			redirect('produk');
		}else{
			$this->load->view('produk/formproduk');
		}
	}
	public function update($id)
	{
		if ($this->input->post()){
			$this->modelproduk->updateproduk($id);
			redirect('produk');
		} else {
			$data['m_produk']=$this->modelproduk->detailproduk($id);
			$this->load->view('produk/formproduk',$data);
		}
	}
	public function delete($id){
		$this->modelproduk->deleteproduk($id);
		redirect ('produk');
	}
}

