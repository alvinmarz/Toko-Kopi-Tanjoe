<header class="">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="<?=base_url('welcome')?>">

        <h2>AAW <em>STORE</em></h2>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <!-- <a aria-current="page" class="nav-link active">Home</a> -->
            <a aria-current="page" href="<?= base_url('welcome') ?>" <?= $this->uri->segment(1) == 'welcome' || $this->uri->segment(1) == '' ? 'class="active nav-link"' : 'class="nav-link"' ?>>Home</a>
          </li>
          <li class="nav-item">
            <a aria-current="page" href="<?= base_url('product') ?>" <?= $this->uri->segment(1) == 'product' || $this->uri->segment(1) == 'product' ? 'class="active nav-link"' : 'class="nav-link"' ?>>Our product</a>
          </li>
          <li class="nav-item">
            <a aria-current="page" href="<?= base_url('about') ?>" <?= $this->uri->segment(1) == 'about' || $this->uri->segment(1) == 'about' ? 'class="active nav-link"' : 'class="nav-link"' ?>>About Us</a>
          </li>
          <li class="nav-item">
            <a aria-current="page" href="<?= base_url('contact') ?>" <?= $this->uri->segment(1) == 'contact' || $this->uri->segment(1) == 'contact' ? 'class="active nav-link"' : 'class="nav-link"' ?>>Contact Us</a>
          </li>
          <!-- ============= -->
          <?php if ($this->session->userdata('username')) { ?>

            <li class="nav-item">
              <a class="nav-link text-white" href="<?= base_url('auth/logout') ?>">
                <i class="fa fa-user "></i>
                <?= $this->session->userdata('username'); ?> / Logout
              </a>
            </li>
            <li class="nav-itemm" style="margin-top: 10px;">
              <a class="nav-linkk text-warning" href="<?= base_url('dashboard/detail_keranjang') ?>">
              <i class="fa fa-cart-plus "></i>            
                Keranjang : <?=  $this->cart->total_items() ; ?> Barang
              </a>
            </li>
          <?php  } elseif ($this->session->userdata != ('username')) {  ?>

            <li class="nav-item">
              <a class="nav-link text-white" href="<?= base_url('auth/login') ?>">
                <i class="fa fa-user "></i>
                Login
              </a>
            </li>
          <?php }; ?>
        </ul>
      </div>
    </div>
  </nav>
</header>