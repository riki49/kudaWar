<?php if ( ! defined('BASEPATH')) exit ('No direct script acces allowed');

class Modelacc extends CI_Model{
	function createacc(){
		$data = array(
			
			'id' => $this->input->post ('id'),
			'nama' => $this->input->post ('nama'),
			'deskripsi' => $this->input->post ('deskripsi'),
			'jenis' => $this->input->post ('jenis'),
			'qty' => $this->input->post ('qty')
		);
		$this->db->insert('acc',$data);
	}
	function readacc(){
		$query = $this->db->get('acc');
		return $query -> result();
	}
	function detailacc($id){
		$this->db->where('id',$id);
		$query=$this->db->get('acc');
		return $query->row();
	}
	function updateacc ($id){
		$data=array(
			'nama' => $this->input->post ('nama'),
			'deskripsi' => $this->input->post ('deskripsi'),
			'jenis' => $this->input->post ('jenis'),
			'qty' => $this->input->post ('qty')
		);
		$this->db->where('id',$id);
		$this->db->update('acc',$data);
	}
	function deleteacc ($id){
		$this->db->where('id',$id);
		$this->db->delete('acc');
	}
}