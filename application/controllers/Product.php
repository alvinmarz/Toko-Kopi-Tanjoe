<?php
class Product extends CI_Controller {

    public function index()
	{

		
		$data['barang'] = $this->model_barang->tampil_data()->result();
		// $data['barang'] = $this->model_barang->tampil_data()->result();


        
        $data['Gayo_Aceh'] = $this->model_barang->data_Gayo_Aceh()->result();
        $data['Gayo_Aceh'] = $this->model_barang->data_product_Gayo_Aceh()->result();


		$this->load->view('templates/header');
		$this->load->view('Our_Product',$data);
		$this->load->view('templates/footer');
	}
    

    public function Gayo_Aceh()
    {
        $data['Gayo_Aceh'] = $this->model_barang->data_Gayo_Aceh()->result();
        $data['Gayo_Aceh_lainnya'] = $this->model_barang->data_product_Gayo_Aceh()->result();
        $this->load->view('templates/header');
		$this->load->view('our_Product/lainnya_product/Gayo_Aceh',$data);
		$this->load->view('templates/footer');
    }

    


 
    
}
