-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 04:29 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040040`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id`, `img`, `name`, `harga`, `alamat`, `info`) VALUES
(1, 'Air .jpg', 'Air Terjun', '15.00rb/orang', 'Lokasi Batu Kapur Subang berada di alamat Desa Curug Agung, Kecamatan Sagalaherang, Kabupaten Subang, Provinsi Jawa Barat.', ' Curug ini menjadi salah satu wisata air terjun tertinggi. Curug Cileat memiliki dua aliran air dan masing-masing memiliki ketinggian yang hampir sama.'),
(2, 'ciater.jpg', 'Ciater', '20.00rb/orang', ' Jl. Raya Ciater, Nagrak, Ciater, Subang, Jawa Barat, Indonesia, 40154.', ' pemandian Air Panas Ciater yang sering menjadi incaran wisatawan. Kawasan wisata yang buka 24 jam ini memiliki suhu air sekitar 43-46 derajat celcius. Sangat cocok untuk menyegarkan badan wisatawan.'),
(3, 'Curug .png', 'Curug Cileat', '10.00rb/orang', 'alamat dari curug Cileat sebelum anda pergi kesana, yaitu Cibogo, Cupunagara, Gardusayang, Cisalak, Subang, Jawa Barat.', 'Daya tarik Curug Cileat merupakan faktor utama kenapa banyak pengunjung dari luar daerah yang ingin berkunjung dan mencoba tantangan baru.'),
(4, 'dcastello.jpg', 'Dcastello', '30.00rb/orang', 'Jalan Palasari Dua – Babakan Gn. Nomor 16, Kecamatan Ciater, Kabupaten Subang – Jawa Barat', 'Florawisata D’Castello adalah sebuah tempat wisata yang mulai beroperasi pada 10 Desember 2021, dengan memadukan arsitektur Belanda & Turki pada setiap designnya.')

-- --------------------------------------------------------


--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `status` enum('user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(8, 'ginamei', '2004', 'user'),
(7, 'admin', '123', 'admin')
(2, 'meirina', '080504', 'user');
--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

--

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;