<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();    
		$this->load->library('session');
    }

	public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data_best()->result();
		$dataItem = $this->model_barang->ambil_user_item();
		$similarity_matrix = $this->model_barang->hitung_similarity($dataItem);
		$user_id = $this->session->userdata('id_user');
        $rekomendasi = $this->model_barang->ambil_rekomendasi($user_id, $dataItem, $similarity_matrix);
		if (!empty($rekomendasi)) {
            $data['rekomendasi'] = $this->db->select('id_brg, nama_brg, gambar, kategori, harga, keterangan')
                                                ->where_in('id_brg', $rekomendasi)
                                                ->get('tb_barang')
                                                ->result();
        } else {
            $data['rekomendasi'] = [];
        }
		$this->load->view('templates/header');
		$this->load->view('home',$data);
		$this->load->view('templates/footer');
		$this->load->view('templates/sweetalert');    
	}



}
