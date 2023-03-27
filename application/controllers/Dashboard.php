<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata("pesan", "<script>alert('Anda Belum Login Broo')</script>");

            redirect('auth/login');
        }
    }
    public function tambah_ke_keranjang($id)
    {
        $barang = $this->model_barang->find($id);
        $data = array(
            'id'      => $barang->id_brg,
            'qty'     => 1,
            'price'   => $barang->harga,
            'name'    => $barang->nama_brg,
        );
        $this->cart->insert($data);
        $this->session->set_flashdata('success_tambah_keranjang','Berhasil melakukan ');

        redirect('welcome');
        // $product    =  $this->uri->segment(1) == 'product' || $this->uri->segment(1) == 'product';
        // $mouse      =  $this->uri->segment(2) == 'product/mouse' || $this->uri->segment(2) == 'product/mouse';
        // $mousepad   =  $this->uri->segment(2) == 'product/mousepad' || $this->uri->segment(2) == 'product/mousepad';
        // $keyboard   =  $this->uri->segment(2) == 'product/keyboard' || $this->uri->segment(2) == 'product/keyboard';
        // $headset    =  $this->uri->segment(2) == 'product/headset' || $this->uri->segment(2) == 'product/headset';
        // $kursi      =  $this->uri->segment(2) == 'product/kursi' || $this->uri->segment(2) == 'product/kursi';
    }




    public function detail($id_brg)
    {
        $data['barang'] = $this->model_barang->detail_brg($id_brg);
        $this->load->view('templates/header');
        $this->load->view('detail', $data);
        $this->load->view('templates/footer');
    }
    public function detail_keranjang()
    {   
    
        $aa = $this->cart->total_items();
        if ($aa === 0) {
            // redirect('product/index');
            // $this->session->set_flashdata('success_tambah_keranjang','Berhasil melakukan ');
        }
        $this->load->view('templates/header');	
        $this->load->view('keranjang');	
		$this->load->view('templates/footer');
		$this->load->view('templates/sweetalert');
    }
    public function hapus_keranjang()
    {        
        $this->cart->destroy();
        redirect('Product/index');
    }

    public function pembayaran() {
        
        
        $aa = $this->cart->total_items();
        if ($aa === 0) {
            // redirect('product/index');
              $this->session->set_flashdata('keranjang_kosong_pembayaran','Berhasil melakukan ');
              redirect('welcome');
        }
        $this->load->view('templates/header');	
        $this->load->view('pembayaran');	
		$this->load->view('templates/footer');
		$this->load->view('templates/sweetalert');
    }


    public function proses_pesanan() {
        $is_processed = $this->model_invoice->index();

        if ($is_processed == true) {
            # code...
            $this->cart->destroy();
            $this->load->view('templates/header');	        
            $this->load->view('proses_pesanan');
            $this->load->view('templates/footer');
            $this->load->view('templates/sweetalert');
        } else {
            echo "Maaf, Pesanan Anda Gagal diproses";
        }
    }


    // public function pembayaran($id){
    //     $barang = $this->model_barang->find($id);
    //     $data = array(
    //         'id'      => $barang->id_brg,
    //         'qty'     => 1,
    //         'price'   => $barang->harga,
    //         'name'    => $barang->nama_brg,
    //     );
    //     $this->cart->insert($data);

    //     $this->load->view('templates/header');	
    //     $this->load->view('pembayaran');	
	// 	$this->load->view('templates/footer');
	// 	$this->load->view('templates/sweetalert');
    // }
}


