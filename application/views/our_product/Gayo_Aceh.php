<div class="row mt-5">
  <div class="col-md-12 mb-4">
    <h5 class="text-center">Gayo Aceh</h5>
  </div>
  <div class="col-md-12">

    <a href="<?=base_url('product/Gayo_Aceh')?>" class="btn btn-warning text-danger">Lihat Lainnya</a>

    <div class="filters-content mt-4">

    <div class="row grid w-100">
        <!-- ============= krse ============= -->
        <?php foreach ($Gayo_Aceh as $krs) : ?>
          <?php
          $path = "/uploads_barang/";
          $nama_folder = $krs->kategori;
          ?>
          <?php if ($krs->kategori == "Gayo_Aceh") : ?>
            <div class="col-lg-4 col-md-4 all krse">
              <div class="product-item d-flex flex-column h-100">
              <img src="<?= base_url() . $path, $nama_folder . '/' . $krs->gambar; ?>">
                <div class="down-content d-flex flex-column flex-grow-1">
                  <p href="#">
                  <h4 class="pt-3"><?= $krs->nama_brg; ?></h4>
                  </p>
                  <h6><?= "Rp." . number_format($krs->harga); ?></h6>
                  <p><?= substr($krs->keterangan, 0, 130); ?>...</p>
                  <div class="text-center mt-auto">                    
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