-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2021 at 10:34 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `category`, `created_date`, `update_date`, `status`) VALUES
(1, 'PPKM Level 1123dsfsdf', 'Pemberlakuan PPKM Level 7 Pada Desember 2010', 'PPKMdfd', '2021-08-29 15:46:01', '0000-00-00 00:00:00', 'Draft'),
(3, 'PPKM Level 1123dsfsdf', 'Pemberlakuan PPKM Level 7 Pada Desember 2010', 'PPKMdfd', '2021-08-29 15:46:59', '0000-00-00 00:00:00', 'Trashed'),
(9, 'PPKM Level 10', 'Pemberlakuan PPKM Level 7 Pada Desember 2010', 'PPKM', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Publised'),
(10, 'PPKM Level 10', 'Pemberlakuan PPKM Level 7 Pada Desember 2010', 'PPKM', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Publised'),
(11, 'test23423', 'test content', 'test category', '2021-08-29 19:25:57', '0000-00-00 00:00:00', 'Publised'),
(12, 'test23423', 'test content', 'Test Category', '2021-08-29 19:25:59', '0000-00-00 00:00:00', 'Publised'),
(13, 'Test 3', 'Test Conten 3', 'Test Category 3', '2021-08-29 19:27:40', '0000-00-00 00:00:00', 'Publised'),
(14, 'test', 'test', 'tests', '2021-08-29 19:43:39', '0000-00-00 00:00:00', 'Publised'),
(15, 'testtest', 'testetset', 'testssetse', '2021-08-29 19:43:43', '0000-00-00 00:00:00', 'Publised'),
(16, 'testtesttests', 'testetsetstst', 'testssetsests', '2021-08-29 19:43:47', '0000-00-00 00:00:00', 'Publised'),
(17, 'ini test 234', 'ini test content', 'testst', '2021-08-29 20:11:08', '0000-00-00 00:00:00', 'Publised'),
(18, 'ini test 234', 'ini test content', 'testst', '2021-08-29 20:11:42', '0000-00-00 00:00:00', 'Publised');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
