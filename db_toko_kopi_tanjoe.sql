-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2024 pada 17.02
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_toko_kopi_tanjoe`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(150) NOT NULL,
  `keterangan` text NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `kategori2` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` text NOT NULL,
  `berat_barang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `kategori2`, `harga`, `stok`, `gambar`, `berat_barang`) VALUES
(69, 'Aceh Gayo La reurnion', 'Aceh Gayo La Reunion adalah kopi premium yang berasal dari daerah Gayo, Aceh, dengan karakteristik rasa yang kaya dan seimbang. Kopi ini menggunakan varietas Arabika yang ditanam di tanah subur hasil letusan gunung berapi, memberikan aroma harum dengan sentuhan cokelat, rempah, dan buah. Diproses menggunakan metode giling basah, kopi ini memiliki keasaman rendah dan tekstur halus. Keunggulannya menjadikannya kopi specialty yang banyak dicari pecinta kopi di seluruh dunia.', 'Gayo_Aceh', 'Best Product', 50000, 88, 'Aceh_Gayo_La_reurnion_(1).jpg', 100000),
(70, 'Aceh Gayo Literal 1975', 'Aceh Gayo Literal 1975 adalah kopi Arabika khas dari dataran tinggi Gayo, Aceh, yang terkenal dengan kualitas premium dan cita rasa khas. Ditanam di wilayah dengan ketinggian ideal, kopi ini memiliki karakteristik rasa yang kompleks dengan sentuhan manis, aroma rempah, dan keasaman yang seimbang. Proses pengolahan yang hati-hati memastikan kualitas biji kopi tetap terjaga, menghasilkan secangkir kopi yang halus dan penuh rasa. Aceh Gayo Literal 1975 merupakan pilihan tepat bagi penggemar kopi yang menginginkan pengalaman rasa kopi Aceh yang otentik dan memikat.', 'Gayo_Aceh', 'Biasa', 50000, 98, 'Aceh_Gayo_Literal_1975_(1)1.jpg', 100000),
(71, 'Aceh gayo nektars', ' Aceh Gayo Nektars adalah varian kopi Arabika asal Aceh yang dikenal dengan keunikan rasa manis dan aroma khas yang memikat. Ditanam di dataran tinggi Gayo, daerah yang terkenal akan keasaman dan kehalusan kopi, Aceh Gayo Nektars menawarkan profil rasa yang seimbang antara manis, buah-buahan, dan sedikit rempah. Proses pasca-panen yang cermat dan metode pengolahan yang teliti menjaga kualitas biji kopi, menjadikannya pilihan favorit bagi para pecinta kopi yang mencari cita rasa yang kaya dan intens. Dengan keasaman yang lembut dan rasa yang memanjakan lidah, Aceh Gayo Nektars menghadirkan pengalaman kopi yang menyenangkan dan memuaskan.', 'Gayo_Aceh', 'Best Product', 70000, 89, 'Aceh_gayo_nektars_(1).jpg', 100000),
(72, 'Aceh Gayo Paya Dedep', ' Aceh Gayo Paya Dedep adalah varian kopi Arabika yang berasal dari daerah dataran tinggi Gayo, Aceh, yang dikenal dengan kualitasnya yang luar biasa. Kopi ini ditanam di wilayah Paya Dedep, yang memiliki ketinggian dan iklim yang ideal untuk menghasilkan biji kopi dengan rasa yang kaya dan kompleks. Aceh Gayo Paya Dedep memiliki rasa yang seimbang dengan keasaman yang lembut, rasa manis alami, serta aroma floral yang khas. Proses pengolahan yang hati-hati dan teliti menjaga kualitas kopi, menghasilkan cita rasa yang cerah dengan sentuhan rempah dan cokelat. Kopi ini sangat disukai oleh para penikmat kopi yang mencari kedalaman rasa dan keaslian kopi dari daerah Aceh.', 'Gayo_Aceh', 'Biasa', 50000, 100, 'Aceh_Gayo_Paya_Dedep.jpg', 100000),
(73, 'Aceh Gayo Rampoge', ' Aceh Gayo Rampoge adalah salah satu varian kopi Arabika yang berasal dari dataran tinggi Gayo, Aceh, yang terkenal dengan kualitasnya yang unggul. Kopi ini ditanam di kawasan Rampoge, sebuah daerah yang memiliki ketinggian dan kondisi tanah yang sangat cocok untuk produksi kopi dengan cita rasa yang kaya. Aceh Gayo Rampoge dikenal dengan karakter rasa yang halus dan penuh, dengan keasaman yang lembut dan rasa manis alami. Kopi ini juga memiliki aroma floral yang menyegarkan serta sentuhan rasa cokelat dan rempah yang menambah kedalaman. Dengan metode pengolahan yang tradisional dan hati-hati, kopi ini menawarkan pengalaman rasa yang kompleks dan memuaskan bagi para penggemar kopi.', 'Gayo_Aceh', 'Biasa', 50000, 100, 'Aceh_Gayo_Rampoge.jpg', 100000),
(74, 'Aceh Gayo Rismara', ' Aceh Gayo Rismara adalah salah satu varian kopi Arabika yang dihasilkan dari dataran tinggi Gayo, Aceh. Kopi ini memiliki ciri khas rasa yang halus dan seimbang, dengan keasaman yang lembut dan rasa manis alami. Rismara sendiri merujuk pada nama kelompok petani atau wilayah tertentu di daerah Gayo yang dikenal dengan kualitas hasil kopi yang konsisten. Kopi Aceh Gayo Rismara menawarkan aroma yang kaya dan menyegarkan, dengan rasa kompleks yang menggabungkan sentuhan rempah, cokelat, dan sedikit rasa buah. Proses pengolahan biji kopi yang teliti serta kondisi tanah yang subur di Gayo membuat kopi ini menjadi pilihan yang sangat dihargai oleh para pecinta kopi di seluruh dunia.', 'Gayo_Aceh', 'Biasa', 50000, 100, 'Aceh_Gayo_Rismara.jpg', 100000),
(79, 'Aceh  gayo', 'safhbasfja', 'Gayo_Aceh', 'Best Product', 0, -2, 'produk_(6)1.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_detail_pesanan`
--

