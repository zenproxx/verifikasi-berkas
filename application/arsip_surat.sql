-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2020 at 01:32 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arsip_surat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_data_teknis_imb`
--

CREATE TABLE `tb_data_teknis_imb` (
  `uniqid` varchar(25) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `no_agenda_berkas` varchar(20) NOT NULL,
  `nama_bangunan` varchar(50) NOT NULL,
  `jenis_bangunan` varchar(15) NOT NULL,
  `jumlah_unit` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_data_teknis_imb`
--

INSERT INTO `tb_data_teknis_imb` (`uniqid`, `id_surat`, `no_agenda_berkas`, `nama_bangunan`, `jenis_bangunan`, `jumlah_unit`) VALUES
('', 2423423, 'dsfsdf', 'sdfsdf', 'sdfsd', 23423);

-- --------------------------------------------------------

--
-- Table structure for table `tb_divisi_subdivisi`
--

CREATE TABLE `tb_divisi_subdivisi` (
  `uniqid` varchar(35) NOT NULL,
  `id` varchar(3) NOT NULL,
  `id_parent` varchar(3) NOT NULL,
  `nama_divisi` varchar(25) NOT NULL,
  `jenis` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_divisi_subdivisi`
--

INSERT INTO `tb_divisi_subdivisi` (`uniqid`, `id`, `id_parent`, `nama_divisi`, `jenis`) VALUES
('23423sdfsdfq23123', '3a', '3', 'Kasi TBG', 0),
('2w2342343453453453', '1', '', 'Kabid', 1),
('507a16f4-32ab-11eb-9315-7', '3', '', 'PBL', 1),
('507a363b-32ab-11eb-9315-7', '4', '', 'Kadis', 1),
('507a4b0d-32ab-11eb-9315-7', '5', '', 'PRP', 1),
('DIV5fc8936ab10e5', '2', '5', 'seksi ukur pbr', 0),
('DIV5fc894ce0aa18', '4', '5', 'seksi pemetaan prp', 0),
('eter3453523423', '2', '', 'Sekertaris', 2),
('frerwerwr', '3b', '3', 'Seksi Ukur', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lembar_penelitian_imb`
--

CREATE TABLE `tb_lembar_penelitian_imb` (
  `uniqid` varchar(25) NOT NULL,
  `no_agenda_berkas` varchar(20) NOT NULL,
  `nama_bangunan` varchar(50) NOT NULL,
  `jenis_bangunan` varchar(15) NOT NULL,
  `jumlah_unit` smallint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_lembar_perhitungan`
--

CREATE TABLE `tb_lembar_perhitungan` (
  `uniqid` varchar(25) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_pemohon` varchar(25) NOT NULL,
  `lokasi_persil` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_lembar_perhitungan`
--

INSERT INTO `tb_lembar_perhitungan` (`uniqid`, `nomor`, `tanggal`, `nama_pemohon`, `lokasi_persil`) VALUES
('32423423', 'sdfsd', '0000-00-00', 'sdfds', 'sdfsd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekomendasi_kadis`
--

CREATE TABLE `tb_rekomendasi_kadis` (
  `uniqid` varchar(25) NOT NULL,
  `id_surat` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `rekomendasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekomendasi_keterangan`
--

CREATE TABLE `tb_rekomendasi_keterangan` (
  `uniqid` varchar(25) NOT NULL,
  `lokasi_persil` varchar(20) NOT NULL,
  `kelurahan` varchar(15) NOT NULL,
  `kecamatan` varchar(15) NOT NULL,
  `alas_hak` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat_permohonan_imb`
--

CREATE TABLE `tb_surat_permohonan_imb` (
  `surat_permohonan` varchar(30) NOT NULL,
  `alamat_permohonan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tdisposisi`
--

CREATE TABLE `tdisposisi` (
  `no_disposisi` int(15) NOT NULL,
  `no_agenda` int(15) NOT NULL,
  `no_surat` int(15) NOT NULL,
  `kepada` varchar(30) NOT NULL,
  `keterangan` varchar(30) NOT NULL,
  `status_surat` varchar(30) NOT NULL,
  `tanggapan` varchar(30) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tdisposisi`
--

INSERT INTO `tdisposisi` (`no_disposisi`, `no_agenda`, `no_surat`, `kepada`, `keterangan`, `status_surat`, `tanggapan`, `waktu`, `nama_file`) VALUES
(125, 1001, 1001, '4', 'sdfsd', '0', 'asfd', '2020-12-03 10:42:12', 'hpQWJurnal_e-stnk.pdf'),
(280, 1212, 123434, '5', 'ok', '1', 'surat masuk', '2020-12-02 11:05:43', 'SKRIPSI_SISTEM_INFORMASI5.pdf'),
(1019, 1001, 1001, '4', 'permohonan ok', '1', 'tolong ditindaklanjuti', '2020-12-03 07:42:11', 'hpXz2_Bakti_Inang_Persada_Siap_di_upload.pdf'),
(1187, 1212, 123434, '2', 'silahkan ukur', '1', 'disetujui', '2020-12-03 07:29:12', 'Jurnal_Ilmiah_Processor3.pdf'),
(1601, 1001, 1001, '5', 'tolong ditindak lanjuti', '1', 'permohonan baru', '2020-12-03 07:38:45', '36716855-Skripsi-Visual-Basic-6-0-Desain-dan-Analisis-Sistem-Informasi-Inventory-Barang-pada-Toko1.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tpetugas`
--

CREATE TABLE `tpetugas` (
  `id` int(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_depan` varchar(30) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak` varchar(6) NOT NULL,
  `jenis` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpetugas`
--

INSERT INTO `tpetugas` (`id`, `username`, `nama_depan`, `nama_belakang`, `password`, `hak`, `jenis`) VALUES
(1, 'andro', 'Joviandro', 'Marbun', '7032baa472380762dfd2692fe007dcef', '1', 0),
(2, 'fahrizal', 'Fahrizal', 'Syarip', '9bc4f09334d45dd89d0ff6db20f90a46', '2', 0),
(3, 'jovvi', 'andro', 'marbun', '8ecd2e9c8a66c5dd112e99dabc677d3c', '1', 0),
(4, 'test1', 'test2', 'test3', '5a105e8b9d40e1329780d62ea2265d8a', '3', 0),
(5, 'admin', 'ADMIN', 'ADMIN', '21232f297a57a5a743894a0e4a801fc3', '1', 1),
(11, 'pbl', 'pbl', '', '21232f297a57a5a743894a0e4a801fc3', '3', 1),
(12, 'Kadis', 'Kadis', 'Kadis', 'a9c430b9ba3a1250086d1ac7d6603578', '4', 1),
(13, 'kasi tbg', 'kasi', 'kasi', '21232f297a57a5a743894a0e4a801fc3', '3a', 0),
(14, 'sekertaris', 'sekertaris', 'sekertaris', '21232f297a57a5a743894a0e4a801fc3', '2', 2),
(15, 'prp', 'pbr', 'prp', '21232f297a57a5a743894a0e4a801fc3', '5', 1),
(16, 'ukur_prp', 'ukur', 'ukur', '21232f297a57a5a743894a0e4a801fc3', '2', 0),
(17, 'fakhri', 'fakhri', 'fakhri', '21232f297a57a5a743894a0e4a801fc3', '4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tsuratarsip`
--

CREATE TABLE `tsuratarsip` (
  `no_agenda` int(15) NOT NULL,
  `id` int(15) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `tanggal_kirim` varchar(12) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `nama_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tsuratkeluar`
--

CREATE TABLE `tsuratkeluar` (
  `no_agenda` int(15) NOT NULL,
  `id` int(15) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `tanggal_kirim` varchar(12) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `nama_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsuratkeluar`
--

INSERT INTO `tsuratkeluar` (`no_agenda`, `id`, `jenis_surat`, `tanggal_kirim`, `no_surat`, `pengirim`, `perihal`, `nama_file`) VALUES
(4876, 2, 'TEST', '03/29/2018', '999', 'TEST', 'TEST', '');

-- --------------------------------------------------------

--
-- Table structure for table `tsuratmasuk`
--

CREATE TABLE `tsuratmasuk` (
  `id` int(9) NOT NULL,
  `no_agenda` int(15) NOT NULL,
  `jenis_surat` varchar(30) NOT NULL,
  `tanggal_kirim` varchar(12) NOT NULL,
  `tanggal_terima` varchar(12) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `nama_file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsuratmasuk`
--

INSERT INTO `tsuratmasuk` (`id`, `no_agenda`, `jenis_surat`, `tanggal_kirim`, `tanggal_terima`, `no_surat`, `pengirim`, `perihal`, `nama_file`) VALUES
(9, 1212, 'IMB', '03/12/2020', '03/12/2020', '123434', 'Jl. Jend A.H Nst', 'Permohonan IMB', 'SKRIPSI_SISTEM_INFORMASI4.pdf'),
(10, 1001, 'IMB', '03/12/2020', '03/12/2020', '1001', 'Jl. Karya Wisata', 'Permohonan IMB', '36716855-Skripsi-Visual-Basic-6-0-Desain-dan-Analisis-Sistem-Informasi-Inventory-Barang-pada-Toko.pdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_data_teknis_imb`
--
ALTER TABLE `tb_data_teknis_imb`
  ADD PRIMARY KEY (`uniqid`);

--
-- Indexes for table `tb_divisi_subdivisi`
--
ALTER TABLE `tb_divisi_subdivisi`
  ADD PRIMARY KEY (`uniqid`);

--
-- Indexes for table `tb_lembar_penelitian_imb`
--
ALTER TABLE `tb_lembar_penelitian_imb`
  ADD PRIMARY KEY (`uniqid`);

--
-- Indexes for table `tb_lembar_perhitungan`
--
ALTER TABLE `tb_lembar_perhitungan`
  ADD PRIMARY KEY (`uniqid`);

--
-- Indexes for table `tb_rekomendasi_keterangan`
--
ALTER TABLE `tb_rekomendasi_keterangan`
  ADD PRIMARY KEY (`uniqid`);

--
-- Indexes for table `tdisposisi`
--
ALTER TABLE `tdisposisi`
  ADD PRIMARY KEY (`no_disposisi`);

--
-- Indexes for table `tpetugas`
--
ALTER TABLE `tpetugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tsuratarsip`
--
ALTER TABLE `tsuratarsip`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tsuratkeluar`
--
ALTER TABLE `tsuratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tsuratmasuk`
--
ALTER TABLE `tsuratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tpetugas`
--
ALTER TABLE `tpetugas`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tsuratarsip`
--
ALTER TABLE `tsuratarsip`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tsuratkeluar`
--
ALTER TABLE `tsuratkeluar`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tsuratmasuk`
--
ALTER TABLE `tsuratmasuk`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
