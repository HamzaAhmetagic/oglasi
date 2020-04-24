-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2020 at 11:33 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oglasi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'bela tehnika'),
(2, 'sport'),
(3, 'kompjuteri'),
(4, 'ribolov');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `recipiant_id` int(11) DEFAULT NULL,
  `body` text DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `title` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `recipiant_id`, `body`, `created_at`, `title`) VALUES
(1, 1, 2, 'adjaosdjasd', NULL, 'title1'),
(2, 1, 2, 'adjaosdjasd', NULL, 'title2'),
(3, 1, 2, 'adjaosdjasd', NULL, 'title3'),
(4, 1, 2, 'asdasd', NULL, 'title4'),
(5, 2, 1, 'fdgdfg', NULL, 'title5');

-- --------------------------------------------------------

--
-- Table structure for table `oglasi`
--

CREATE TABLE `oglasi` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `used` int(1) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `text` text NOT NULL,
  `active` int(1) NOT NULL,
  `category` enum('bela tehnika','kompjuteri','sportska oprema','ribolov') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `oglasi`
--

INSERT INTO `oglasi` (`id`, `user_id`, `title`, `used`, `price`, `created_at`, `updated_at`, `text`, `active`, `category`) VALUES
(1, 1, 'trenazer', 1, 300, '2020-04-02 12:05:03', '2020-04-02 12:05:03', 'Prodajem polovan trenazer u odlicnom stanju', 1, 'sportska oprema'),
(2, 2, 'stap za pecanje', 0, 500, '2020-04-02 12:06:56', '2020-04-02 12:06:56', 'Prodajem stap za pecanje polovan', 1, 'ribolov'),
(3, 2, 'fsdf', 1, 333, '2020-04-15 12:00:27', '2020-04-15 12:00:27', '13123123', 1, 'ribolov'),
(4, 2, 'dsd', 1, 222, '2020-04-15 12:10:07', '2020-04-15 12:10:07', 'dsds', 1, 'ribolov'),
(5, 2, 'Bicikl', 0, 3000, '2020-04-15 12:11:25', '2020-04-15 12:11:25', 'prodaje bal', 1, 'kompjuteri'),
(6, 1, 'mot', 1, 4, '2020-04-15 12:12:13', '2020-04-15 12:12:13', 'jdskdo', 1, 'kompjuteri'),
(7, 1, 'Inactive oglas', 1, 111, '2020-04-15 12:16:23', '2020-04-15 12:16:23', 'adas', 0, 'bela tehnika');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`) VALUES
(1, 'Hamza', 'hamza@gmail.com', '12345', 0),
(2, 'Danilo', '1234', '12345', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oglasi`
--
ALTER TABLE `oglasi`
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
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `oglasi`
--
ALTER TABLE `oglasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
