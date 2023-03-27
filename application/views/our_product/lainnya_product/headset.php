
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


    <div class="page-heading products-heading-headset header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>new arrivals</h4>
              <h2>Headset</h2>
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
    <h5 class="text-center">Headset</h5>
  </div>
  <div class="col-md-12">
    <div class="filters-content mt-4">

    <div class="row grid w-100">
        <!-- ============= Mouse ============= -->
        <?php foreach ($headset_lainnya as $headset) : ?>
          <?php
          $path = "/uploads_barang/";
          $nama_folder = $headset->kategori;
          ?>
          <?php if ($headset->kategori == "Headset") : ?>
            <div class="col-lg-4 col-md-4 all mouse w-100">
              <div class="product-item">
              <img src="<?= base_url() . $path, $nama_folder . '/' . $headset->gambar; ?>">
                <div class="down-content">
                  <p href="#">
                  <h4 class="pt-3"><?= $headset->nama_brg; ?></h4>
                  </p>
                  <h6><?= "Rp." . number_format($headset->harga); ?></h6>
                  <p><?= substr($headset->keterangan, 0, 130); ?>...</p>
                  <div class="text-center">                    
                    <?php echo anchor('dashboard/tambah_ke_keranjang/' . $headset->id_brg, '<div class="btn btn-danger"><i class="fa fa-shopping-cart"></i>Tambah Keranjang</div>'); ?>
                    <?php echo anchor('dashboard/detail/' . $headset->id_brg, '<div class="btn btn-danger">Detail</div>'); ?>
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