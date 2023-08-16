-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2023 at 09:43 AM
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
-- Database: `campus360`
--

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
(0, 'mahdi', 'mahdi.sakib.mahfuz@gmail.com', '01517161066', '$2y$10$B4p9k4v8jpaJ0gGdJSpcJuqBXKYo/RE361n2lOUWD9eCnC/nWdXJC', '', '843aa7d779768b6334e601b64f952df1', 1, 1, '', '', '', '2023-08-15 07:43:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
