-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 09:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_53g`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`) VALUES
(20, 'Burger', '220', 'image/burger.png');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `db_username` varchar(100) NOT NULL,
  `db_email` varchar(100) NOT NULL,
  `db_phone` varchar(100) NOT NULL,
  `db_pass` varchar(255) NOT NULL,
  `db_image` varchar(255) NOT NULL,
  `verify_token` varchar(255) NOT NULL,
  `verify_status` tinyint(2) NOT NULL,
  `active_status` tinyint(2) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `telegram` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `db_username`, `db_email`, `db_phone`, `db_pass`, `db_image`, `verify_token`, `verify_status`, `active_status`, `fb`, `telegram`, `github`, `created_at`) VALUES
(35, 'Campus Dot Crew', 'campusdotcrew@gmail.com', '01517161066', '$2y$10$yPlHAACEVHRZw7t9NILFMuu4IouDPe5fgu67ucl9.8ddWKux2HvVW', '', 'c4834142d30f29c1bd8cfa1dcae9c870', 1, 1, '', '', '', '2023-08-08 12:53:05'),
(36, 'Mahdi Hasan', 'cse_2012020337@lus.ac.bd', '01517161066', '$2y$10$ipq5VpFxrOxK61LKrI5XtOqjOd26gKid6vPVEHaN/1pZtWmg6iEDi', 'P P  14603.jpg', 'fd5775b9afe4d736e99400297cfc169a', 1, 1, 'https://www.facebook.com/mahdi.mahdihasan.524', '', '', '2023-08-09 07:22:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
