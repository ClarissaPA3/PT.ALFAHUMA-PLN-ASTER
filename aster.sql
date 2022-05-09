-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2022 pada 07.09
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aster`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pengajuananggaran`
--

CREATE TABLE `detail_pengajuananggaran` (
  `id_detailpengajuan` int(11) NOT NULL,
  `id_subpos2` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `id_subpos` int(11) NOT NULL,
  `id_pos` int(11) NOT NULL,
  `nominal_pengajuan2` varchar(255) NOT NULL,
  `nominal_persetujuan2` varchar(255) NOT NULL,
  `deskripsi2` varchar(255) NOT NULL,
  `kegiatan2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `detail_pengajuananggaran`
--

INSERT INTO `detail_pengajuananggaran` (`id_detailpengajuan`, `id_subpos2`, `id_pengajuan`, `id_subpos`, `id_pos`, `nominal_pengajuan2`, `nominal_persetujuan2`, `deskripsi2`, `kegiatan2`) VALUES
(1, 1, 2, 1, 1, '500000', '500000', 'Perlengkapan rapat proyek minggu ke satu', 'Rapat minggu ke satu'),
(2, 4, 4, 3, 7, '600000', '400000', 'Pelaksanaan proyek', 'Pelaksanaan proyek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL,
  `tingkatan_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `tingkatan_user`) VALUES
