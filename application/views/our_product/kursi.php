<div class="row mt-5">
  <div class="col-md-12 mb-4">
    <h5 class="text-center">Kursi Gaming</h5>
  </div>
  <div class="col-md-12">

    <a href="<?=base_url('product/kursi')?>" class="btn btn-warning text-danger">Lihat Lainnya</a>

    <div class="filters-content mt-4">

    <div class="row grid w-100">
        <!-- ============= krse ============= -->
        <?php foreach ($kursi as $krs) : ?>
          <?php
          $path = "/uploads_barang/";
          $nama_folder = $krs->kategori;
          ?>
          <?php if ($krs->kategori == "Kursi") : ?>
            <div class="col-lg-4 col-md-4 all krse w-100">
              <div class="product-item">
              <img src="<?= base_url() . $path, $nama_folder . '/' . $krs->gambar; ?>">
                <div class="down-content">
                  <p href="#">
                  <h4 class="pt-3"><?= $krs->nama_brg; ?></h4>
                  </p>
                  <h6><?= "Rp." . number_format($krs->harga); ?></h6>
                  <p><?= substr($krs->keterangan, 0, 130); ?>...</p>
                  <div class="text-center">                    
                    <?php echo anchor('dashboard/tambah_ke_keranjang/' . $krs->id_brg, '<div class="btn btn-danger"><i class="fa fa-shopping-cart"></i>Tambah Keranjang</div>'); ?>
                    <?php echo anchor('dashboard/detail/' . $krs->id_brg, '<div class="btn btn-danger">Detail</div>'); ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; ?>
      </div>
    </div>
    <center>
      <!-- <button class="btn btn-danger my-3">Load More</button> -->
    </center>
  </div>
</div>