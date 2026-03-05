<!-- ***** Preloader Start ***** -->
<div id="preloader">
  <div class="jumper">
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->
<?php $this->load->view('templates/navbar'); ?>

<!-- Page Content -->
<div class="page-heading products-heading-gayo header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>new arrivals</h4>
          <h2>Gayo</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner Ends Here -->

<div class="products">
  <div class="container">
    <div class="row mt-5">
      <div class="col-md-12 mb-4">
        <h5 class="text-center">Gayo</h5>
      </div>
      <div class="col-md-12">
        <div class="filters-content mt-4">
          <div class="row grid w-100">
            <!-- ============= Gayo ============= -->
            <?php foreach ($Gayo as $gayo_item) : ?>
              <?php
              // Tentukan path gambar
              $path = "uploads_barang/";
              $nama_folder = $gayo_item->kategori;
              $image_path = base_url($path . $nama_folder . '/' . $gayo_item->gambar);
              ?>
              <?php if ($gayo_item->kategori == "Gayo") : ?>
                <div class="col-lg-4 col-md-4 all gayo w-100">
                  <div class="product-item">
                    <!-- Cek apakah gambar tersedia -->
                    <img src="<?= $image_path; ?>" 
                         alt="Gambar <?= $gayo_item->nama_brg ?>" 
                         style="width: 100%; height: auto; object-fit: cover;">
                    <div class="down-content">
                      <h4 class="pt-3"><?= $gayo_item->nama_brg; ?></h4>
                      <h6><?= "Rp. " . number_format($gayo_item->harga); ?></h6>
                      <p><?= substr($gayo_item->keterangan, 0, 130); ?>...</p>
                      <div class="text-center">
                        <?php echo anchor('dashboard/tambah_ke_keranjang/' . $gayo_item->id_brg, 
                          '<div class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Tambah Keranjang</div>'); ?>
                        <?php echo anchor('dashboard/detail/' . $gayo_item->id_brg, 
                          '<div class="btn btn-danger">Detail</div>'); ?>
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
  </div>
</div>
