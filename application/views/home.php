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
            <h4>best item</h4>
            <h2>Strategi Pemain Game</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>best playing experience</h4>
            <h2>win the game and beat the loser.</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->
    <div class="latest-products">
      <div class="container">
        <div class="row">

          <div class="col-md-12">
            <div class="section-heading">
              <h2>Best Products</h2>
              <a href="<?= base_url('Product') ?>">>view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <?php foreach ($barang as $brg) : ?>
            <div class="col-md-4">
              <div class="product-item">
                <?php $folder = $brg->kategori;

                ?>
                <?php
                if ($brg->kategori2 == "Best Product") :    ?>
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
    <!-- === -->
    </div>
    </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About <b>AAW <span class="store_home">STORE</span></b> </h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Want to play games and become a champion?</h4>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus inventore veritatis ratione blanditiis cupiditate labore autem sunt placeat quidem sapiente!</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-imagee.jpg" alt="">
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
                <p>Made &copy; 2023 AAW STORE. </p>
              </b>
    
          </div>
        </div>
      </div>
    </footer>