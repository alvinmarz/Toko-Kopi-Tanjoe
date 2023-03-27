<?php
class Contact extends CI_Controller {

    public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('contact',$data);
		$this->load->view('templates/footer');
		$this->load->view('templates/sweetalert');
	}
    


 
    
}



?>
