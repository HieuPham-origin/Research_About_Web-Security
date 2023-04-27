-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 01:35 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fakebook`
--
DROP DATABASE IF EXISTS fakebook;


create database if not exists fakebook;

use fakebook;
-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `post_content` varchar(255) NOT NULL,
  `time_posted` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `username`, `post_content`, `time_posted`) VALUES
(43, 'Hao dep trai', 'Hôm nay Hào rất vui. Hào sẽ cố gắng làm bài thật tốt!!', '2023-04-27'),
(44, 'Hao dep trai', 'Trời hôm nay đẹp lắm!', '2023-04-27'),
(45, 'Hieu de thuong', 'Hôm nay mình quyết tâm đạt điểm 10 môn lập trình Web', '2023-04-27'),
(46, 'Hacker Lord', '<a href=\'attackfile.php\'>Bạn đã trúng Iphone 14 Promax. Nhấp vào đây để nhận thưởng</a>', '2023-04-27'),
(47, 'Hao dep trai', '<a href=\'attackfile.php\'>Bạn đã trúng Iphone 14 Promax. Nhấp vào đây để nhận thưởng</a>', '2023-04-27'),
(48, 'Hieu de thuong', '<a href=\'attackfile.php\'>Bạn đã trúng Iphone 14 Promax. Nhấp vào đây để nhận thưởng</a>', '2023-04-27'),
(49, 'Hieu de thuong', '<a href=\'attackfile.php\'>Bạn đã trúng Iphone 14 Promax. Nhấp vào đây để nhận thưởng</a>', '2023-04-27'),
(50, 'Hieu de thuong', '<a href=\'attackfile.php\'>Bạn đã trúng Iphone 14 Promax. Nhấp vào đây để nhận thưởng</a>', '2023-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`) VALUES
('abcd', '123456'),
('Hacker Lord', '123456'),
('Hao dep trai', '123456'),
('Hieu de thuong', '123456'),
('Quynh xinh gai', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
