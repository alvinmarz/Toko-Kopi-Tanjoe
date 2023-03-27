<script>
    <?php if ($this->session->flashdata('success_login')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Login Berhasil',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_pesan')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Pesan Berhasil dikirim !',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_tambah_keranjang')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Tambah Keranjang Berhasil',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>

    <?php if ($this->session->flashdata('success_hapussurat')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Surat Berhasil dihapus',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('success_ubahsurat')) { ?>
        Swal.fire({
            title: 'Success!',
            text: 'Surat Berhasil diubah',
            icon: 'success',
            confirmButtonText: 'Oke'
        })
    <?php } ?>
    <?php if ($this->session->flashdata('keranjang_kosong_pembayaran')) { ?>
        Swal.fire({
            title: 'Oops...!',
            text: 'Anda belum mempunyai keranjang',
            icon: 'error',
            confirmButtonText: 'Oke'
        })
    <?php } ?>

    
</script>