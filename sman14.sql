-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 07, 2023 at 07:18 AM
-- Server version: 10.5.21-MariaDB-cll-lve
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arif2174_sman14`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses`
--

CREATE TABLE `akses` (
  `id` int(10) NOT NULL,
  `user` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(150) DEFAULT NULL,
  `role` enum('Developer','Super Admin','Admin','') DEFAULT NULL,
  `jumlah` enum('1','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akses`
--

INSERT INTO `akses` (`id`, `user`, `name`, `pass`, `role`, `jumlah`) VALUES
(1, 'Ari', 'Ariniel Haq Daniel', '$2y$10$bkMPqwbECRuMuEda0wuVh..Jsil9ZrGh1Y1pHk4H19YU3ROV8NMaO', 'Developer', '1'),
(2, 'Adek', 'Adek Koto', '$2y$10$jj7fKE6/pD0LskYikf9UV.5.VZgx0TMIF3Tbz0yPoDXthgZSMWWdy', 'Super Admin', '1'),
(12, 'YogiK', 'Yogi Ramadhani ', '$2y$10$0PHCh1lyfnqio3r7tr7cYOkPENwET.GKghKdMoDS46Yuog9YG1BJe', 'Admin', '1'),
(13, 'Why', 'Wahyu Ramadhan', '$2y$10$HVRIw55Q4Nd8oywQf5S1yOr2mPbTEyFVklCLoj6Jrl2dzOq0LZaJO', 'Admin', '1'),
(16, 'Denzer07', 'Muhammad Cikal Perdana Suryadi', '$2y$10$ypGBq5Mgpx0oJx..NAB/z.B1HXSiCww.17R9bg4yo6UNY4bgMyUJu', 'Admin', '1'),
(24, 'admin', 'Administrator', '$2y$10$7rLZqwoi3Wxj0WWWx2M/h.hLGzhIy9eGhPAW9nhN30Fa8hVWwF9HK', 'Super Admin', '1'),
(25, 'Sumiati', 'Dra.Sumiati', '$2y$10$BbrmSBgbsbThVkBMgSljxOx7oTSwD/x7165f003UVl/4kUR.ArOjG', 'Super Admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `id_guru` int(30) NOT NULL,
  `nama_guru` varchar(100) DEFAULT NULL,
  `jabatan_guru` enum('Developer','Kepala Sekolah','Wakil Kepala Sekolah','Kepala Laboratorium','Kepala Perpustakaan','Aset Sekolah','Bendahara Komite','Bendahara BOS','Kepala UKS','Guru') DEFAULT NULL,
  `mapel_guru` varchar(100) DEFAULT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `keterangan` enum('Kurikulum','Kesiswaan','Sarana Dan Prasarana','') DEFAULT NULL,
  `jumlah` enum('1','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama_guru`, `jabatan_guru`, `mapel_guru`, `foto`, `keterangan`, `jumlah`) VALUES
(22, 'Drs. Antong', 'Kepala Sekolah', '', '331-Drs. Antong.jpeg', '', '1'),
(23, 'Neliarti ,S.Pd', 'Wakil Kepala Sekolah', 'Bahasa Inggris', '485-Buk Nel.JPG', 'Kurikulum', '1'),
(26, 'Feni Susanti S.pd', 'Wakil Kepala Sekolah', 'Bahasa Indonesia', '507-FENI SUSANTI.JPG', 'Kesiswaan', '1'),
(29, 'Eva Mariani, S.Pd', 'Wakil Kepala Sekolah', 'Kimia', '278-EVA MARIANI, S.Pd.JPG', 'Sarana Dan Prasarana', '1'),
(30, 'Sukma Yarni,  S.Kom ', 'Kepala Laboratorium', 'Informatika ', '708-Anti.JPG', NULL, '1'),
(31, 'Siti Eprida Sinurat, S.Pd', 'Kepala Perpustakaan', 'Bahasa Indonesia', '633-SITI EPRIDA SINURAT, S.Pd.JPG', NULL, '1'),
(32, 'Juwarto, S.Pd', 'Aset Sekolah', 'Biologi', '781-JUWARTO S.pd.JPG', NULL, '1'),
(33, 'Hertati Syafriani Natalia Nasution', 'Bendahara Komite', 'Fisika', '18-Buk Hertaty.JPG', NULL, '1'),
(34, 'Nazirah, S.Pd', 'Bendahara Komite', 'Seni budaya', '180-NAZIRAH, S.Pd.JPG', NULL, '1'),
(35, 'Ayu Widyastuti, S.Pd', 'Bendahara BOS', 'Sosiologi', '521-AYU WIDYASTUTI, S.Pd.JPG', NULL, '1'),
(36, 'Nana Triono, S.Pd', 'Kepala UKS', 'PKN', '89-NANA TRIONO, S.Pd.JPG', NULL, '1'),
(37, 'Vivi Jonita, S.Pd', 'Guru', 'Bahasa Inggris', '315-VIVI JONITA.JPG', NULL, '1'),
(38, 'Drs. Togap Marpaung', 'Guru', 'Matematika', '883-Drs. TOGAP MARPAUNG.JPG', NULL, '1'),
(39, 'Yesi Fatrina, S.Pd', 'Guru', 'Ekonomi', '38-bu yesi.JPG', NULL, '1'),
(40, 'Dian Evi Wahyuningsih, S.E', 'Guru', 'Ekonomi', '375-Buk Evi.JPG', NULL, '1'),
(41, 'Lia Muryani  Septiyati, S.Pd', 'Guru', 'Bahasa Perancis', '783-MADAM.JPG', NULL, '1'),
(42, 'Rosmawati, S.Pd', 'Guru', 'Kimia', '352-ROSMAWATI.JPG', NULL, '1'),
(43, 'Nurmiati, S.Pd', 'Guru', 'Bahasa Indonesia', '656-NURMIATI.JPG', NULL, '1'),
(44, 'Kawati, S.Pd', 'Guru', 'Agama Islam', NULL, NULL, '1'),
(45, 'Leni Marlina, S.Pd', 'Guru', 'Matematika', '559-DSC_2623.JPG', NULL, '1'),
(46, 'Drs. Suheidi', 'Guru', 'Sosiologi', '73-SUHEIDI.JPG', NULL, '1'),
(47, 'Dra. Yasni Darwita', 'Guru', 'Geografi', '959-bu yasni.JPG', NULL, '1'),
(48, 'Ria Dess Septimora, S.Pd', 'Guru', 'Penjaskes', '184-DSC_2572.JPG', NULL, '1'),
(49, 'Indriyati, S.Pd', 'Guru', 'Ekonomi', '71-DSC_2576.JPG', NULL, '1'),
(50, 'Delpa Amri, M.Pd', 'Guru', 'Penjaskes', NULL, NULL, '1'),
(51, 'Ilyas Rambe, M.PdI', 'Guru', 'Agama Islam ', '486-ILYAS RAMBE.JPG', NULL, '1'),
(52, 'M. Nur Asykin, S.Pd', 'Guru', 'Bahasa Inggris', '365-PAK NUR ASIKIN.JPG', NULL, '1'),
(53, 'Sony Herlambang, S.Pd', 'Guru', 'Penjaskes', NULL, NULL, '1'),
(54, 'Desy Kristinawati, S.Pd', 'Guru', 'Sejarah ', '544-DESY KRISTINAWATI.JPG', NULL, '1'),
(55, 'Siti Nurfauziah, S.Pd', 'Guru', 'Matematika', '884-SITI NURFAUZIAH.JPG', NULL, '1'),
(56, 'Samuel Zakarias, S.Pd', 'Guru', 'Pendidikan Agama Kristen ', '964-DSC_2618.JPG', NULL, '1'),
(57, 'Sudiarto Sitinjak, S.Pd', 'Guru', 'Geografi', NULL, NULL, '1'),
(58, 'Mila Gusmita, S.Pd', 'Guru', 'Agama Islam', '919-MILA GUSMITA.JPG', NULL, '1'),
(59, 'Selly Dianisari, S.Pd', 'Guru', 'Fisika', '551-BU SELLY.JPG', NULL, '1'),
(60, 'Sitti Hasmawiyah, S.Pd', 'Guru', 'Kimia', '182-SITI HASMAWIYAH.JPG', NULL, '1'),
(61, 'Nona Hardiyati, S.Pd', 'Guru', 'Geografi', '19-NONA HARDIYATI.JPG', NULL, '1'),
(62, 'Nining Maizura, S.Pd', 'Guru', 'Guru BK', '108-NINING MAIZURA.JPG', NULL, '1'),
(63, 'Syarfaina, S.Pd', 'Guru', 'Sejarah', '337-BU ARFAH.JPG', NULL, '1'),
(64, 'Dina Rosalina Siregar,  S.Pd', 'Guru', 'Matematika', '412-DINA RESLINA SIREGAR.JPG', NULL, '1');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id_staff` int(11) NOT NULL,
  `nama_staff` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan_staff` enum('Kepala Tata Usaha','Tenaga Admin Sekolah','','') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto_staff` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jumlah` enum('1','','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id_staff`, `nama_staff`, `jabatan_staff`, `foto_staff`, `jumlah`) VALUES
(6, 'Arham, A.Md', 'Kepala Tata Usaha', '913-ARKHAM.JPG', '1'),
(7, 'Roziyana, S.Pd', 'Tenaga Admin Sekolah', '78-BU ROZY.JPG', '1'),
(9, 'Yudis Fitri Ayu ', 'Tenaga Admin Sekolah', '881-BU YUDISHTIA.JPG', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses`
--
ALTER TABLE `akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id_staff`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses`
--
ALTER TABLE `akses`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
  MODIFY `id_guru` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id_staff` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
