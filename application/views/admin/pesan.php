<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Pesan</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Data Mesaage / Pesan dari Customer</li>
                </ol>
            </div>
        </main>
        <div class="container-fluid px-4">
            <?php echo $this->session->flashdata('message'); ?>
            <table class="table table-bordered table-table-responsive-sm">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Pesan</th>
                        <th scope="col">Tanggal Pesan</th>
                        <th scope="col" >Hapus</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($barang as $brg) { ?>
                        <tr>
                            <th scope="row"><?= ++$start; ?></th>
                            <td><?= $brg->name; ?></td>
                            <td><?= $brg->email; ?></td>
                            <td><?= $brg->subject; ?></td>
                            <td><?= $brg->pesan; ?></td>
                            <td><?= $brg->tanggal_pesan; ?></td>
                            <td>
                                <?php echo anchor('admin/Pesan/hapus/' . $brg->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?>
                            </td>
                        </tr>
                    <?php }; ?>
                </tbody>
            </table>
            <?= $this->pagination->create_links(); ?>
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