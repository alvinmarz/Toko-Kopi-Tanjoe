<?php
class Product extends CI_Controller {

    public function index()
	{

		
		$data['barang'] = $this->model_barang->tampil_data()->result();
		// $data['barang'] = $this->model_barang->tampil_data()->result();

        // ======== Mouse ==========
        $data['mouse'] = $this->model_barang->data_mouse()->result();
        $data['mouse'] = $this->model_barang->data_product_mouse()->result();
        
        // ======== Mousepad ==========
        $data['mousepad'] = $this->model_barang->data_mousepad()->result();
        $data['mousepad'] = $this->model_barang->data_product_mousepad()->result();
        
        // ======== Keyboard ==========
        $data['keyboard'] = $this->model_barang->data_keyboard()->result();
        $data['keyboard'] = $this->model_barang->data_product_keyboard()->result();
        
        // ======== Headset ==========
        $data['headset'] = $this->model_barang->data_headset()->result();
        $data['headset'] = $this->model_barang->data_product_headset()->result();

        // ======== Headset ==========
        $data['kursi'] = $this->model_barang->data_kursi()->result();
        $data['kursi'] = $this->model_barang->data_product_kursi()->result();


		$this->load->view('templates/header');
		$this->load->view('Our_Product',$data);
		$this->load->view('templates/footer');
	}
    
    public function mouse()
    {
        $data['mouse'] = $this->model_barang->data_mouse()->result();
        $data['mouse_lainnya'] = $this->model_barang->data_product_mouse()->result();

        $this->load->view('templates/header');
		$this->load->view('our_Product/lainnya_product/mouse',$data);
		$this->load->view('templates/footer');
    }
    public function mousepad()
    {
        $data['mousepad'] = $this->model_barang->data_mousepad()->result();
        $data['mousepad_lainnya'] = $this->model_barang->data_product_mousepad()->result();

        $this->load->view('templates/header');
		$this->load->view('our_Product/lainnya_product/mousepad',$data);
		$this->load->view('templates/footer');
    }
    public function keyboard()
    {
        $data['keyboard'] = $this->model_barang->data_keyboard()->result();
        $data['keyboard_lainnya'] = $this->model_barang->data_product_keyboard()->result();
        $this->load->view('templates/header');
		$this->load->view('our_Product/lainnya_product/keyboard',$data);
		$this->load->view('templates/footer');
    }
    public function headset()
    {
        $data['headset'] = $this->model_barang->data_headset()->result();
        $data['headset_lainnya'] = $this->model_barang->data_product_headset()->result();
        $this->load->view('templates/header');
		$this->load->view('our_Product/lainnya_product/headset',$data);
		$this->load->view('templates/footer');
    }
    public function kursi()
    {
        $data['kursi'] = $this->model_barang->data_kursi()->result();
        $data['kursi_lainnya'] = $this->model_barang->data_product_kursi()->result();
        $this->load->view('templates/header');
		$this->load->view('our_Product/lainnya_product/kursi',$data);
		$this->load->view('templates/footer');
    }

    


 
    
}
