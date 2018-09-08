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
	function detailWarga($nik){
		$this->db->where('nik',$nik);
		$query=$this->db->get('warga');
		return $query->row();
	}
	function warga ($nik){
		$data=array(
			'nama' => $this->input->post ('nama'),
			'level' => $this->input->post ('level'),
			'harga' => $this->input->post ('harga'),
			'warga' => $this->input->post ('warga'),
			'jumlah' => $this->input->post ('jumlah')
		);
		$this->db->where('nik',$nik);
		$this->db->update('warga',$data);
	}
	function delete ($nik){
		$this->db->where('nik',$nik);
		$this->db->delete('warga');
	}
}