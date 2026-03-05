<?php
class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    private function check_login()
    {
        if ($this->session->userdata('role_id') != '2') {
            $this->session->set_flashdata("pesan", "<script>alert('Anda Belum Login Broo')</script>");
            redirect('auth/login');
        }
    }


    public function tambah_ke_keranjang($id)
    {
        $this->check_login();

        $barang = $this->model_barang->find($id);
        $data = array(
            'id' => $barang->id_brg,
            'qty' => 1,
            'price' => $barang->harga,
            'name' => $barang->nama_brg,
        );
        $this->cart->insert($data);
        $this->session->set_flashdata('success_tambah_keranjang', 'Berhasil melakukan ');

        redirect('welcome');
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

    public function pembayaran()
    {
        $aa = $this->cart->total_items();
        if ($aa === 0) {
            $this->session->set_flashdata('keranjang_kosong_pembayaran', 'Berhasil melakukan ');
            redirect('welcome');
        }
        $this->load->view('templates/header');
        $this->load->view('pembayaran');
        $this->load->view('templates/footer');
        $this->load->view('templates/sweetalert');
    }


    public function proses_pesanan()
    {
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
    public function history()
    {
        $id_user = $this->session->userdata('id_user');
        $data['detail_pesanan'] = $this->model_invoice->ambil_detail_pesanan($id_user);
        $this->load->view('templates/header');
        $this->load->view('pesanan', $data);
        $this->load->view('templates/footer');
        $this->load->view('templates/sweetalert');
    }
}


