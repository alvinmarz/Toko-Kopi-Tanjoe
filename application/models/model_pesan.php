<?php
class model_pesan extends CI_Model {
 
    public function hitung_data_pesan() {
        return $this->db->get('tb_pesan')->num_rows();
    }
    public function tampil_data_pesan($limit, $start) {
        return $this->db->get('tb_pesan', $limit, $start);
    }
    public function tambah_pesan($data, $table) {
        $this->db->insert($table, $data);
    }

    public function hapus_data($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }
}




?>
