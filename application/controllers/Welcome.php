<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();
		// $this->load->model('m_grafik');
	}
	public function index()
	{
		// $x['data']=$this->m_grafik->get_data_stok();
		$this->load->library('calendar');

        $kalender =  $this->calendar->generate();
        
        $data = array('kalender' => $kalender);
        $this->session->set_userdata($data);
		$this->load->view('public/public', $data);
	}

}
