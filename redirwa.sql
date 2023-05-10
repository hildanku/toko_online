-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 02:26 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `redirwa`
--

-- --------------------------------------------------------

--
-- Table structure for table `foto`
--

CREATE TABLE `foto` (
  `id` int(20) NOT NULL,
  `nama` text NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(10) NOT NULL,
  `nama_produk` text NOT NULL,
  `deskripsi_produk` text NOT NULL,
  `ukuran_produk` text NOT NULL,
  `harga_produk` int(20) NOT NULL,
  `status_produk` enum('In Stock','Sold Out') NOT NULL,
  `foto_produk` text NOT NULL,
  `dibuat_produk` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `nama_produk`, `deskripsi_produk`, `ukuran_produk`, `harga_produk`, `status_produk`, `foto_produk`, `dibuat_produk`) VALUES
(17, 'ana', 'nasna', '11', 1231, 'In Stock', 'prospek2022upb-bf238ba9-9418-41e6-ac67-9168768ed8bb.jpg', '2022-11-04 06:06:57'),
(18, 'ana', 'nasna', '11', 1231, 'In Stock', 'WhatsApp Image 2022-10-14 at 15.08.05.jpeg', '2022-11-04 06:10:01'),
(19, 'ana', 'nasna', '11', 1231, 'In Stock', 'WhatsApp Image 2022-10-14 at 15.08.05.jpeg', '2022-11-04 06:17:02'),
(28, 'sdknaknkclans', 'klnsaklndkaslnkln', 'knsadklnakl', 0, 'In Stock', '', '2022-11-04 08:01:25'),
(29, 'sdknaknkclans', 'klnsaklndkaslnkln', 'knsadklnakl', 0, 'In Stock', '', '2022-11-04 08:01:55'),
(30, 'sdknaknkclans', 'klnsaklndkaslnkln', 'knsadklnakl', 0, 'In Stock', '', '2022-11-04 08:02:07'),
(31, 'daksklakakls', 'ksdakldlk', '111', 1111, 'In Stock', 'WhatsApp Image 2022-10-14 at 15.08.05.jpeg', '2022-11-04 08:05:03'),
(32, 'TESTING', 'TESTING', '11', 11, 'Sold Out', 'WhatsApp Image 2022-10-14 at 15.08.05.jpeg', '2022-11-04 09:24:09'),
(33, 'TESTING', 'TESTING', '11', 11, 'Sold Out', 'WhatsApp Image 2022-10-14 at 15.08.05.jpeg', '2022-11-04 09:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `hak_akses` enum('admin','member') NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `hak_akses`, `created_at`) VALUES
(0, '12', '12', '12', 'admin', '0000-00-00 00:00:00'),
(1, 'Hildan K Utomo', '1', '1', 'member', '2022-10-14 08:34:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foto`
--
ALTER TABLE `foto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foto`
--
ALTER TABLE `foto`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
