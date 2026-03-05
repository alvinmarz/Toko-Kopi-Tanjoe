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

            <div class="container-fluid px-4">
                <?php echo $this->session->flashdata('message'); ?>
                <table class="table table-bordered table-responsive-sm">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Pemesan</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jasa Pengiriman</th>
                            <th scope="col">Bank</th>
                            <th scope="col">Tanggal Pesan</th>
                            <th scope="col">Batas Pembayaran</th>
                            <th scope="col">Status Pembelian</th>
                            <th scope="col">Status Pembayaran</th>
                            <th scope="col">Resi</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($detail_pesanan as $pesan) { ?>
                            <tr>
                                <th scope="row"><?= $no++; ?></th>
                                <td><?= $pesan->nama_pemesan; ?></td>
                                <td><?= $pesan->alamat; ?></td>
                                <td><?= $pesan->jasa; ?></td>
                                <td><?= $pesan->bank; ?></td>
                                <td><?= $pesan->tgl_pesan; ?></td>
                                <td><?= $pesan->batas_bayar; ?></td>
                                <td>
                                    <form action="<?= site_url('admin/detail_pesanan/update_status_pembelian') ?>" method="post">
                                        <input type="hidden" name="id_detail_pesanan" value="<?= $pesan->id_detail_pesanan ?>">
                                        <select name="status_pembelian" class="form-control">
                                            <?php foreach ($status_pembelian as $status): ?>
                                                <option value="<?= $status ?>" <?= $pesan->status_pembelian == $status ? 'selected' : ''; ?>><?= ucfirst($status) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <button type="submit" class="btn btn-success btn-sm mt-2">Update</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="<?= site_url('admin/detail_pesanan/update_status_pembayaran') ?>" method="post">
                                        <input type="hidden" name="id_detail_pesanan" value="<?= $pesan->id_detail_pesanan ?>">
                                        <select name="status_pembayaran" class="form-control">
                                            <?php foreach ($status_pembayaran as $status): ?>
                                                <option value="<?= $status ?>" <?= $pesan->status_pembayaran == $status ? 'selected' : ''; ?>><?= ucfirst($status) ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                        <button type="submit" class="btn btn-success btn-sm mt-2">Update</button>
                                    </form>
                                </td>
                                <td>
                                    <?php if (empty($pesan->resi)) { ?>
                                        <form action="<?= site_url('admin/detail_pesanan/update_resi/' . $pesan->id_detail_pesanan); ?>" method="post">
                                            <input type="text" name="resi" class="form-control" placeholder="Masukkan Resi">
                                            <button type="submit" class="btn btn-success btn-sm mt-2">Update</button>
                                        </form>
                                    <?php } else { ?>
                                        <?= $pesan->resi; ?>
                                    <?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; AAW 2023</div>
                </div>
            </div>
        </footer>
    </div>
</div>

</body>
</html>
