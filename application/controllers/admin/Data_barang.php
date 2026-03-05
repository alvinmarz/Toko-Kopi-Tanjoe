<?php
class Data_barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<script>alert("Anda Belum Login Broooo")</script>');
            redirect('auth/login');
        }
    }

    public function index()
    {
        // Load library
        $this->load->library('pagination');
        
        // Config
        $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $host = $_SERVER['HTTP_HOST'];
        $config['base_url'] = $protocol . $host . '/toko_online_komputer/admin/data_barang/index';
        $config['total_rows'] = $this->model_barang->hitung_data();
        $config['per_page'] = 5;
        
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
        // =====
        $data['start'] = $this->uri->segment(4);
        $data['barang'] = $this->model_barang->tampil_data_admin($config['per_page'], $data['start'])->result();
        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/data_barang', $data);
        $this->load->view('templatesAdmin/footer');
        $this->load->view('templatesAdmin/sweetalert');
    }
    
    public function tambah_aksi()
    {
        $nama_brg       = $this->input->post('nama_brg');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $kategori2       = $this->input->post('kategori2');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');
        $gambar    = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {           
            $Gayopadd = "Gayopad";
            $Gayo = "Gayo";
            $keyboard = "Keyboard";                 
            $headset = "Headset";
            $Gayo_Aceh = "Gayo_Aceh";
            

            if ($kategori == $Gayopadd) {                                       
                $config['upload_path']     = './uploads_barang/Gayopad/' ;                                             
            } elseif ($kategori == $Gayo) {
                $config['upload_path']     = './uploads_barang/Gayo/';                
                # code...
            } elseif ($kategori == $keyboard) {
                $config['upload_path']     = './uploads_barang/Keyboard/';    
            } elseif ($kategori == $keyboard) {
                $config['upload_path']     = './uploads_barang/Keyboard/';    
            } elseif ($kategori == $headset) {
                $config['upload_path']     = './uploads_barang/Headset/';    
            } elseif ($kategori == $Gayo_Aceh) {
                $config['upload_path']     = './uploads_barang/Gayo_Aceh/';    
            } elseif ($kategori2 == "Best Product") {
                $config['upload_path']     = './uploads_barang/Best/'; 
            }
  
            // ========= DAAH BENER ===========
            // if ($kategori2 == "Best Product") {
            //     $config['upload_path']     = './uploads_barang/Best/';                
            // }
            $config['allowed_types']   = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Cuy Di upload wkwkwk";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'kategori2'     => $kategori2,
            'harga'         => $harga,
            'stok'          => $stok,
            'gambar'        => $gambar
        );
        $this->model_barang->tambah_barang($data, 'tb_barang');        
        // $this->session->set_flashdata('pesan','<script>alert("Data berhasil ditambahkan")</script>');        
        $this->session->set_flashdata('success_tambahsurat','Data berhasil ditambah');
        redirect('admin/Data_barang');
    }
    
    public function edit($id)
    {
        $where = array('id_brg' => $id);
        $data['barang'] = $this->model_barang->edit_barang($where, 'tb_barang')->result();
        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/edit_barang', $data);
        $this->load->view('templatesAdmin/footer');
    }
    
    public function update()
    {
        $id             = $this->input->post('id_brg');
        $nama_brg       = $this->input->post('nama_brg');
        $keterangan     = $this->input->post('keterangan');
        $kategori       = $this->input->post('kategori');
        $kategori2       = $this->input->post('kategori2');
        $harga          = $this->input->post('harga');
        $stok           = $this->input->post('stok');

        $data = array(
            'nama_brg'      => $nama_brg,
            'keterangan'    => $keterangan,
            'kategori'      => $kategori,
            'kategori2'      => $kategori2,
            'harga'         => $harga,
            'stok'          => $stok

        );
        $where = array(
            "id_brg" => $id
        );
        $this->model_barang->update_data($where, $data, 'tb_barang');
        $this->session->set_flashdata('success_ubahsurat','Surat Berhasil Diubah! ');
        redirect('admin/data_barang');
    }


    public function hapus($id)
    {
        $gambar = $this->model_barang->getDataById($id)->row();
        $nama = './uploads_barang/' . $gambar->gambar;
        if (is_readable($nama) && unlink($nama)) {
            $this->model_barang->hapus_data($id);
            $this->session->set_flashdata('success_hapussurat','Surat Berhasil Dihapus! ');
            redirect('admin/data_barang');
        } else {
            $this->model_barang->hapus_data($id);
            $this->session->set_flashdata('success_hapussurat','Surat Berhasil Dihapus! ');
            unlink('./uploads_barang/' . $gambar->gambar);
            redirect('admin/data_barang');
        }
    }
}
