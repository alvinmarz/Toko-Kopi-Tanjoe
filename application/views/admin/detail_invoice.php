<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data</h1>
                <div class="btn btn-sm btn-success">No. Invoice : <?= $invoice->id_invoice ?></div>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Data Mesaage / Pesan dari Customer</li>
                </ol>
            </div>
        </main>
        <div class="container-fluid px-4">
            <?php echo $this->session->flashdata('message'); ?>
            <table class="table table-bordered mt-3">
                <tr>
                    <th scope="col">ID Barang</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah Pesanan</th>
                    <th scope="col">Harga Satuan</th>
                    <th scope="col">Sub-Total</th>
                </tr>
                <?php foreach ($pesanan as $psn) : ?>
                    <?php
                    $total = 0;
                    $subtotal = $psn->jumlah * $psn->harga;
                    $total += $subtotal;
                    ?>
                    <tr>
                        <td> <?php echo $psn->id_brg; ?> </td>
                        <td> <?php echo $psn->nama_brg; ?> </td>
                        <td> <?php echo $psn->jumlah; ?> </td>
                        <td> <?php echo number_format($psn->harga, 0, ',', '.'); ?> </td>
                        <td> <?php echo number_format($subtotal, 0, ',', '.'); ?> </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4" align="right">Grand Total </td>
                    <td align="right">Rp. <?php echo number_format($total, 0, ',', '.'); ?> </td>
                </tr>
            </table>
            <a href="<?= base_url('admin/invoice'); ?>" class="btn btn-sm btn-danger"><i class="fa-solid fa-circle-chevron-left"></i> Kembali</a>
        </div>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Toko Kopi Tanjoe 2024</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>

<script>
    function hapus_function() {
        confirm('Yakin dihapus?');

    }
</script>