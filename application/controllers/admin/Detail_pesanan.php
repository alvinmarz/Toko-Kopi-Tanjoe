<?php
class Detail_pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<script>alert("Anda Belum Login Broooo")</script>');
            // $this->session->set_flashdata('success_tambahsurat','Berhasil melakukan ');
            redirect('auth/login');
        }
    }
    public function index()
    {
        $status_pembelian = $this->model_invoice->get_enum_values('tb_detail_pesanan', 'status_pembelian');
        $status_pembayaran = $this->model_invoice->get_enum_values('tb_detail_pesanan', 'status_pembayaran');
        $data['status_pembelian'] = $status_pembelian;
        $data['status_pembayaran'] = $status_pembayaran;
        $data['detail_pesanan'] = $this->model_invoice->get_all_detail_pesanan();
        $this->load->view('templatesAdmin/header');
        $this->load->view('admin/pesan', $data);
        $this->load->view('templatesAdmin/footer');
        $this->load->view('templatesAdmin/sweetalert');
    }
    public function update_status_pembelian()
    {
        $id_detail_pesanan = $this->input->post('id_detail_pesanan');
        $status_pembelian = $this->input->post('status_pembelian');
        $this->model_invoice->update_status_pembelian($id_detail_pesanan, $status_pembelian);
        $this->session->set_flashdata('message', 'Status Pembelian berhasil diperbarui.');
        redirect('admin/detail_pesanan');
    }

    public function update_status_pembayaran()
    {
        $id_detail_pesanan = $this->input->post('id_detail_pesanan');
        $status_pembayaran = $this->input->post('status_pembayaran');
        $this->model_invoice->update_status_pembayaran($id_detail_pesanan, $status_pembayaran);
        $this->session->set_flashdata('message', 'Status Pembayaran berhasil diperbarui.');
        redirect('admin/detail_pesanan');
    }

    public function update_resi($id_detail_pesanan)
    {
        $resi = $this->input->post('resi');
        if ($this->model_invoice->update_resi($id_detail_pesanan, $resi)) {
            $this->session->set_flashdata('message', 'Resi berhasil diperbarui');
        } else {
            $this->session->set_flashdata('message', 'Gagal memperbarui resi');
        }
        redirect('admin/detail_pesanan');
    }

}
