<?php
class Invoice extends CI_Controller {
    public function __construct() {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan','<script>alert("Anda Belum Login Broooo")</script>');
            // $this->session->set_flashdata('success_tambahsurat','Berhasil melakukan ');
            redirect('auth/login');
        }        
    }
    
    public function index() {
        $data['invoice'] = $this->model_invoice->tampil_data();
        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/invoice', $data);                
        $this->load->view('templatesAdmin/footer');
        $this->load->view('templatesAdmin/sweetalert');
        
    }
    public function detail($id_invoice) {
        $data['invoice'] = $this->model_invoice->ambil_id_invoice($id_invoice);
        $data['pesanan'] = $this->model_invoice->ambil_id_pesanan($id_invoice);
        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/detail_invoice', $data);                
        $this->load->view('templatesAdmin/footer');
        $this->load->view('templatesAdmin/sweetalert');

    }
}


?>
