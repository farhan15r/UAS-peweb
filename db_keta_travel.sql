-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 03:10 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_keta_travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `developer`
--

CREATE TABLE `developer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nim` bigint(20) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `developer`
--

INSERT INTO `developer` (`id`, `name`, `nim`, `position`, `image`) VALUES
(1, 'Farhan Ramadhan', 41520010115, 'Chief Executive Officer', 'farhan.jpg'),
(2, 'Akif Rizky Setiawan', 41520010126, 'Chief Operating Officer', 'akif.jpg'),
(3, 'Wardah Fakhriyyah D.N', 41520010085, 'Chief Financial Officer', 'wardah.jpeg'),
(4, 'Zacky Prasetyo B.A', 41520010134, 'Chief Technology Officer', 'jeki.jpg'),
(5, 'Juny Prayoga', 41520010101, 'Chief Marketing Officer', 'junny.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `description`, `price`, `image`) VALUES
(2, 'Tour Package Keliling Bali ', 'Paket Keliling bali yang cocok digunakan untuk kaum millenial yang ingin healing bersama teman atau pacar. Tunggu Apalagi? Order Sekarang!!!', 1000000, 'bali.jpg'),
(3, 'Tour Package Batu, Malang', 'Explore dan temukan dan temukan keindahan yang tiada banding di Batu, Malang. Join Sekarang Sebelum Kehabisan!!!', 2000000, 'batu.jpg'),
(4, 'Tour Package Raja Ampat', 'Nikmati Keindahan Raja Ampat Selama 3 Hari 2 Malam Bersama Keluarga atau teman-temanmu. Order Sekarang dan Dapatkan Potongan Harga!!!', 3000000, 'raja.jpg'),
(5, 'Flight Package', 'Paket penerbangan keliling dunia bersama Keta Travel\r\n', 100000000, 'flight.png'),
(6, 'Hotel & Resorts Package', 'Paket menginap terbaik untukmu dan keluarga\r\n', 25000000, 'hotel.png'),
(7, 'Cruises Package', 'Paket berlayar keliling dunia bersama Keta Travel\r\n', 75000000, 'cruises.png'),
(8, 'Tours & Attractions Package', 'Paket liburan spesial bersama keluarga menikmati wisata dunia\r\n', 50000000, 'tour.png');

-- --------------------------------------------------------

--
-- Table structure for table `sell_record`
--

CREATE TABLE `sell_record` (
  `id` int(11) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `month` varchar(255) DEFAULT NULL,
  `total_sell` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sell_record`
--

INSERT INTO `sell_record` (`id`, `year`, `month`, `total_sell`) VALUES
(1, 2021, 'January', 100),
(2, 2021, 'February', 110),
(3, 2021, 'March', 105),
(4, 2021, 'April', 130),
(5, 2021, 'Mei', 145),
(6, 2021, 'June', 140),
(7, 2021, 'July', 130),
(8, 2021, 'August', 130),
(9, 2021, 'September', 135),
(10, 2021, 'October', 117),
(11, 2021, 'November', 120),
(12, 2021, 'December', 137),
(13, 2022, 'January', 130),
(14, 2022, 'February', 134),
(15, 2022, 'March', 133),
(16, 2022, 'April', 128),
(17, 2022, 'Mei', 130),
(18, 2022, 'June', 140);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `isinfluencer` tinyint(1) DEFAULT 0,
  `job` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `phone`, `image`, `isinfluencer`, `job`) VALUES
(1, 'Yotari Kezia', 'yotari', '08123123123', 'yotari.jpg', 1, 'Musisi/Penyanyi'),
(2, 'Alicia', 'alicia', '08111111111', 'Alicia.jpg', 1, 'Streamer'),
(3, 'Kayess', 'kayes', '08999000999', 'kayes.jpg', 1, 'Gamer/Streamer'),
(4, 'Bayu SKAK', 'bayu', '', 'bayu.jpg', 1, 'Aktor'),
(5, 'Brando', 'brando', NULL, 'brando.jpg', 1, 'Youtuber/Gamer'),
(6, 'Ewing', 'ewing', NULL, 'ewing.jpg', 1, 'Content Creator'),
(8, 'Farhan Ramadhan', 'farhan', '08888888888', NULL, NULL, 'Student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `developer`
--
ALTER TABLE `developer`
  ADD KEY `id` (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD KEY `id` (`id`);

--
-- Indexes for table `sell_record`
--
ALTER TABLE `sell_record`
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `developer`
--
ALTER TABLE `developer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `sell_record`
--
ALTER TABLE `sell_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