CREATE TABLE `tb_detail_pesanan` (
  `id_detail_pesanan` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `nama_pemesan` varchar(50) NOT NULL,
  `status_pembelian` enum('dikemas','diantar','selesai','menunggu') NOT NULL,
  `status_pembayaran` enum('pending','berhasil','gagal') NOT NULL,
  `resi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_detail_pesanan`
--

INSERT INTO `tb_detail_pesanan` (`id_detail_pesanan`, `id_invoice`, `nama_pemesan`, `status_pembelian`, `status_pembayaran`, `resi`) VALUES
(43, 25, 'Andika Saputra', 'dikemas', 'berhasil', 'ABEL'),
(44, 26, 'Alvin', 'dikemas', 'berhasil', 'nazam'),
(45, 27, 'Andika Saputra', 'menunggu', 'berhasil', ''),
(46, 28, 'Alvin', 'menunggu', 'berhasil', ''),
(47, 29, 'Andika Saputra', 'menunggu', 'berhasil', ''),
(48, 30, 'Swan', 'menunggu', 'berhasil', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(11) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `gambar` text NOT NULL,
  `jasa` varchar(50) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id_invoice`, `nama`, `alamat`, `gambar`, `jasa`, `bank`, `tgl_pesan`, `batas_bayar`) VALUES
(25, 'Andika Saputra', 'maguwoharjo', 'pizza2.jpg', 'JNE', 'BNI - 654321', '2024-12-26 21:57:49', '2024-12-27 21:57:49'),
(26, 'Alvin', 'Wonogiri', 'pizza3.jpg', 'JNE', 'Midtrans', '2024-12-26 21:58:44', '2024-12-27 21:58:44'),
(27, 'Andika Saputra', 'maguwoharjo', 'pizza4.jpg', 'JNE', 'Midtrans', '2024-12-26 22:00:59', '2024-12-27 22:00:59'),
(28, 'Alvin', 'Wonogiri', 'Mocha-flavored.jpg', 'JNE', 'Midtrans', '2024-12-26 22:01:48', '2024-12-27 22:01:48'),
(29, 'Andika Saputra', 'maguwoharjo', 'Mocha-flavored1.jpg', 'JNE', 'BNI - 654321', '2024-12-26 22:03:29', '2024-12-27 22:03:29'),
(30, 'Swan', 'maguwoharjo', 'Kopisz2.jpg', 'POS Indonesia', 'Midtrans', '2024-12-26 22:05:22', '2024-12-27 22:05:22');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_brg` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_brg`, `id_user`, `nama_brg`, `jumlah`, `harga`, `pilihan`) VALUES
(22, 25, 71, 10, 'Aceh gayo nektars', 1, 70000, ''),
(23, 26, 71, 9, 'Aceh gayo nektars', 1, 70000, ''),
(24, 27, 71, 10, 'Aceh gayo nektars', 1, 70000, ''),
(25, 28, 69, 9, 'Aceh Gayo La reurnion', 1, 50000, ''),
(26, 28, 70, 9, 'Aceh Gayo Literal 1975', 1, 50000, ''),
(28, 29, 71, 10, 'Aceh gayo nektars', 1, 70000, ''),
(29, 29, 79, 10, 'Aceh  gayo', 1, 0, ''),
(30, 30, 69, 3, 'Aceh Gayo La reurnion', 1, 50000, '');

--
-- Trigger `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_brg = NEW.id_brg;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'Admin', 'Admin', '12345', 1),
(2, 'Jhondoe', 'jhon', '12345', 2),
(3, 'swan', 'swan', '12345', 2),
(4, 'Jhon Dimas', 'jhonmas', '12345', 2),
(5, 'Beni Jhon', 'beni@gmail.com', '12345', 2),
(6, 'Beni Jhon', 'jhonben', '12345', 2),
(7, 'Aku', 'Aku', 'Aku', 2),
(8, 'Fadhalfin Mars', 'apin', '123', 2),
(9, 'alvin', 'alvinmarz', '1', 2),
(10, 'Andika Saputra', 'andyas', 'andyas', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indeks untuk tabel `tb_detail_pesanan`
--
ALTER TABLE `tb_detail_pesanan`
  ADD PRIMARY KEY (`id_detail_pesanan`),
  ADD KEY `id_invoice` (`id_invoice`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indeks untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_brg` (`id_brg`),
  ADD KEY `id_invoice` (`id_invoice`),
  ADD KEY `id_user` (`id_user`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT untuk tabel `tb_detail_pesanan`
--
ALTER TABLE `tb_detail_pesanan`
  MODIFY `id_detail_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_detail_pesanan`
--
ALTER TABLE `tb_detail_pesanan`
  ADD CONSTRAINT `tb_detail_pesanan_ibfk_1` FOREIGN KEY (`id_invoice`) REFERENCES `tb_invoice` (`id_invoice`);

--
-- Ketidakleluasaan untuk tabel `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD CONSTRAINT `tb_pesanan_ibfk_1` FOREIGN KEY (`id_brg`) REFERENCES `tb_barang` (`id_brg`),
  ADD CONSTRAINT `tb_pesanan_ibfk_2` FOREIGN KEY (`id_invoice`) REFERENCES `tb_invoice` (`id_invoice`),
  ADD CONSTRAINT `tb_pesanan_ibfk_3` FOREIGN KEY (`id_user`) REFERENCES `tb_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
