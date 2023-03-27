<div class="row mt-5">
  <div class="col-md-12 mb-4">
    <h5 class="text-center">Mousepad</h5>
  </div>
  <div class="col-md-12">

    <a href="<?=base_url('product/mousepad')?>" class="btn btn-warning text-danger">Lihat Lainnya</a>

    <div class="filters-content mt-4">

    <div class="row grid w-100">
        <!-- ============= Mouse ============= -->
        <?php foreach ($mousepad as $mous) : ?>
          <?php if ($mous->kategori == "Mousepad") : ?>
            <div class="col-lg-4 col-md-4 all mousepad w-100">
              <div class="product-item">
                <img src="<?= base_url() . '/uploads_barang/Mousepad/' . $mous->gambar; ?>">
                <div class="down-content">
                  <p href="#">
                  <h4 class="pt-3"><?= $mous->nama_brg; ?></h4>
                  </p>
                  <h6><?= "Rp." . number_format($mous->harga); ?></h6>
                  <p><?= substr($mous->keterangan, 0, 130); ?>...</p>
                  <div class="text-center">
                    <?php echo anchor('dashboard/tambah_ke_keranjang/' . $mous->id_brg, '<div class="btn btn-danger"><i class="fa fa-shopping-cart"></i>Tambah Keranjang</div>'); ?>                    
                    <?php echo anchor('dashboard/detail/' . $mous->id_brg, '<div class="btn btn-danger">Detail</div>'); ?>
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