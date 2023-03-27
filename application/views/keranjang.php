


<div class="container mt-5">
    <h3 class="mb-4">Detail Keranjang</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Barang</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Harga</th>
                <th scope="col">Subtotal</th>
            </tr>

        </thead>
        <?php $no = 1;
        foreach ($this->cart->contents() as $items) : ?>
            <tr>
                <td><?php echo $no++; ?> </td>
                <td><?php echo $items['name']; ?> </td>
                <td><?php echo $items['qty'] ?></td>
                <td align="right">Rp. <?php echo number_format($items['price'], 0, ',', '.'); ?></td>
                <td align="right">Rp. <?php echo number_format($items['subtotal'], 0, ',', '.'); ?></td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="4"></td>
            <td align="right">Rp. <?= number_format($this->cart->total(), 0, ',', '.'); ?> </td>
        </tr>
    </table>
    <div align="right">
  
        <a href="<?= base_url('dashboard/hapus_keranjang')?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus Keranjang</a>
        <a href="<?= base_url('Product/index')?>" class="btn btn-warning" ><i class="fa fa-cart-plus"></i> Lanjutkan Belanja</a>
        <a href="<?= base_url('dashboard/pembayaran')?>" class="btn btn-success"><i class="fa fa-money"></i> Bayar</a>

    </div>

</div>