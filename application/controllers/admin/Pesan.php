<?php
class Pesan extends CI_Controller {
    // public function __construct() {
    //     parent::__construct();
    //     if ($this->session->userdata('role_id') != '1') {
    //         $this->session->set_flashdata('pesan','<script>alert("Anda Belum Login Broooo")</script>');
    //         redirect('auth/login');
    //     }
    //     # code...
    // }
    // public function index() {
    //     $data['barang'] = $this->model_pesan->tampil_data()->result();        
    //     $this->load->view('templatesAdmin/header');
    //     $this->load->view('admin/pesan', $data);            
    //     $this->load->view('templatesAdmin/sweetalert');
    //     $this->load->view('templatesAdmin/footer');
    // }
    public function index() {
        
        $this->load->library('pagination');
        // Config
        $config['base_url'] = 'http://localhost/toko_online_komputer/admin/pesan/index';
        $config['total_rows'] = $this->model_pesan->hitung_data_pesan();
        $config['per_page'] = 7;
        // Styling
        $config['full_tag_open'] = '<nav> <ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="page-item">'; // Jadi pada saat first di buat depannya mau apa        
        $config['first_tag_close'] = '</li>';
    
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="page-item">'; 
        $config['last_tag_close'] = '</li>';
        
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li class="page-item">'; 
        $config['next_tag_close'] = '</li>';
        
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="page-item">'; 
        $config['prev_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li">';
        
        $config['num_tag_open'] = '<li class="page-item">'; // digit untuk angkanya
        $config['num_tag_close'] = '</li">';
        $config['attributes'] = array('class' => 'page-link'); 
        // Initialize
        $this->pagination->initialize($config);
        // =======
        $data['start'] = $this->uri->segment(4);
        $data['barang'] = $this->model_pesan->tampil_data_pesan($config['per_page'], $data['start'])->result();
        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/pesan', $data);            
        $this->load->view('templatesAdmin/footer');
        $this->load->view('templatesAdmin/sweetalert');
    }
    public function tambah_data() {
        $name       = $this->input->post('name');
        $email      = $this->input->post('email');
        $subject    = $this->input->post('subject');
        $pesan    = $this->input->post('pesan');

        $data = array (
            "name"      => $name,
            "email"     => $email,
            "subject"   => $subject,
            "pesan"   => $pesan
        );
        $this->model_pesan->tambah_pesan($data, 'tb_pesan');
        $this->session->set_flashdata('success_pesan',' ');
        redirect('contact');
    }

    public function hapus($id) {
        $data = array (
            'id' => $id
        );

        $this->model_pesan->hapus_data($data, 'tb_pesan');
        $this->session->set_flashdata('success_hapuspesan',' ');
        redirect('admin/pesan');
        echo "<script>alert('Data berhasil di hapus')</script>";
        
        
        
    }




}
