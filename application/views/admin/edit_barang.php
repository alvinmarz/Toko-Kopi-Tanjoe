<?php echo $this->session->flashdata('pesan'); ?>

<?php $this->load->view('templatesAdmin/navbar'); ?>
<div id="layoutSidenav">
    <?php $this->load->view('templatesAdmin/sidebar'); ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">Edit Barang</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Edit Barang</li>
                </ol>
            </div>
        </main>
        <!-- ============= -->
        <div class="container-fluid px-4">
            <?php foreach ($barang as $brg) { ?>
                <form action="<?= base_url() . 'admin/Data_barang/update'; ?>" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Barang</label>
                        <input type="text" name="nama_brg" class="form-control" value="<?= $brg->nama_brg; ?>">
                        <input type="hidden" name="id_brg" class="form-control" value="<?= $brg->id_brg; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Keterangan Barang</label>
                        <textarea name="keterangan" class="form-control" id="" cols="30" rows="10"><?= $brg->keterangan; ?> </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Kategori Barang</label>
                        <input type="text" name="nama_brg" class="form-control my-4" value="<?= $brg->kategori; ?>" disabled="false" />

                        <select class="custom-select custom-select-lg mb-3 form-control" name="kategori">
                            <option selected><?= $brg->kategori; ?> </option>
                            <?php if ($brg->kategori == "Mousepad") : ?>
                                <option value="Keyboard">Keyboard</option>
                                <option value="Kursi">Kursi</option>
                                <option value="Mouse">Mouse</option>
                                <option value="Headset">Headset</option>
                                <option value="Vga">VGA</option>
                                <option value="Game">GAME</option>
                            <?php endif; ?>
                            <?php if ($brg->kategori == "Keyboard") : ?>
                                <option value="Kursi">Kursi</option>
                                <option value="Mouse">Mouse</option>
                                <option value="Headset">Headset</option>
                                <option value="Vga">VGA</option>
                                <option value="Game">GAME</option>
                            <?php endif; ?>
                            <?php if ($brg->kategori == "Kursi") : ?>
                                <option value="Keyboard">Keyboard</option>
                                <option value="Mouse">Mouse</option>
                                <option value="Headset">Headset</option>
                                <option value="Vga">VGA</option>
                                <option value="Game">GAME</option>
                            <?php endif; ?>
                            <?php if ($brg->kategori == "Mouse") : ?>
                                <option value="Keyboard">Keyboard</option>
                                <option value="Kursi">Kursi</option>
                                <option value="Headset">Headset</option>
                                <option value="Vga">VGA</option>
                                <option value="Game">GAME</option>
                            <?php endif; ?>
                            <?php if ($brg->kategori == "Headset") : ?>
                                <option value="Keyboard">Keyboard</option>
                                <option value="Kursi">Kursi</option>
                                <option value="Mouse">Mouse</option>
                                <option value="Vga">VGA</option>
                                <option value="Game">GAME</option>
                            <?php endif; ?>
                            <?php if ($brg->kategori == "Vga") : ?>
                                <option value="Keyboard">Keyboard</option>
                                <option value="Kursi">Kursi</option>
                                <option value="Mouse">Mouse</option>
                                <option value="Headset">Headset</option>
                                <option value="Game">GAME</option>
                            <?php endif; ?>
                            <?php if ($brg->kategori == "Game") : ?>
                                <option value="Keyboard">Keyboard</option>
                                <option value="Kursi">Kursi</option>
                                <option value="Mouse">Mouse</option>
                                <option value="Headset">Headset</option>
                                <option value="Vga">VGA</option>
                            <?php endif; ?>
                        </select>
                    </div>
                    <!-- KATEGORI 2 -->
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Best Product / Tidak</label>
                        <input type="text" name="nama_brg" class="form-control my-4" value="<?= $brg->kategori2; ?>" disabled="false" />

                        <select class="custom-select custom-select-lg mb-3 form-control" name="kategori2">
                            <option selected><?= $brg->kategori2; ?> </option>
                            <?php if ($brg->kategori2 == "Best Product") : ?>
                                <option value="Biasa">--- Umum ---</option>
                       
                            <?php endif; ?>
                            <?php if ($brg->kategori2 !== "Best Product") : ?>
                                <option value="Best Product">Best Product</option>
                            <?php endif; ?>
                        </select>
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Harga Barang</label>
                        <input type="text" name="harga" class="form-control" value="<?= $brg->harga; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Stock Barang</label>
                        <input type="text" name="stok" class="form-control" value="<?= $brg->stok; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Gambar Barang</label>
                        <div class="card my-3" style="width: 18rem;">

                        <?php
                            $path = "/uploads_barang/";
                            $nama_folder = $brg->kategori;
                        ?>
                                <img src="<?= base_url() . $path, $nama_folder.'/' . $brg->gambar; ?>" class="form-control card-img-top">
                            <div class="card-body">
                                <p class="card-text"><?= $brg->gambar; ?></p>
                            </div>
                        </div>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <div class="modal-footer ms-auto">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href=" <?= base_url('admin/data_barang') ?>" class="btn btn-danger">Kembali</a>
                    </div>
                </form>
            <?php }; ?>








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