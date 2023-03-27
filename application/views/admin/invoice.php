<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Pembelian</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Data Pembelian Customer</li>
                </ol>
            </div>
        </main>
        <div class="container-fluid px-4">
            <?php echo $this->session->flashdata('message'); ?>
            <table class="table table-bordered mt-3">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pemesan</th>
                    <th scope="col">Alamat Pengirim</th>
                    <th scope="col">Bukti Gambar</th>
                    <th scope="col">Jasa</th>
                    <th scope="col">Bank</th>
                    <th scope="col">Tanggal Pembelian</th>
                    <th scope="col">Detail</th>
                </tr>
                <?php $no = 1;
                if (is_array($invoice) || is_object($invoice)) : ?>
                    <?php foreach ($invoice as $inv) : ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $inv->nama; ?></td>
                                <td><?= $inv->alamat; ?></td>
                                <td><img src="<?= base_url() . '/bukti/' . $inv->gambar ?>" width="150px" alt="..."></td>
                                <td><?= $inv->jasa; ?></td>
                                <td><?= $inv->bank; ?></td>
                                <td><?= $inv->tgl_pesan; ?></td>             
                                <td><?= anchor('admin/invoice/detail/'.$inv->id, '<div class = " btn btn-sm btn-warning">Detail</div>') ; ?></td>                   
                            </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
        </div>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2022</div>
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