<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Data Barang</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Data Barang</li>
                </ol>
            </div>
        </main>
        <div class="container-fluid px-4">

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="fa-solid fa-plus"></i> Tambah Barang
            </button>


            <?php echo $this->session->flashdata('message'); ?>

            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="<?= base_url() . 'admin/Data_barang/tambah_aksi'; ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                                    <input type="text" name="nama_brg" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Keterangan Barang</label>
                                    <input type="text" name="keterangan" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Kategori Barang</label>
                                    <select class="custom-select custom-select-lg mb-3 form-control" name="kategori">
                                        <option selected>Pilih Kategori</option>
                                        <option value="Keyboard">Keyboard</option>
                                        <option value="Kursi">Kursi</option>
                                        <option value="Mouse">Mouse</option>
                                        <option value="Mousepad">Mousepad</option>
                                        <option value="Headset">Headset</option>
                                        <option value="Vga">VGA</option>
                                        <option value="Game">GAME</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Best Product / Tidak</label>
                                    <select class="custom-select custom-select-lg mb-3 form-control" name="kategori2">
                                        <option selected>Pilih Kategori</option>
                                        <option value="Best Product">Best Product</option>
                                        <option value="Biasa">--- Umum ---</option>                                        
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
                                    <input type="text" name="harga" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Stock Barang</label>
                                    <input type="text" name="stok" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Gambar Barang</label>
                                    <input type="file" name="gambar" class="form-control">
                                </div>
                                
                                <div class="modal-footer ms-auto">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>

            <input type="text" class="form-control w-25" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">


            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Keterangan</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Kategori2</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Stock</th>
                        <th scope="col">GamSar</th>
                        <th colspan="3">AKSI</th>
                    </tr>
                </thead>
                <tbody id="myTable">
                    <?php
                    $no = 1;
                    foreach ($barang as $brg) : ?>
                        <?php
                        $hargaa = $brg->harga;
                        ?>

                        <tr>
                            <th scope="row"><?= ++$start; ?></th>
                            <td><?= $brg->nama_brg; ?></td>
                            <td><?= $brg->keterangan; ?></td>
                            <td><?= $brg->kategori; ?></td>
                            <td><?= $brg->kategori2; ?></td>

                            <td><?= "Rp . " . number_format($hargaa); ?></td>

                            <td><?= $brg->stok; ?></td>
                            <td><?= $brg->gambar; ?></td>
                            <td>
                                <!-- <a href="" class="btn btn-success"><i class="fa-solid fa-pen-to-square"></i></a> -->
                                <?php echo anchor('admin/data_barang/edit/' . $brg->id_brg, '<div class="btn btn-warning btn-sm"><i class="fa-solid fa-pen-to-square"></i></div>'); ?>
                            </td>
                            <td>
                                <?php echo anchor('admin/data_barang/hapus/' . $brg->id_brg, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>'); ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
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
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>