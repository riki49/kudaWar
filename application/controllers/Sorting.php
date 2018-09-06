<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sorting extends CI_Controller {

	public function __construct() {
	parent::__construct();
	$this->load->model('sortingModel');
		// $dataBaru = $this->sorting($data);
	}

	function sorting($data) {
	    	if(!count($data)) return $data;
	    	$pivot= $data['harga'];
	    	$low = $high = array();
	    	$n = count($data);
	    	for($i=1; $i < $n; $i++) {
	       	 if($data[$i] <= $pivot) {
	          	  $low [] = $data[$i];
	        	} else {
	            	$high[] = $data[$i];
	            }
	        }
	    return array_merge(sorting($low), array($pivot), sorting($high));
	}

	function sortingAge() {
		$data['dataWarga'] = $this->sortingModel->sortingAge();
		// var_dump($data);
		$this->load->view('admin/masterAdminView', $data, $status = 1);
	}
	public function sortingPlace () {
		echo "ini berdasar alamat";
	}
}