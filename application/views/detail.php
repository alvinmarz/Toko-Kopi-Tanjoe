
<div class="container-fluid">
    <div class="card">
        <h5 class="card-header">Detail Produk</h5>
        <div class="card-body">
            <?php foreach ($barang as $brg) : ?>
                <div class="row">
                    <div class="col-md-5">
                        <!-- ========== PENGKONDISIAN ==========-->
                        <?php
                        $nama_kategori = $brg->kategori."/";
                        $folder = '/uploads_barang/' ?>
                        <!-- ========== PENGKONDISIAN ==========-->
                        <img src="<?= base_url() . $folder.$nama_kategori  . $brg->gambar ?>" alt="" class="card-img-top w-75">

                    </div>
                    <div class="col-md-7">
                        <table class="table">
                            <tr>
                                <td class="w-25">Nama Produk</td>
                                <td><strong><?php echo $brg->nama_brg;  ?></strong> </td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>
                                    <strong><?php echo $brg->keterangan; ?></strong>
                                </td>
                            </tr>
                            <tr>
                                <td>Kategori</td>
                                <td><strong><?php echo $brg->kategori; ?></strong> </td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><strong><?php echo $brg->stok; ?></strong> </td>
                            </tr>                   
                            <tr>
                                <td>Harga</td>                        
                                <td><strong>
                                        <div class="btn btn-sm btn-success">Rp. <?php echo number_format($brg->harga, 0, ',', '.'); ?></div>
                                    </strong> </td>
                            </tr>
                          
                        </table>

                        <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-sm btn-primary "><i class="fa fa-shopping-cart pt-2 pb-2 pr-2"></i>Tambah ke keranjang</div>'); ?>
                        <?php echo anchor('welcome', '<div class="btn btn-sm btn-danger"><i class="fa fa-chevron-circle-left pt-2 pb-2 pr-2" aria-hidden="true"></i>Kembali</div>'); ?>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>