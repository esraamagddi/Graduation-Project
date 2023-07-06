-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 11:30 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hack`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(222) NOT NULL,
  `password` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `created_at`) VALUES
(1, 'Mariane O\'Connell', 'est36255', 'qratke@example.net', '2021-01-22 09:02:03'),
(2, 'Genesis Crooks', '2001thfj', 'xkrajcik@example.com', '1985-11-13 16:08:59'),
(3, 'Prof. George Weber MD', '4467876_22', 'gaylord.timmy@example.net', '2016-07-22 09:37:15'),
(4, 'Brennon Paucek Jr.', 'wrd_okbg123', 'bette72@example.com', '2002-10-10 17:09:38'),
(5, 'Prof. Keanu Cruickshank', 'rvhujfsd34', 'alaina.schamberger@example.org', '2014-08-22 11:57:51'),
(6, 'Cassandre Turcotte', '23456789', 'alexie32@example.com', '2000-09-28 01:37:31'),
(7, 'Michel Eichmann', '1233_hffjk', 'dkovacek@example.net', '1970-08-12 23:50:46'),
(8, 'Lavinia Balistreri', 'tdfmor7347', 'lindgren.khalil@example.com', '1991-03-13 07:57:32'),
(9, 'Dr. Eugene Osinski', 'trfe**2356', 'cindy.nolan@example.com', '1994-01-30 01:16:58'),
(10, 'Leonard Schneider', '@465_ety', 'berta36@example.org', '2022-05-23 01:06:39'),
(41, 'Helene Runte', 'wsfjk_2345', 'amohr@example.org', '2003-10-11 20:52:56'),
(42, 'Maude Satterfield', '143-495-2161x7298', 'thea.wintheiser@example.net', '1978-11-14 00:01:59'),
(43, 'Toni VonRueden PhD', '1234567u890', 'jones.emmy@example.net', '2021-09-15 02:47:46'),
(44, 'Prof. Kendra Leffler Sr.', 'erfggk----1', 'yrowe@example.net', '1995-04-14 11:49:23'),
(45, 'Magnus Little MD', '2345678hgfd', 'myrna.zulauf@example.com', '2000-04-27 09:53:25'),
(46, 'Edythe Kirlin MD', 'dfvniuytgf', 'berry.turner@example.com', '2017-01-20 09:17:42'),
(47, 'Nikki Botsford', 'rghkjhg', 'altenwerth.raheem@example.net', '1978-12-25 18:53:21'),
(48, 'Ronaldo Goodwin', 'sdflkjhgf34567', 'kschultz@example.net', '2022-07-25 23:14:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
