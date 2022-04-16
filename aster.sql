-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2022 at 01:29 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

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
-- Table structure for table `detail_pengajuananggaran`
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

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(255) NOT NULL,
  `tingkatan_user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`, `tingkatan_user`) VALUES
(1, 'Sub Bidang', 'user'),
(2, 'DM', 'Sub Admin'),
(3, 'DMPAU', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `pagu_anggaran`
--

CREATE TABLE `pagu_anggaran` (
  `id_paguanggaran` int(11) NOT NULL,
  `id_anggota` int(11) NOT NULL,
  `nominal_pagu` varchar(1024) NOT NULL,
  `nominal_terpakai` varchar(1024) NOT NULL,
  `bulan` varchar(1024) NOT NULL,
  `tahun` varchar(1024) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_anggota` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nama_anggota` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_anggota`, `id_jabatan`, `nama_anggota`, `tgl_lahir`, `alamat`, `divisi`, `username`, `password`) VALUES
(1, 1, 'Rohman', '2022-04-13', 'Jl panglima Tempur', 'Administrasi Keuangan', 'rohman@coba.com', 'rohman'),
(2, 2, 'DM', '2022-04-14', 'meong', 'DM', 'DM', 'DM'),
(3, 3, 'DMPAU', '2022-04-20', 'DMPAU', 'DMPAU', 'DMPAU', 'DMPAU');

-- --------------------------------------------------------

--
-- Table structure for table `pengajuan_anggaran`
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

-- --------------------------------------------------------

--
-- Table structure for table `pos`
--

CREATE TABLE `pos` (
  `id_pos` int(11) NOT NULL,
  `nama_pos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_pos`
--

CREATE TABLE `sub_pos` (
  `id_subpos` int(11) NOT NULL,
  `nama_subpos` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sub_pos2`
--

CREATE TABLE `sub_pos2` (
  `id_subpos2` int(11) NOT NULL,
  `nama_subpos2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
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
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_pengajuananggaran`
--
ALTER TABLE `detail_pengajuananggaran`
  ADD PRIMARY KEY (`id_detailpengajuan`),
  ADD KEY `id_pos` (`id_pos`),
  ADD KEY `id_subpos` (`id_subpos`),
  ADD KEY `id_subpos2` (`id_subpos2`),
  ADD KEY `id_pengajuan` (`id_pengajuan`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `pagu_anggaran`
--
ALTER TABLE `pagu_anggaran`
  ADD PRIMARY KEY (`id_paguanggaran`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `pengajuan_anggaran`
--
ALTER TABLE `pengajuan_anggaran`
  ADD PRIMARY KEY (`id_pengajuan`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- Indexes for table `pos`
--
ALTER TABLE `pos`
  ADD PRIMARY KEY (`id_pos`);

--
-- Indexes for table `sub_pos`
--
ALTER TABLE `sub_pos`
  ADD PRIMARY KEY (`id_subpos`);

--
-- Indexes for table `sub_pos2`
--
ALTER TABLE `sub_pos2`
  ADD PRIMARY KEY (`id_subpos2`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`id_transfer`),
  ADD KEY `id_anggota` (`id_anggota`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_pengajuananggaran`
--
ALTER TABLE `detail_pengajuananggaran`
  MODIFY `id_detailpengajuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pagu_anggaran`
--
ALTER TABLE `pagu_anggaran`
  MODIFY `id_paguanggaran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pengajuan_anggaran`
--
ALTER TABLE `pengajuan_anggaran`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pos`
--
ALTER TABLE `pos`
  MODIFY `id_pos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_pos`
--
ALTER TABLE `sub_pos`
  MODIFY `id_subpos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_pos2`
--
ALTER TABLE `sub_pos2`
  MODIFY `id_subpos2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `id_transfer` int(40) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_pengajuananggaran`
--
ALTER TABLE `detail_pengajuananggaran`
  ADD CONSTRAINT `detail_pengajuananggaran_ibfk_1` FOREIGN KEY (`id_pengajuan`) REFERENCES `pengajuan_anggaran` (`id_pengajuan`),
  ADD CONSTRAINT `detail_pengajuananggaran_ibfk_2` FOREIGN KEY (`id_pos`) REFERENCES `pos` (`id_pos`),
  ADD CONSTRAINT `detail_pengajuananggaran_ibfk_3` FOREIGN KEY (`id_subpos`) REFERENCES `sub_pos` (`id_subpos`),
  ADD CONSTRAINT `detail_pengajuananggaran_ibfk_4` FOREIGN KEY (`id_subpos2`) REFERENCES `sub_pos2` (`id_subpos2`);

--
-- Constraints for table `pagu_anggaran`
--
ALTER TABLE `pagu_anggaran`
  ADD CONSTRAINT `pagu_anggaran_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `pegawai` (`id_anggota`);

--
-- Constraints for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD CONSTRAINT `pegawai_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `jabatan` (`id_jabatan`);

--
-- Constraints for table `pengajuan_anggaran`
--
ALTER TABLE `pengajuan_anggaran`
  ADD CONSTRAINT `pengajuan_anggaran_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `pegawai` (`id_anggota`);

--
-- Constraints for table `transfer`
--
ALTER TABLE `transfer`
  ADD CONSTRAINT `transfer_ibfk_1` FOREIGN KEY (`id_anggota`) REFERENCES `pegawai` (`id_anggota`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
