<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data_best()->result();
		
		$this->load->view('templates/header');
		$this->load->view('home',$data);
		$this->load->view('templates/footer');
		$this->load->view('templates/sweetalert');    
	}


}
