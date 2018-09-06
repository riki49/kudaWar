<?php if ( ! defined('BASEPATH')) exit ('No direct script acces allowed');

class DataWargaModel extends CI_Model{
	
	function create(){
		$data = array(
			'nik' => $this->input->post ('nik'),
			'nama' => $this->input->post ('nama'),
			'tempat' => $this->input->post ('tempat'),
			'tanggal' => $this->input->post ('tanggal'),
			'kelamin' => $this->input->post ('kelamin'),
			'alamat' => $this->input->post ('alamat'),
			'rt' => $this->input->post ('rt'),
			'rw' => $this->input->post ('rw'),
			'status' => $this->input->post ('status'),
			'pekerjaan' => $this->input->post ('pekerjaan'),
			'agama' => $this->input->post ('agama')
		);
		$this->db->insert('warga',$data);
	}
	function read(){
		$query = $this->db->get('warga');
		return $query -> result();
	}
	function detailproduk($id){
		$this->db->where('id',$id);
		$query=$this->db->get('produk');
		return $query->row();
	}
	function updateproduk ($id){
		$data=array(
			'nama' => $this->input->post ('nama'),
			'level' => $this->input->post ('level'),
			'harga' => $this->input->post ('harga'),
			'tgl_produksi' => $this->input->post ('tgl_produksi'),
			'jumlah' => $this->input->post ('jumlah')
		);
		$this->db->where('id',$id);
		$this->db->update('produk',$data);
	}
	function deleteproduk ($id){
		$this->db->where('id',$id);
		$this->db->delete('produk');
	}
}