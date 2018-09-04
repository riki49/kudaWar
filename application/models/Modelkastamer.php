<?php if ( ! defined('BASEPATH')) exit ('No direct script acces allowed');

class Modelkastamer extends CI_Model{
	function createkastamer(){
		$data = array(
			
			'id' => $this->input->post ('id'),
			'nama' => $this->input->post ('nama'),
			'alamat' => $this->input->post ('alamat'),
			'phone' => $this->input->post ('phone'),
			'fax' => $this->input->post ('fax')
		);
		$this->db->insert('kastamer',$data);
	}
	function readkastamer(){
		$query = $this->db->get('kastamer');
		return $query -> result();
	}
	function detailkastamer($id){
		$this->db->where('id',$id);
		$query=$this->db->get('kastamer');
		return $query->row();
	}
	function updatekastamer ($id){
		$data=array(
			'nama' => $this->input->post ('nama'),
			'alamat' => $this->input->post ('alamat'),
			'phone' => $this->input->post ('phone'),
			'fax' => $this->input->post ('fax')
		);
		$this->db->where('id',$id);
		$this->db->update('kastamer',$data);
	}
	function deletekastamer ($id){
		$this->db->where('id',$id);
		$this->db->delete('kastamer');
	}
}