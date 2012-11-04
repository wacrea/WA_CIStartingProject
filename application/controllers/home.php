<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data_header = array('title' => 'Home');
	
		$this->load->view('includes/header', $data_header);
		$this->load->view('home');
		$this->load->view('includes/footer');
	}
}