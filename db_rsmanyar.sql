-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2023 at 09:32 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rsmanyar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengkajian`
--

CREATE TABLE `tb_pengkajian` (
  `id` int(11) NOT NULL,
  `no_rm` varchar(50) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `pengkajian_tgl` date NOT NULL,
  `mrs_tanggal` date NOT NULL,
  `dx_masuk` date NOT NULL,
  `jam` time NOT NULL,
  `agama` varchar(20) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `cara_masuk_rumah_sakit` varchar(50) NOT NULL,
  `kemampuan_melakukan_aktifitas` varchar(50) NOT NULL,
  `informasi_didapat_dari` varchar(20) NOT NULL,
  `keluhan_utama` varchar(255) NOT NULL,
  `riwayat_penyakit_sekarang` varchar(255) NOT NULL,
  `riwayat_penyakit_dahulu` varchar(255) NOT NULL,
  `riwayat_alergi` varchar(255) NOT NULL,
  `riwayat_operasi` varchar(255) NOT NULL,
  `riwayat_penyakit_keluarga` varchar(255) NOT NULL,
  `riwayat_transfusi_darah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pengkajian`
--

INSERT INTO `tb_pengkajian` (`id`, `no_rm`, `nama_pasien`, `tgl_lahir`, `pengkajian_tgl`, `mrs_tanggal`, `dx_masuk`, `jam`, `agama`, `pendidikan`, `cara_masuk_rumah_sakit`, `kemampuan_melakukan_aktifitas`, `informasi_didapat_dari`, `keluhan_utama`, `riwayat_penyakit_sekarang`, `riwayat_penyakit_dahulu`, `riwayat_alergi`, `riwayat_operasi`, `riwayat_penyakit_keluarga`, `riwayat_transfusi_darah`) VALUES
(10, 'RM01', 'Arif', '2011-01-26', '2023-04-26', '2023-04-25', '2023-04-23', '16:33:00', 'kristen', 'sd', 'berjalan', 'ketergantungan ringan', 'keluarga', 'perut sakit', 'asma', 'anemia', 'ya', 'tidak', 'diabet', 'tidak'),
(11, 'RM02', 'Budi', '2023-04-04', '2023-04-26', '2023-04-25', '2023-04-24', '18:32:00', 'kristen', 'smp', 'berjalan', 'mandiri', 'keluarga', 'penyakit dalam', 'darah tinggi', 'darah tinggi', 'reaksi', 'ya', 'tidak ada', 'reaksi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pengkajian`
--
ALTER TABLE `tb_pengkajian`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pengkajian`
--
ALTER TABLE `tb_pengkajian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
