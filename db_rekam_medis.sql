-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2016 at 03:09 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rekam_medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dokter`
--

CREATE TABLE IF NOT EXISTS `tb_dokter` (
  `kd_dokter` int(11) NOT NULL,
  `kd_poli` int(11) NOT NULL,
  `nm_dokter` varchar(50) NOT NULL,
  `sip` varchar(50) NOT NULL,
  `tempat_lhr` varchar(50) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`kd_dokter`, `kd_poli`, `nm_dokter`, `sip`, `tempat_lhr`, `no_tlp`, `alamat`) VALUES
(1, 2, 'Dokter 1', '123', 'samarinda', '12345', 'jalan antasari\r\n'),
(2, 1, 'Dokter 5', '038492', 'Samarinda', '13421', 'jalan juanda'),
(3, 3, 'DOkter Henry', '1234567890', 'Samarinda', '08973221312', 'Jalan Juanda'),
(4, 4, 'Dokter Ayu', '98326182', 'Jakarta', '0892174261', 'Jalan Antasari\r\n'),
(5, 5, 'Dokter Gabriel', '98629372', 'Balikpapan', '081237284736', 'Jalan Basuki Rahmat');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kunjungan`
--

CREATE TABLE IF NOT EXISTS `tb_kunjungan` (
  `kd_kunjungan` int(11) NOT NULL,
  `kd_dokter` int(11) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `jam_kunjungan` time NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kunjungan`
--

INSERT INTO `tb_kunjungan` (`kd_kunjungan`, `kd_dokter`, `tgl_kunjungan`, `no_pasien`, `jam_kunjungan`) VALUES
(1, 1, '0000-00-00', 1, '08:41:22'),
(2, 2, '0000-00-00', 1, '08:41:30'),
(3, 1, '2015-10-08', 1, '08:43:35'),
(4, 3, '2015-10-08', 1, '14:04:24'),
(5, 4, '2015-10-08', 1, '14:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laboratorium`
--

CREATE TABLE IF NOT EXISTS `tb_laboratorium` (
  `kd_lab` int(11) NOT NULL,
  `no_rm` int(11) NOT NULL,
  `hasil_lab` text NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_laboratorium`
--

INSERT INTO `tb_laboratorium` (`kd_lab`, `no_rm`, `hasil_lab`, `ket`) VALUES
(1, 6, 'uygiuyg', 'iuguiyg'),
(2, 7, 'uygiuyg', 'iuguiyg'),
(4, 9, 'iuhuih', 'iluhlih'),
(5, 10, 'ugky', 'guygukgukyguky'),
(8, 3, 'Ubah', 'Ubah'),
(10, 3, 'Negatif', 'keterangan'),
(11, 3, 'Negatif', 'hasil lab menunjukan hasil negatif test urine untuk narkotika '),
(12, 3, 'Test darah menunjukkan trombosit normal', 'Keterangan'),
(13, 3, 'Test gula darah normal', 'keterangan'),
(14, 3, 'Minum obat terlalu banyak', 'Overdosis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_obat`
--

CREATE TABLE IF NOT EXISTS `tb_obat` (
  `kd_obat` int(11) NOT NULL,
  `nm_obat` varchar(50) NOT NULL,
  `jml_obat` int(11) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`kd_obat`, `nm_obat`, `jml_obat`, `ukuran`, `harga`) VALUES
(1, 'Obat 123', 231, '21', '10000'),
(2, 'Obat 2', 50, '3x3', '10000'),
(3, 'Parasetamol', 10, '3x1', '50000'),
(4, 'Obat demam', 20, '3x3', '30000'),
(5, 'Obat batuk', 40, '2x1', '40000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE IF NOT EXISTS `tb_pasien` (
  `no_pasien` int(11) NOT NULL,
  `nm_pasien` varchar(100) NOT NULL,
  `j_kel` varchar(50) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lhr` date NOT NULL,
  `usia` varchar(10) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `nm_kk` varchar(100) NOT NULL,
  `hub_kel` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`no_pasien`, `nm_pasien`, `j_kel`, `agama`, `alamat`, `tgl_lhr`, `usia`, `no_tlp`, `nm_kk`, `hub_kel`) VALUES
(1, 'Nama Pasien', 'Laki-laki', 'Islam', 'Jalan slamet ryadi', '1998-01-22', '17', '123831', 'Ayah', 'anak'),
(2, 'Nina', 'Perempuan', 'Islam', 'Jalan Cendana', '1998-05-11', '17', '082112388472', 'Ridwan', 'Ayah'),
(3, 'Rizal', 'Laki-laki', 'Islam', 'Jalan Pasundan', '1963-02-13', '52', '1923829', 'Rifky', 'Ayah'),
(4, 'Dodi', 'Laki-laki', 'Kristen', 'Jalan Pasundan', '1984-03-13', '31', '08981237362', 'Dedy', 'Ayah'),
(5, 'Dina', 'Perempuan', ' Islam', 'Jalan Yos Sudarso', '1992-03-19', '23', '08931234726', 'Riski', 'Ayah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poliklinik`
--

CREATE TABLE IF NOT EXISTS `tb_poliklinik` (
  `kd_poli` int(11) NOT NULL,
  `nm_poli` varchar(50) NOT NULL,
  `lantai` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_poliklinik`
--

INSERT INTO `tb_poliklinik` (`kd_poli`, `nm_poli`, `lantai`) VALUES
(1, 'Nama', 2),
(2, 'Poliklinik 3', 3),
(3, 'Poli Anak', 1),
(4, 'Poli Gigi', 1),
(5, 'THT', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekam_medis`
--

CREATE TABLE IF NOT EXISTS `tb_rekam_medis` (
  `no_rm` int(11) NOT NULL,
  `kd_tindakan` int(11) NOT NULL,
  `kd_obat` int(11) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `diagnosa` text NOT NULL,
  `resep` text NOT NULL,
  `keluhan` text NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_rekam_medis`
--

INSERT INTO `tb_rekam_medis` (`no_rm`, `kd_tindakan`, `kd_obat`, `no_pasien`, `diagnosa`, `resep`, `keluhan`, `tgl_pemeriksaan`, `ket`) VALUES
(3, 2, 1, 1, 'hlihiluh', 'hliuhu', 'uhluihuil', '2015-10-07', 'ilhliuh'),
(4, 2, 1, 1, 'iguiyguyg', 'uguyg', '2015-10-08', '0000-00-00', 'guygiu'),
(5, 2, 1, 1, 'iguiyguyg', 'uguyg', '2015-10-08', '0000-00-00', 'guygiu'),
(6, 2, 1, 1, 'iguiyguyg', 'uguyg', '2015-10-08', '0000-00-00', 'guygiu'),
(7, 2, 1, 1, 'iguiyguyg', 'uguyg', '2015-10-08', '0000-00-00', 'guygiu'),
(9, 1, 1, 1, 'uihlihliuh', ' iuhiuhl', 'awfawe', '0000-00-00', 'iuhliuhl'),
(10, 1, 1, 1, 'uyg', 'kjvyuk', 'gukgk', '2015-10-08', 'uykgkuyg'),
(11, 1, 3, 3, 'Sakit', 'Obat sekian\r\n', 'Sakit Kepala', '2015-12-17', 'Minum obat sampai habis');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tindakan`
--

CREATE TABLE IF NOT EXISTS `tb_tindakan` (
  `kd_tindakan` int(11) NOT NULL,
  `nm_tindakan` varchar(50) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tindakan`
--

INSERT INTO `tb_tindakan` (`kd_tindakan`, `nm_tindakan`, `ket`) VALUES
(1, 'TIndakan 1', 'awdoawdhaoiwd'),
(2, 'TIndakan lagi', ''),
(3, '', ''),
(4, 'TIndakan 4', 'tindakan 4'),
(5, 'tindakan 5', 'tindakan 5\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `kd_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`kd_user`, `nama`, `username`, `password`, `level`) VALUES
(1, 'Super Administrator', 'superadmin', 'befe2bc5802f50199e7e1b8b0461378c42274020', 1),
(2, 'Administrator', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 2),
(3, 'Operator 1', 'operator1', 'cb962c56599db2923a4d822955c960cc5a0b306c', 3),
(7, 'ganti', 'opbaru', '223a1ecc8b91d6be90d7bc371009980016248e87', 3),
(8, 'Ganti nama', 'testop', 'a8e4dfa5717c803f379604bc9898a837e8f868e9', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD PRIMARY KEY (`kd_dokter`),
  ADD KEY `kd_poli` (`kd_poli`);

--
-- Indexes for table `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  ADD PRIMARY KEY (`kd_kunjungan`),
  ADD KEY `kd_dokter` (`kd_dokter`),
  ADD KEY `no_pasien` (`no_pasien`);

--
-- Indexes for table `tb_laboratorium`
--
ALTER TABLE `tb_laboratorium`
  ADD PRIMARY KEY (`kd_lab`),
  ADD KEY `no_rm` (`no_rm`);

--
-- Indexes for table `tb_obat`
--
ALTER TABLE `tb_obat`
  ADD PRIMARY KEY (`kd_obat`);

--
-- Indexes for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  ADD PRIMARY KEY (`no_pasien`);

--
-- Indexes for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  ADD PRIMARY KEY (`kd_poli`);

--
-- Indexes for table `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  ADD PRIMARY KEY (`no_rm`),
  ADD KEY `kd_tindakan` (`kd_tindakan`),
  ADD KEY `no_pasien` (`no_pasien`),
  ADD KEY `kd_obat` (`kd_obat`);

--
-- Indexes for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  ADD PRIMARY KEY (`kd_tindakan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  MODIFY `kd_dokter` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  MODIFY `kd_kunjungan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_laboratorium`
--
ALTER TABLE `tb_laboratorium`
  MODIFY `kd_lab` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tb_obat`
--
ALTER TABLE `tb_obat`
  MODIFY `kd_obat` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_pasien`
--
ALTER TABLE `tb_pasien`
  MODIFY `no_pasien` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_poliklinik`
--
ALTER TABLE `tb_poliklinik`
  MODIFY `kd_poli` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  MODIFY `no_rm` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_tindakan`
--
ALTER TABLE `tb_tindakan`
  MODIFY `kd_tindakan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_dokter`
--
ALTER TABLE `tb_dokter`
  ADD CONSTRAINT `tb_dokter_ibfk_1` FOREIGN KEY (`kd_poli`) REFERENCES `tb_poliklinik` (`kd_poli`) ON UPDATE CASCADE;

--
-- Constraints for table `tb_kunjungan`
--
ALTER TABLE `tb_kunjungan`
  ADD CONSTRAINT `tb_kunjungan_ibfk_1` FOREIGN KEY (`kd_dokter`) REFERENCES `tb_dokter` (`kd_dokter`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_kunjungan_ibfk_2` FOREIGN KEY (`no_pasien`) REFERENCES `tb_pasien` (`no_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_laboratorium`
--
ALTER TABLE `tb_laboratorium`
  ADD CONSTRAINT `tb_laboratorium_ibfk_1` FOREIGN KEY (`no_rm`) REFERENCES `tb_rekam_medis` (`no_rm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_rekam_medis`
--
ALTER TABLE `tb_rekam_medis`
  ADD CONSTRAINT `tb_rekam_medis_ibfk_1` FOREIGN KEY (`kd_tindakan`) REFERENCES `tb_tindakan` (`kd_tindakan`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rekam_medis_ibfk_2` FOREIGN KEY (`kd_obat`) REFERENCES `tb_obat` (`kd_obat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_rekam_medis_ibfk_3` FOREIGN KEY (`no_pasien`) REFERENCES `tb_pasien` (`no_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
