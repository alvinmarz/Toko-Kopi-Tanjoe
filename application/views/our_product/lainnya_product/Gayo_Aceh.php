<!-- CSS LANGSUNG DI HALAMAN -->
<style>

/* CARD PRODUK */
.product-item{
    background:#fff;
    border:1px solid #ddd;
    border-radius:6px;
    overflow:hidden;
    transition:0.3s;
    height:100%;
}

.product-item:hover{
    box-shadow:0 6px 15px rgba(0,0,0,0.1);
}

/* GAMBAR */
.product-item img{
    width:100%;
    height:260px;
    object-fit:cover;
}

/* KONTEN */
.down-content{
    padding:20px;
}

/* HARGA DI KANAN */
.product-header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:10px;
}

/* JUDUL PRODUK */
.product-header h4{
    font-size:17px;
    color:#1e5fa8;
    font-weight:600;
    margin:0;
}

/* HARGA */
.product-header h6{
    font-size:16px;
    font-weight:600;
    margin:0;
}

/* DESKRIPSI */
.down-content p{
    font-size:14px;
    color:#666;
    line-height:1.6;
    height:70px;
    overflow:hidden;
}

/* AREA TOMBOL */
.product-buttons{
    margin-top:15px;
}

/* TOMBOL */
.product-buttons .btn{
    padding:7px 14px;
    font-size:14px;
    border-radius:4px;
}

/* TOMBOL MERAH */
.btn-keranjang{
    background:#e63946;
    color:white;
    border:none;
}

.btn-keranjang:hover{
    background:#d62828;
    color:white;
}

/* TOMBOL DETAIL */
.btn-detail{
    background:#e63946;
    color:white;
}

.btn-detail:hover{
    background:#d62828;
}

</style>


<div id="preloader">
  <div class="jumper">
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>

<?php $this->load->view('templates/navbar'); ?>

<div class="page-heading products-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="text-content">
          <h4>TOKO KOPI TANJOE</h4>
          <h2>Gayo Aceh</h2>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="products">
<div class="container">

<div class="row mt-5">
<div class="col-md-12 mb-4">
<h5 class="text-center">Gayo Aceh</h5>
</div>

<div class="col-md-12">
<div class="filters-content mt-4">

<div class="row grid">

<?php foreach ($Gayo_Aceh as $gayo) : ?>

<?php if ($gayo->kategori == "Gayo_Aceh") : ?>

<div class="col-lg-4 col-md-6 col-sm-12 mb-4">

<div class="product-item">

<img src="<?= base_url('uploads_barang/'.$gayo->kategori.'/'.$gayo->gambar); ?>">

<div class="down-content">

<div class="product-header">
<h4><?= $gayo->nama_brg; ?></h4>
<h6>Rp.<?= number_format($gayo->harga); ?></h6>
</div>

<p><?= substr($gayo->keterangan,0,120); ?>...</p>

<div class="product-buttons">

<?= anchor(
'dashboard/tambah_ke_keranjang/'.$gayo->id_brg,
'<i class="fa fa-shopping-cart"></i> Tambah Keranjang',
'class="btn btn-keranjang me-2"'
); ?>

<?= anchor(
'dashboard/detail/'.$gayo->id_brg,
'Detail',
'class="btn btn-detail"'
); ?>

</div>

</div>
</div>

</div>

<?php endif; ?>

<?php endforeach; ?>

</div>

</div>
</div>
</div>

</div>
</div>