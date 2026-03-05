
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
  
    <?php $this->load->view('templates/navbar') ; ?>

    <!-- Page Content -->
    <div class="page-heading products-heading-gayoaceh header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>History</h4>
              <h2>our order</h2>
            </div>
          </div>
        </div>
      </div>
    </div>




<div class="container mt-5">
    <h3 class="text-center mb-4">Detail Pesanan</h3>

    <!-- Tabel untuk menampilkan detail pesanan -->
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Pemesan</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Jasa Pengiriman</th>
                        <th scope="col">Bank</th>
                        <th scope="col">Status Pembelian</th>
                        <th scope="col">Status Pembayaran</th>
                        <th scope="col">Resi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($detail_pesanan)): ?>
                        <?php $no = 1; ?>
                        <?php foreach ($detail_pesanan as $pesanan): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $pesanan->nama_pemesan; ?></td>
                                <td><?= $pesanan->nama_brg; ?></td>
                                <td><?= $pesanan->alamat; ?></td>
                                <td><?= $pesanan->jasa; ?></td>
                                <td><?= $pesanan->bank; ?></td>
                                <td><?= $pesanan->status_pembelian; ?></td>
                                <td><?= $pesanan->status_pembayaran; ?></td>
                                <td><?= $pesanan->resi ?: 'Belum ada resi'; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="10" class="text-center">Data tidak ditemukan.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


<!-- Additional Scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/slick.js"></script>
<script src="assets/js/isotope.js"></script>
<script src="assets/js/accordions.js"></script>


<script language="text/Javascript">
    cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
    function clearField(t) {                   //declaring the array outside of the
        if (!cleared[t.id]) {                      // function makes it static and global
            cleared[t.id] = 1;  // you could use true and false, but that's more typing
            t.value = '';         // with more chance of typos
            t.style.color = '#fff';
        }
    }
</script>


</body>

</html>