<?php
class Model_barang extends CI_Model
{

    public function tampil_data_best()
    {
        $this->db->where('kategori2', 'Best Product');
        return $this->db->get('tb_barang');
    }
    public function hitung_data()
    {
        return $this->db->get('tb_barang')->num_rows();
    }
    public function find($id)
    {
        // Untuk mencari record data berdasarkan id
        $result = $this->db->where('id_brg', $id)->limit(1)->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }
    public function find_bayar($id)
    {
        // Untuk mencari record data berdasarkan id
        $result = $this->db->where('id_brg', $id)->limit(1)->get('tb_barang');
        if ($result->num_rows() > 0) {
            return $result->row();
        } else {
            return array();
        }
    }

    // ====== Gayo Product ====
    public function data_Gayo()
    {
        $this->db->where('kategori', 'Gayo');
        return $this->db->get('tb_barang');
    }
    public function hitung_data_Gayo()
    {
        $this->db->where('kategori', 'Gayo');
        return $this->db->get('tb_barang')->num_rows();
    }
    public function data_product_Gayo()
    {
        $this->db->where('kategori', 'Gayo');
        // $result = $this->db->get('tb_barang',3,0);
        $result = $this->db->get('tb_barang', 3, 0);
        // return $this->db->get('tb_barang', $limit, $start);
        return $result;
    }
    // ====== Gayo Product ====

    // ====== Gayo Product ====
    public function data_Gayopad()
    {
        $this->db->where('kategori', 'Gayopad');
        return $this->db->get('tb_barang');
    }
    public function hitung_data_Gayopad()
    {
        $this->db->where('kategori', 'Gayopad');
        return $this->db->get('tb_barang')->num_rows();
    }
    public function data_product_Gayopad()
    {
        $this->db->where('kategori', 'Gayopad');
        $result = $this->db->get('tb_barang', 3, 0);
        // return $this->db->get('tb_barang', $limit, $start);
        return $result;
    }


    // ====== Gayo_Aceh ====
    public function data_Gayo_Aceh()
    {
        $this->db->where('kategori', 'Gayo_Aceh');
        return $this->db->get('tb_barang');
    }
    public function hitung_data_Gayo_Aceh()
    {
        $this->db->where('kategori', 'Gayo_Aceh');
        return $this->db->get('tb_barang')->num_rows();
    }
    public function data_product_Gayo_Aceh()
    {
        $this->db->where('kategori', 'Gayo_Aceh');
        $result = $this->db->get('tb_barang', 3, 0);
        // return $this->db->get('tb_barang', $limit, $start);
        return $result;
    }
    // ====== Gayo_Aceh  ====

    // ====== ADMIN =====
    public function tampil_data_admin($limit, $start)
    {
        return $this->db->get('tb_barang', $limit, $start);
    }
    public function tampil_data()
    {

        return $this->db->get('tb_barang');
    }
    public function detail_brg($id_brg)
    {
        $query = $this->db->where('id_brg', $id_brg)->get('tb_barang');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function tambah_barang($data, $table)
    {

        $this->db->insert($table, $data);
    }
    public function edit_barang($where, $table)
    {

        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    // ====== ADMIN =====
    // ======== get data by id =========
    public function getDataById($id)
    {
        return $this->db->get_where('tb_barang', array('id_brg' => $id));
    }
    // public function hapus_data($where, $table) {
    //     $this->db->where($where);
    //     $this->db->delete($table);
    // }
    public function hapus_data($id)
    {
        $this->db->where('id_brg', $id);
        return $this->db->delete('tb_barang');
    }
    public function ambil_user_item()
    {
        $this->db->select('tb_pesanan.id_user, tb_pesanan.id_brg, tb_pesanan.jumlah, tb_barang.kategori, tb_barang.gambar, tb_barang.nama_brg, tb_barang.harga');
        $this->db->from('tb_pesanan');
        $this->db->join('tb_barang', 'tb_pesanan.id_brg = tb_barang.id_brg', 'inner');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function hitung_similarity($dataItem)
    {
        $user_item_matrix = [];
        $similarity_matrix = [];
        foreach ($dataItem as $row) {
            $user_item_matrix[$row['id_user']][$row['id_brg']] = $row['jumlah'];
        }
        foreach ($user_item_matrix as $userA => $itemsA) {
            foreach ($user_item_matrix as $userB => $itemsB) {
                if ($userA != $userB) {
                    $dot_product = 0;
                    $normA = 0;
                    $normB = 0;

                    foreach ($itemsA as $item => $valueA) {
                        $valueB = isset($itemsB[$item]) ? $itemsB[$item] : 0;
                        $dot_product += $valueA * $valueB;
                        $normA += pow($valueA, 2);
                        $normB += pow($valueB, 2);
                    }

                    $normA = sqrt($normA);
                    $normB = sqrt($normB);

                    if ($normA > 0 && $normB > 0) {
                        $similarity_matrix[$userA][$userB] = $dot_product / ($normA * $normB);
                    } else {
                        $similarity_matrix[$userA][$userB] = 0;
                    }
                }
            }
        }

        return $similarity_matrix;
    }
    public function ambil_rekomendasi($user_id, $dataItem, $similarity_matrix)
    {
        if (empty($dataItem) || empty($similarity_matrix) || !isset($similarity_matrix[$user_id])) {
            return [];
        }
        $user_item_matrix = [];
        $rekomendasi = [];
        foreach ($dataItem as $row) {
            if (isset($row['id_user'], $row['id_brg'], $row['jumlah'])) {
                $user_item_matrix[$row['id_user']][$row['id_brg']] = $row['jumlah'];
            }
        }
        if (!isset($user_item_matrix[$user_id])) {
            $user_item_matrix[$user_id] = [];
        }
        foreach ($similarity_matrix[$user_id] as $similar_user => $similarity_score) {
            if (isset($user_item_matrix[$similar_user])) {
                foreach ($user_item_matrix[$similar_user] as $item => $value) {
                    if (!isset($user_item_matrix[$user_id][$item])) {
                        if (!isset($rekomendasi[$item])) {
                            $rekomendasi[$item] = 0;
                        }
                        $rekomendasi[$item] += $similarity_score * $value;
                    }
                }
            }
        }
        arsort($rekomendasi);
        return array_keys($rekomendasi);
    }
    
}
