-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 08, 2021 at 12:48 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(12) NOT NULL,
  `description` varchar(120) NOT NULL,
  `unitary_value` float NOT NULL,
  `stock` int(100) NOT NULL,
  `last_sale` date DEFAULT NULL,
  `code` varchar(120) DEFAULT NULL,
  `total_sale` float DEFAULT NULL,
  `excluded` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `description`, `unitary_value`, `stock`, `last_sale`, `code`, `total_sale`, `excluded`) VALUES
(13, 'batata', 1.5, 2000, '2019-08-09', NULL, 30, 0),
(14, 'Arroz', 17.5, 200, '2019-08-05', NULL, NULL, 0),
(15, 'Feijão', 5.5, 10000, '2019-08-05', NULL, NULL, 0),
(16, 'Coca-cola 2LT', 7.5, 20000, '2019-08-05', NULL, NULL, 0),
(17, 'Batata Rosa ', 1.5, 2000, NULL, NULL, NULL, 1),
(18, 'Farinha', 7.5, 200, NULL, NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(12) NOT NULL,
  `id_product` int(12) NOT NULL,
  `qtd` int(11) NOT NULL,
  `unitary_value` int(120) NOT NULL,
  `tot_value` varchar(120) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `id_product`, `qtd`, `unitary_value`, `tot_value`, `created_at`) VALUES
(21, 13, 2, 2, '3', '2021-03-08'),
(22, 13, 10, 2, '15', '2021-03-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
