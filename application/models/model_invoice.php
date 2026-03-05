<?php
class Model_invoice extends CI_Model
{
    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');
        $id_akun = $this->session->userdata('id_user');
        $nama = $this->input->post('nama');
        $alamat = $this->input->post('alamat');
        $jasa = $this->input->post('jasa');
        $bank = $this->input->post('bank');
        $gambar = $_FILES['gambar']['name'];
        if ($gambar = '') {
        } else {
            $config['upload_path'] = './bukti';
            $config['allowed_types'] = 'gif|jpg|jpeg|png';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                echo "Gambar Gagal Di upload Bro";
            } else {
                $gambar = $this->upload->data('file_name');
            }
        }
        // Dimasukkan kedalam array
        $data = array(
            'gambar' => $gambar,
        );
        $invoice = array(
            'nama' => $nama,
            'alamat' => $alamat,
            'gambar' => $gambar,
            'jasa' => $jasa,
            'bank' => $bank,
            'tgl_pesan' => date('Y-m-d H:i:s'),
            'batas_bayar' => date('Y-m-d H:i:s', mktime(
                date('H'),
                date('i'),
                date('s'),
                date('m'),
                date('d') + 1,
                date('Y')
            )),

        );
        $this->db->insert('tb_invoice', $invoice);
        $id_invoice = $this->db->insert_id();
        $detail = array(
            'id_invoice' => $id_invoice,
            'nama_pemesan' => $nama,
            'status_pembelian' => 'menunggu',
            'status_pembayaran' => 'berhasil',
            'resi' => ''

        );
        $this->db->insert('tb_detail_pesanan', $detail);

        // untuk table pesanan
        foreach ($this->cart->contents() as $items) {
            $data = array(
                'id_invoice' => $id_invoice,
                'id_user' => $id_akun,
                'id_brg' => $items['id'],
                'nama_brg' => $items['name'],
                'jumlah' => $items['qty'],
                'harga' => $items['price'],
            );
            $this->db->insert('tb_pesanan', $data);
        }

        return TRUE;
    }
    public function tampil_data()
    {
        $result = $this->db->get('tb_invoice');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function ambil_id_invoice($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->limit(1)->get('tb_invoice');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return false;
        }
    }
    public function ambil_id_pesanan($id_invoice)
    {
        $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function ambil_detail_pesanan($id_user)
    {
        $this->db->select('i.*, p.*, d.*, i.alamat, i.id_invoice, i.jasa, p.nama_brg, i.bank, d.nama_pemesan');
        $this->db->from('tb_pesanan p');
        $this->db->join('tb_invoice i', 'p.id_invoice = i.id_invoice');
        $this->db->join('tb_detail_pesanan d', 'i.id_invoice = d.id_invoice');
        $this->db->where('p.id_user', $id_user);
        return $this->db->get()->result();
    }
    public function get_all_detail_pesanan()
    {
        $this->db->select('i.*, d.*, i.alamat, i.jasa, i.bank, d.nama_pemesan');
        $this->db->from('tb_invoice i');
        $this->db->join('tb_detail_pesanan d', 'i.id_invoice = d.id_invoice');
        return $this->db->get()->result();
    }
    public function get_enum_values($table, $column)
    {
        $query = $this->db->query("SHOW COLUMNS FROM {$table} WHERE Field = '{$column}'");
        $row = $query->row();
        preg_match("/^enum\('(.*)'\)$/", $row->Type, $matches);
        $enum_values = explode("','", $matches[1]);
        return $enum_values;
    }
    public function update_resi($id_detail_pesanan, $resi)
    {
        $data = array(
            'resi' => $resi
        );
        $this->db->where('id_detail_pesanan', $id_detail_pesanan);
        return $this->db->update('tb_detail_pesanan', $data);
    }
    public function update_status_pembelian($id_detail_pesanan, $status_pembelian)
    {
        $this->db->where('id_detail_pesanan', $id_detail_pesanan);
        $this->db->update('tb_detail_pesanan', array('status_pembelian' => $status_pembelian));
    }

    public function update_status_pembayaran($id_detail_pesanan, $status_pembayaran)
    {
        $this->db->where('id_detail_pesanan', $id_detail_pesanan);
        $this->db->update('tb_detail_pesanan', array('status_pembayaran' => $status_pembayaran));
    }





}
