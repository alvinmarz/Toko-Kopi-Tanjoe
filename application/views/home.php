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

<!-- Banner Starts Here -->
<div class="banner header-text">
  <div class="owl-banner owl-carousel">
    <div class="banner-item-01">
      <div class="text-content">
        <h4>TOKO KOPI TANJOE</h4>
        <h2>Kedai Beans yang menghadirkan cita rasa kopi autentik</h2>
      </div>
    </div>
    <div class="banner-item-02">
      <div class="text-content">
        <h4>BANYAK DISKON</h4>
        <h2>Pilih Beans Terbaik Kamu</h2>
      </div>
    </div>
    <div class="banner-item-03">
      <div class="text-content">
        <h4>CITA RASA</h4>
        <h2>Seluruh Indonesia</h2>
      </div>
    </div>
  </div>
</div>
<!-- Banner Ends Here -->
<div class="latest-products">
  <div class="container">
    <div class="row">
      <div class="best-features">
        <div class="container">
          <div class="row">
          <?php if ($this->session->userdata('id_user')): ?>
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Bingung <b>Pilih Beans <span class="store_home">Favorit Kamu?</span></b> </h2>
              </div>
            </div>
            <div class="col-md-12">
              <div class="section-heading">
                <h2><br><br>Rekomendasi untuk Anda</h2>
                <a href="<?= base_url('Product') ?>">View All Products <i class="fa fa-angle-right"></i></a>
              </div>
            </div>
              <?php if (!empty($rekomendasi)): ?>
                <div class="row">
                  <?php foreach ($rekomendasi as $brg): ?>
                    <div class="col-md-4 mb-4">
                      <div class="card shadow-sm">
                        <?php
                        $folder = $brg->kategori;
                        ?>
                        <img src="<?= base_url('uploads_barang/' . $folder . '/' . $brg->gambar); ?>" class="card-img-top"
                          alt="<?= $brg->nama_brg; ?>" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                          <h5 class="card-title"><?= htmlspecialchars($brg->nama_brg); ?></h5>
                          <p class="card-text text-muted">
                            <?= substr($brg->keterangan, 0, 130); ?>...
                          </p>
                          <h6 class="text-danger font-weight-bold"><?= "Rp " . number_format($brg->harga, 0, ',', '.'); ?>
                          </h6>
                          <div class="d-flex justify-content-between mt-3">
                            <?= anchor(
                              'dashboard/tambah_ke_keranjang/' . $brg->id_brg,
                              '<button class="btn btn-sm btn-danger"><i class="fa fa-shopping-cart"></i> Tambah Keranjang</button>'
                            ); ?>
                            <?= anchor(
                              'dashboard/detail/' . $brg->id_brg,
                              '<button class="btn btn-sm btn-secondary">Detail</button>'
                            ); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php endforeach; ?>
                </div>
              <?php else: ?>
                <p class="text-muted">Beli salah satu produk untuk mendapatkan rekomendasi.</p>
              <?php endif; ?>
            <?php else: ?>
            <?php endif; ?>
            <div class="col-md-12">
              <div class="section-heading">
                <h2><br><br>Best Products</h2>
                <a href="<?= base_url('Product') ?>">view all products <i class="fa fa-angle-right"></i></a>
              </div>

            </div>
            <?php foreach ($barang as $brg): ?>
              <div class="col-md-4">
                <div class="product-item">
                  <?php $folder = $brg->kategori;

                  ?>
                  <?php
                  if ($brg->kategori2 == "Best Product"): ?>
                    <img src="<?= base_url() . '/uploads_barang/' . $folder . '/' . $brg->gambar; ?>">
                  <?php endif; ?>
                  <div class="down-content">
                    <p href="#">
                    <h4 class="pt-3"><?= $brg->nama_brg; ?></h4>
                    </p>
                    <h6><?= "Rp." . number_format($brg->harga); ?></h6>
                    <p><?= substr($brg->keterangan, 0, 130); ?>...</p>
                    <div class="text-center">
                      <?php echo anchor('dashboard/tambah_ke_keranjang/' . $brg->id_brg, '<div class="btn btn-danger"><i class="fa fa-shopping-cart"></i>Tambah Keranjang</div>'); ?>
                      <!-- <a href="" class="btn btn-danger"><i class="fa fa-shopping-cart"></i> Tambah Keranjang</a> -->
                      <?php echo anchor('dashboard/detail/' . $brg->id_brg, '<div class="btn btn-danger">Detail</div>'); ?>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>


      <div class="best-features">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>About <b>TOKO KOPI <span class="store_home">TANJOE</span></b> </h2>
              </div>
            </div>
            <div class="col-md-6">
              <div class="left-content">
                <h4>Apa daya tarik kopi kami?</h4>
                <p>Toko Kopi Tanjoe menawarkan berbagai pilihan kopi berkualitas tinggi,</p>
                <ul class="featured-list">
                  <li><a href="#">Kopi lokal Nusantara</a></li>
                  <li><a href="#">Racikan khas barista profesional</a></li>
                  <li><a href="#">Beans Terbaik</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right-image">
                <img src="assets/images/ubah.
              " alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer>
        <div class="container my-5">
          <div class="row">
            <div class="col-md-12">
              <b>
                <p>Made &copy; 2024 TOKO KOPI TANJOE. </p>
              </b>

            </div>
          </div>
        </div>
      </footer>