-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 09:31 PM
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
-- Database: `idor`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `balance` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `balance`) VALUES
(1, 'Schamberger', '42927921', 999.99),
(2, 'Murphy', '72311127', 999.99),
(3, 'King', '30933705', 6.00),
(4, 'Tillman', '86876407', 2.00),
(5, 'Schneider', '71474793', 999.99),
(6, 'Champlin', '57805337', 0.00),
(7, 'Altenwerth', '97072225', 999.99),
(8, 'Rau', '43472963', 820.00),
(9, 'Nitzsche', '49560640', 999.99),
(10, 'Leffler', '47832619', 999.99),
(11, 'Streich', '20955373', 999.99),
(12, 'Miller', '86112321', 999.99),
(13, 'Ryan', '07155666', 999.99),
(14, 'Jacobson', '20292300', 209.00),
(15, 'Marvin', '25812015', 999.99),
(16, 'Brekke', '11222774', 999.99),
(17, 'Collins', '68069896', 0.00),
(18, 'Schaefer', '98058464', 999.99),
(19, 'Bayer', '22184603', 999.99),
(20, 'Lynch', '63264449', 999.99),
(21, 'Kovacek', '65585603', 534.00),
(22, 'Carter', '74969463', 17.00),
(23, 'Treutel', '91110374', 897.00),
(24, 'Hermiston', '22173256', 6.00),
(25, 'Bernier', '03042526', 999.99),
(26, 'Conn', '46593313', 999.99),
(27, 'Effertz', '40995960', 999.99),
(28, 'Hermiston', '83279515', 999.99),
(29, 'Gleichner', '95051765', 999.99),
(30, 'Schuppe', '56824902', 999.99),
(31, 'Powlowski', '36769278', 999.99),
(32, 'Donnelly', '03570586', 999.99),
(33, 'Lowe', '50708864', 68.00),
(34, 'Jenkins', '92397255', 0.00),
(35, 'Renner', '39113955', 999.99),
(36, 'Oberbrunner', '47514836', 0.00),
(37, 'Krajcik', '23374584', 961.00),
(38, 'Schuppe', '83976216', 999.99),
(39, 'Hagenes', '61253292', 0.00),
(40, 'Lockman', '90671883', 999.99),
(41, 'Senger', '34108154', 191.00),
(42, 'Gibson', '71392271', 89.00),
(43, 'D\Amore', '13963422', 999.99),
(44, 'Padberg', '21534836', 999.99),
(45, 'Hills', '35994213', 999.99),
(46, 'Ortiz', '87227703', 999.99),
(47, 'Mayert', '81004713', 999.99),
(48, 'McKenzie', '66727590', 0.00),
(49, 'Parisian', '58739488', 999.99),
(50, 'Balistreri', '60816610', 999.99),
(219843, 'demo', '12345', 0.00),
(355428, 'test', '12345', 0.00),
(414496, 'test', '12344', 0.00),
(452997, 'demo', '12345', 0.00),
(539499, 'demo', '12345', 0.00),
(628025, 'demo', '12345', 0.00),
(903562, 'demo', '12345', 0.00);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=903563;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
