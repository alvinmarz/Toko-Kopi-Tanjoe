<?php
class About extends CI_Controller
{
    public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data_best()->result();
		$this->load->view('templates/header');
		$this->load->view('about',$data);
		$this->load->view('templates/footer');
	}
}




?>
