<?php if ( ! defined('BASEPATH')) exit ('No direct script acces allowed');

class cetakModel extends CI_Model{
	function sortingAge(){
		$this->db->order_by('tanggal', 'ASC');
    	$query = $this->db->get('warga');
    	return $query->result();
	}

	function sortingPlace(){
		$this->db->order_by('rt', 'rw', 'ASC');
    	$query = $this->db->get('warga');
    	return $query->result();
	}

	function kelompokDewasa(){
			// $query = $this->db->select(*)->where('status' => 'nikah' )->get('warga')->result();
	    	// $this->db->get('warga');
	    	return $query->result();
	}

}