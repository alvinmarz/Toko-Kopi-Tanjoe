<div class="container mt-5">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php
                $grand_total = 0;
                if ($keranjang = $this->cart->contents()) {
                    foreach ($keranjang as $item) {
                        $grand_total = $grand_total + $item['subtotal'];
                    }
                    echo "<h4> Total Belanja Anda Rp. " . number_format($grand_total, 0, ',', '.');
                ?>
            </div> <br> <br>
            <h3>Input Alamat Pengiriman & Pembayaran</h3>
            <form action="<?= base_url() ?>dashboard/proses_pesanan " method="post" enctype="multipart/form-data">

                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" placeholder="Nama Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>Alamat Lengkap</label>
                    <input type="text" name="alamat" placeholder="Alamat Lengkap Anda" class="form-control">
                </div>

                <div class="form-group">
                    <label>No. Telepon</label>
                    <input type="text" name="no_telp" placeholder="Nomor Telepon Anda" class="form-control">
                </div>
                <div class="form-group">
                    <label>Jasa Pengiriman</label>
                    <select name="jasa" id="" class="form-control">
                        <option>JNE</option>
                        <option>TIKI</option>
                        <option>POS Indonesia</option>
                        <option>GOJEK</option>
                        <option>GRAB</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Pilih Bank</label>
                    <select name="bank" id="" class="form-control">
                        <option>BCA - 123456</option>
                        <option>BNI - 654321</option>
                        <option>MANDIRI - 123654</option>
                    </select>
                </div>
                <div class="form-group">                    
                    <label>Masukan Bukti Transfer Anda</label>
                    <input type="file" name="gambar" class="form-control">
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Pesan</button>
            </form>
            <?php
            } else {
                // $this->session->flashdata('keranjang_kosong_pembayaran');
                                
            }
            ?>
            
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