(1, 'Sub Bidang', 'User'),
(2, 'DM', 'Sub Admin'),
(3, 'DMPAU', 'Admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pagu_anggaran`
--

CREATE TABLE `pagu_anggaran` (
  `id_paguanggaran` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nominal_pagu` varchar(1024) NOT NULL,
  `nominal_terpakai` varchar(1024) NOT NULL,
  `bulan` varchar(1024) NOT NULL,
  `tahun` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pagu_anggaran`
--

INSERT INTO `pagu_anggaran` (`id_paguanggaran`, `id_anggota`, `nominal_pagu`, `nominal_terpakai`, `bulan`, `tahun`) VALUES
(3, 2, '150.000.000', '129.000.000', 'Maret', '2022');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_anggota` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_anggota`, `id_jabatan`, `nama_anggota`, `tgl_lahir`, `alamat`, `username`, `password`) VALUES
(1, 1, 'Rohman Putra', '1986-10-12', 'Jl. Gajah Mada No 12 Surakarta, Jawa Tengah', 'rohmanputra', 'rohman'),
(2, 2, 'Muhammad Ridho', '1994-02-09', 'Jl. Panglima Sudirman No 5 Caruban, Jawa Timur.', 'muhammadridho', 'ridho'),
(3, 3, 'Freniska Ayu', '1997-08-29', 'Jl. Ahmad Yani No 4 Madiun, Jawa Timur.', 'freniskaayu', 'freniska'),
(8, 1, 'rohmanriski', '1999-05-02', 'Madiun', 'rohmanriski20', 'Rohmanriski20@');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_anggaran`
--

CREATE TABLE `pengajuan_anggaran` (
  `id_pengajuan` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `catatan_dm2` varchar(255) NOT NULL,
  `total_pengajuan2` varchar(255) NOT NULL,
  `minggu2` varchar(255) NOT NULL,
  `bulan2` varchar(255) NOT NULL,
  `catatan_dmpau2` varchar(255) NOT NULL,
  `status2` tinyint(1) NOT NULL,
  `tanggal_mulai2` datetime NOT NULL,
  `tanggal_sampai2` datetime NOT NULL,
  `tgl_pengajuan2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pengajuan_anggaran`
--

INSERT INTO `pengajuan_anggaran` (`id_pengajuan`, `id_anggota`, `catatan_dm2`, `total_pengajuan2`, `minggu2`, `bulan2`, `catatan_dmpau2`, `status2`, `tanggal_mulai2`, `tanggal_sampai2`, `tgl_pengajuan2`) VALUES
(2, 1, '', '500000', '1', 'April', '', 3, '2022-04-04 00:00:00', '2022-04-10 00:00:00', '1970-01-01'),
(3, 1, '', '', '2', 'April', '', 0, '2022-04-11 00:00:00', '2022-04-17 00:00:00', '2022-05-09'),
(4, 1, 'pengurangan biaya', '600000', '3', 'April', '', 2, '2022-05-16 00:00:00', '2022-05-22 00:00:00', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pos`
--

CREATE TABLE `pos` (
  `id_pos` int(11) NOT NULL,
  `nama_pos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pos`
--

INSERT INTO `pos` (`id_pos`, `nama_pos`) VALUES
(1, 'Operasi A'),
(6, 'Operasi B'),
(7, 'Pemeliharaan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_pos`
--

CREATE TABLE `sub_pos` (
  `id_subpos` int(11) NOT NULL,
  `nama_subpos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sub_pos`
--

INSERT INTO `sub_pos` (`id_subpos`, `nama_subpos`) VALUES
(1, 'Material A'),
(2, 'Material B'),
(3, 'Jasa Borongan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sub_pos2`
--

CREATE TABLE `sub_pos2` (
  `id_subpos2` int(11) NOT NULL,
  `nama_subpos2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `sub_pos2`
--

INSERT INTO `sub_pos2` (`id_subpos2`, `nama_subpos2`) VALUES
(1, 'Alat Tulis Kantor A'),
(3, 'Alat Tulis Kantor B'),
(4, 'Perkakas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transfer`
--

CREATE TABLE `transfer` (
  `id_transfer` int(40) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nama_pengirim` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_telp` int(40) NOT NULL,
  `no_rekening` int(40) NOT NULL,
  `nama_bank` varchar(255) NOT NULL,
  `tgl_kirim` datetime NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `PPN` int(40) NOT NULL,
  `PPH_21` int(40) NOT NULL,
  `PPH_22` int(40) NOT NULL,
  `PPH_23` int(40) NOT NULL,
  `denda` int(40) NOT NULL,
  `administrasi_bank` int(40) NOT NULL,
  `total_dibayar` int(40) NOT NULL,
  `berita` varchar(1024) NOT NULL,
  `honor_asesmen` int(40) NOT NULL,
  `honor_evaluator` int(40) NOT NULL,
  `nilai_kontrak` varchar(255) NOT NULL,
  `honor_tester` int(40) NOT NULL,
  `honor_feedback` int(40) NOT NULL,
  `pekerjaan` varchar(255) NOT NULL,
  `honor_pewawancara` int(40) NOT NULL,
  `honor_korektor_pauli` int(40) NOT NULL,
  `lumpsum_transport_bandara` varchar(255) NOT NULL,
  `lumpsum_komsumsi` varchar(255) NOT NULL,
  `lumpsum_transpoet_lok` varchar(255) NOT NULL,
  `waktu_kerja` varchar(255) NOT NULL,
  `lumpsum_uang_cod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `transfer`
--

INSERT INTO `transfer` (`id_transfer`, `id_anggota`, `nama_pengirim`, `email`, `no_telp`, `no_rekening`, `nama_bank`, `tgl_kirim`, `kategori`, `PPN`, `PPH_21`, `PPH_22`, `PPH_23`, `denda`, `administrasi_bank`, `total_dibayar`, `berita`, `honor_asesmen`, `honor_evaluator`, `nilai_kontrak`, `honor_tester`, `honor_feedback`, `pekerjaan`, `honor_pewawancara`, `honor_korektor_pauli`, `lumpsum_transport_bandara`, `lumpsum_komsumsi`, `lumpsum_transpoet_lok`, `waktu_kerja`, `lumpsum_uang_cod`) VALUES
(10, 2, 'Rohman Putra', 'rohmanputra@gmail.com', 2147483647, 2147483647, 'BCA', '2022-04-28 12:40:00', 'Transfer dana', 10, 10, 10, 10, 15, 20, 500, 'transfer sukses !', 50, 50, '1.000.000', 50, 50, 'Wiraswasta', 50, 50, '1', '1', '1', '48 jam', '1'),
(12, 1, 'Alfredo Arya', 'arya@gmail.com', 2147483647, 2147483647, 'BNI', '2022-05-09 08:24:00', 'Transfer Dana', 20, 40, 40, 40, 40000, 17000, 16000000, 'sukses', 20, 20, '40', 20, 20, 'Wiraswasta', 20, 20, '10', '10', '10', '48 jam', '10'),
(13, 3, 'Faris Nur', 'faris@gmail.com', 2147483647, 2147483647, 'BRI', '2022-05-01 08:33:00', 'Pembayaran ATK', 20, 40, 40, 40, 120000, 200000, 20000000, 'Pembayaran diterima', 20, 20, '20000000', 20, 20, 'PNS', 20, 20, '30', '30', '30', '24 jam', '30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pengajuananggaran`
--
ALTER TABLE `detail_pengajuananggaran`
  ADD PRIMARY KEY (`id_detailpengajuan`),
  ADD KEY `id_pos` (`id_pos`),
  ADD KEY `id_subpos` (`id_subpos`),
  ADD KEY `id_subpos2` (`id_subpos2`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `pagu_anggaran`
--
ALTER TABLE `pagu_anggaran`
  ADD PRIMARY KEY (`id_paguanggaran`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indeks untuk tabel `pengajuan_anggaran`
--
ALTER TABLE `pengajuan_anggaran`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indeks untuk tabel `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id_pos`);

--
-- Indeks untuk tabel `sub_pos`
--
ALTER TABLE `sub_pos`
  ADD PRIMARY KEY (`id_subpos`);

--
-- Indeks untuk tabel `sub_pos2`
--
ALTER TABLE `sub_pos2`
  ADD PRIMARY KEY (`id_subpos2`);

--
-- Indeks untuk tabel `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id_transfer`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pengajuananggaran`
--
ALTER TABLE `detail_pengajuananggaran`
  MODIFY `id_detailpengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pagu_anggaran`
--
ALTER TABLE `pagu_anggaran`
  MODIFY `id_paguanggaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_anggaran`
--
ALTER TABLE `pengajuan_anggaran`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pos`
--
ALTER TABLE `pos`
  MODIFY `id_pos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `sub_pos`
--
ALTER TABLE `sub_pos`
  MODIFY `id_subpos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `sub_pos2`
--
ALTER TABLE `sub_pos2`
  MODIFY `id_subpos2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id_transfer` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pengajuananggaran`
--
ALTER TABLE `detail_pengajuananggaran`
  ADD CONSTRAINT `detail_pengajuananggaran_ibfk_1` FOREIGN KEY (`id_pengajuan`) REFERENCES `pengajuan_anggaran` (`id_pengajuan`),
  ADD CONSTRAINT `detail_pengajuananggaran_ibfk_2` FOREIGN KEY (`id_pos`) REFERENCES `pos` (`id_pos`),
  ADD CONSTRAINT `detail_pengajuananggaran_ibfk_3` FOREIGN KEY (`id_subpos`) REFERENCES `sub_pos` (`id_subpos`),
  ADD CONSTRAINT `detail_pengajuananggaran_ibfk_4` FOREIGN KEY (`id_subpos2`) REFERENCES `sub_pos2` (`id_subpos2`);

--
-- Ketidakleluasaan untuk tabel `pagu_anggaran`
--
ALTER TABLE `pagu_anggaran`
  ADD CONSTRAINT `pagu_anggaran_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `pegawai` (`id_anggota`);

--
-- Ketidakleluasaan untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);

--
-- Ketidakleluasaan untuk tabel `pengajuan_anggaran`
--
ALTER TABLE `pengajuan_anggaran`
  ADD CONSTRAINT `pengajuan_anggaran_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `pegawai` (`id_anggota`);

--
-- Ketidakleluasaan untuk tabel `transfer`
--
ALTER TABLE `transfer`
  ADD CONSTRAINT `transfer_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `pegawai` (`id_anggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
