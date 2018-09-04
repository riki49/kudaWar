<?php if ( ! defined('BASEPATH')) exit ('No direct script acces allowed');

class Modelsupplier extends CI_Model{
	function createsupplier(){
		$data = array(
			
			'id' => $this->input->post ('id'),
			'nama' => $this->input->post ('nama'),
			'alamat' => $this->input->post ('alamat'),
			'pic' => $this->input->post ('pic'),
			'phone' => $this->input->post ('phone')
		);
		$this->db->insert('supplier',$data);
	}
	function readsupplier(){
		$query = $this->db->get('supplier');
		return $query -> result();
	}
	function detailsupplier($id){
		$this->db->where('id',$id);
		$query=$this->db->get('supplier');
		return $query->row();
	}
	function updatesupplier ($id){
		$data=array(
			'nama' => $this->input->post ('nama'),
			'alamat' => $this->input->post ('alamat'),
			'pic' => $this->input->post ('pic'),
			'phone' => $this->input->post ('phone')
		);
		$this->db->where('id',$id);
		$this->db->update('supplier',$data);
	}
	function deletesupplier ($id){
		$this->db->where('id',$id);
		$this->db->delete('supplier');
	}
}