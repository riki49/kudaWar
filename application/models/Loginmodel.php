<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Loginmodel extends CI_Model{
	
	
	function getLogin(){
	$this->db->where('username', $this->input->post('username'));
	$this->db->where('password', $this->input->post('password'));
	$query = $this->db->get('admin');
	if ($query->num_rows() == 1)
	return $query->row();
	else
	return '';
	}
}