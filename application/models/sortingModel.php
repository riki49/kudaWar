<?php if ( ! defined('BASEPATH')) exit ('No direct script acces allowed');

class sortingModel extends CI_Model{
	function sortingAge(){
		$this->db->order_by('tanggal', 'ASC');
    	$query = $this->db->get('warga');
    	return $query->result();
	}

	function sortingPlace(){
		$this->db->order_by('harga', 'ASC');
    	$query = $this->db->get('produk');
    	return $query->result();
	}
}