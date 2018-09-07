<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

public function __construct()
{
	parent::__construct();
	$this->load->model('dataWargaModel');
	$this->load->model('sortingModel');
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
		$data['dataWarga'] = $this->dataWargaModel->read();
		$this->load->view('admin/masterAdminView',$data);
	}
	public function create()
	{
		if ($this->input->post()){
			$this->dataWargaModel->create();
			redirect('admin');
		}else{
			$this->load->view('admin/formAddWarga');
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

	public function editDashboard() {
		$this->load->view('user/admin/formEditDashboard');	
	}

	public function readMail() {
		$inbox['mail'] = $this->mailModel->adminReadMail();
		$this->load->view('user/admin/masterMail', $inbox);
	}

	public function cetak($status){
		ob_start();
		$data;
		if ($status == 0) {
			$data['report'] = $this->dataWargaModel->read();
		} else if ($status == 1) {
			$data['report'] = $this->sortingModel->sortingAge();
		}
		
		$this->load->view('admin/printWarga', $data);
		$html = ob_get_contents();
        ob_end_clean();
        
        require_once('./assets/html2pdf/html2pdf.class.php');
		$pdf = new HTML2PDF('L','A4','en');
		$pdf->WriteHTML($html);
		$pdf->Output('Laporan Data Transaksi.pdf', 'P');
	}


	public function editProfil() {
		$id = $this->session->userdata('id');
		$detail = $this->akunmodel->readDetaildUser($id);

		if ($this->input->post()){	
			if ($detail->password == $this->input->post('password')) {
				$this->akunmodel->updateUser($id);	
				$this->session->userdata('password');
				$this->session->sess_destroy();
				$data_session = array(
				'nama' => $detail->username,
				'status' => TRUE,
				'id'=> $detail->id,
				'password'=> $detail->password,
				'email' => $detail->email
				);
				$this->session->set_userdata($data_session);
			echo "<script>alert('Sukses update User');location.href='http://localhost/food/admin'</script>";
			} else {
				echo "<script>alert('password lama salah');location.href='http://localhost/food/admin/editProfil'</script>";
			}
		}else{
			$this->load->view('user/admin/formEditProfil');
		}
	}

	function hitungUmur (){ 

	}
}

