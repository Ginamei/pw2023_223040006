-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 11, 2023 at 01:28 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes223040006`
--

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id` int NOT NULL,
  `img` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `alamat` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `info` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`id`, `img`, `name`, `harga`, `alamat`, `info`) VALUES
(1, 'Air .jpg', 'Air Terjun', '20.00rb/orang', 'Lokasi Batu Kapur Subang berada di Desa Curug Agung, Kecamatan Sagalaherang, Kabupaten Subang, Provinsi Jawa Barat.', ' Curug ini menjadi salah satu wisata air terjun tertinggi. Curug Cileat memiliki dua aliran air dan masing-masing memiliki ketinggian yang hampir sama.'),
(2, 'ciater.jpg', 'Ciater', '20.00rb/orang', ' Jl. Raya Ciater, Nagrak, Ciater, Subang, Jawa Barat, Indonesia, 40154.', ' pemandian Air Panas Ciater yang sering menjadi incaran wisatawan. Kawasan wisata yang buka 24 jam ini memiliki suhu air sekitar 43-46 derajat celcius. Sangat cocok untuk menyegarkan badan wisatawan.'),
(3, 'Curug .png', 'Curug Cileat', '10.00rb/orang', 'alamat dari curug Cileat sebelum anda pergi kesana, yaitu Cibogo, Cupunagara, Gardusayang, Cisalak, Subang, Jawa Barat.', 'Daya tarik Curug Cileat merupakan faktor utama kenapa banyak pengunjung dari luar daerah yang ingin berkunjung dan mencoba tantangan baru.'),
(4, 'dcastello.jpg', 'Dcastello', '30.00rb/orang', 'Jalan Palasari Dua – Babakan Gn. Nomor 16, Kecamatan Ciater, Kabupaten Subang – Jawa Barat', 'Florawisata D’Castello adalah sebuah tempat wisata yang mulai beroperasi pada 10 Desember 2021, dengan memadukan arsitektur Belanda & Turki pada setiap designnya.');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL,
  `status` enum('user','admin') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `status`) VALUES
(7, 'admin', '123', 'admin'),
(11, 'ginameirina', '$2y$10$VJ6CDiyVWx2Bsm4uGurbp.BI8y/I6Y5R1RHfJ1waJz7jU2wDkofEa', 'user'),
(12, 'meirinagina', '$2y$10$SmNtMUhgo7WaSNOHJt/9eeUGVZzQcJ7nQ09dOqTNVMeFwhOsU1ZAy', 'user'),
(13, 'gina', '$2y$10$trb.MoDRPxaeKYtSKnbQeeZ1LnevRh8AZseV7w/kDJnARBrXwOFkO', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
