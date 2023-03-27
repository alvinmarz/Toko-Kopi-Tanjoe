<?php 
class Model_barang extends CI_Model {
    // public function tampil_data() {
    //     $this->db->order_by("kategori", "desc");
    //     return $this->db->get('tb_barang');
    // }
    public function tampil_data_best() {
        $this->db->where('kategori2','Best Product');
        return $this->db->get('tb_barang');
    }
    public function hitung_data() {
        return $this->db->get('tb_barang')->num_rows();
    }
    public function find($id)
    {
        // Untuk mencari record data berdasarkan id
        $result = $this->db->where('id_brg', $id)->limit(1)->get('tb_barang');
        if ($result->num_rows() > 0) {
            echo "<script>alert('jdsi')</script>";
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
            echo "<script>alert('jdsi')</script>";
            return $result->row();
        } else {
            return array();
        }
    }

// ====== Mouse Product ====
    public function data_mouse() {
        $this->db->where('kategori','Mouse');
        return $this->db->get('tb_barang');
    }
    public function hitung_data_mouse() {
        $this->db->where('kategori','Mouse');
        return $this->db->get('tb_barang')->num_rows();
    }
    public function data_product_mouse() {
        $this->db->where('kategori','Mouse');
        // $result = $this->db->get('tb_barang',3,0);
        $result = $this->db->get('tb_barang',3,0);
        // return $this->db->get('tb_barang', $limit, $start);
        return $result;
    }
// ====== Mouse Product ====

// ====== Mousepad Product ====
    public function data_mousepad() {
        $this->db->where('kategori','Mousepad');
        return $this->db->get('tb_barang');
    }
    public function hitung_data_mousepad() {
        $this->db->where('kategori','Mousepad');
        return $this->db->get('tb_barang')->num_rows();
    }
    public function data_product_mousepad() {
        $this->db->where('kategori','Mousepad');
        $result = $this->db->get('tb_barang',3,0);
        // return $this->db->get('tb_barang', $limit, $start);
        return $result;
    }

// ====== Mousepad Product ====

// ====== Keyboard Product ====
    public function data_keyboard() {
        $this->db->where('kategori','Mouse');
        return $this->db->get('tb_barang');
    }
    public function hitung_data_keyboard() {
        $this->db->where('kategori','keyboard');
        return $this->db->get('tb_barang')->num_rows();
    }
    public function data_product_keyboard() {        
        $this->db->where('kategori','Keyboard');
        $result = $this->db->get('tb_barang',3,0);
        // return $this->db->get('tb_barang', $limit, $start);
        return $result;
    }
// ====== Keyboard Product ====

// ====== Headset Product ====
    public function data_headset() {
        $this->db->where('kategori','Headset');
        return $this->db->get('tb_barang');
    }
    public function hitung_data_headset() {
        $this->db->where('kategori','Headset');
        return $this->db->get('tb_barang')->num_rows();

    }
    public function data_product_headset() {
        $this->db->where('kategori','Headset');
        $result = $this->db->get('tb_barang',3,0);
        // return $this->db->get('tb_barang', $limit, $start);
        return $result;
    }
// ====== Headset Product ====



// ====== Kursi Gaming ====
    public function data_kursi() {
        $this->db->where('kategori','Kursi');
        return $this->db->get('tb_barang');
    }
    public function hitung_data_kursi() {
        $this->db->where('kategori','Kursi');
        return $this->db->get('tb_barang')->num_rows();
    }
    public function data_product_kursi() {
        $this->db->where('kategori','Kursi');
        $result = $this->db->get('tb_barang',3,0);
        // return $this->db->get('tb_barang', $limit, $start);
        return $result;
    }
// ====== Kursi Gaming ====

// ====== ADMIN =====
    public function tampil_data_admin($limit, $start) {
        return $this->db->get('tb_barang', $limit, $start);
    }
    public function tampil_data() {
       
        return $this->db->get('tb_barang');
    }    
    public function detail_brg($id_brg)
    {
        $query = $this->db->where('id_brg',$id_brg)->get('tb_barang');
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }
    public function tambah_barang($data,$table) {
        
        $this->db->insert($table, $data);
    }
    public function edit_barang($where, $table) {
        
        return $this->db->get_where($table, $where);
    }
    public function update_data($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
// ====== ADMIN =====
    // ======== get data by id =========
    public function getDataById($id) {
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


}
