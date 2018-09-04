<?php if ( ! defined('BASEPATH')) exit ('No direct script acces allowed');

class Modelshipper extends CI_Model{
	function createshipper(){
		$data = array(
			
			'id' => $this->input->post ('id'),
			'nama' => $this->input->post ('nama'),
			'alamat' => $this->input->post ('alamat'),
			'pic' => $this->input->post ('pic'),
			'phone' => $this->input->post ('phone')
		);
		$this->db->insert('shipper',$data);
	}
	function readshipper(){
		$query = $this->db->get('shipper');
		return $query -> result();
	}
	function detailshipper($id){
		$this->db->where('id',$id);
		$query=$this->db->get('shipper');
		return $query->row();
	}
	function updateshipper ($id){
		$data=array(
			'nama' => $this->input->post ('nama'),
			'alamat' => $this->input->post ('alamat'),
			'pic' => $this->input->post ('pic'),
			'phone' => $this->input->post ('phone')
		);
		$this->db->where('id',$id);
		$this->db->update('shipper',$data);
	}
	function deleteshipper ($id){
		$this->db->where('id',$id);
		$this->db->delete('shipper');
	}
}